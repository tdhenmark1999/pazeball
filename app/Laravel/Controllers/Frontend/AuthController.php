<?php 

namespace App\Laravel\Controllers\Frontend;


use App\Laravel\Models\Partner;
use Illuminate\Contracts\Auth\Guard;
use App\Laravel\Models\Province;
use App\Laravel\Models\City;
use App\Laravel\Models\Business;
use App\Laravel\Models\User;
use App\Laravel\Models\Address;
use App\Laravel\Models\TransactionManager;
//Request
use App\Laravel\Requests\Frontend\RegisterRequest;
use Illuminate\Http\Request as PageRequest;

use App\Mail\EmailValidation;
use Session, Input, Auth,Carbon,Helper,DB,Str,Mail;

class AuthController extends Controller{

	protected $data;
	protected $user;
	protected $address;

	public function __construct(Guard $auth){
		$this->auth = $auth;
		$this->data = [];
		$this->user_model = new User;
		$this->address_model = new Address;
	}

	public function login($redirect_uri = NULL){
		$this->data['page_title'] = "Login";
		return view('frontend.auth.login',$this->data);
	}
	public function verification($redirect_uri = NULL){
		$this->data['page_title'] = "Verification";
		return view('frontend.auth.verification',$this->data);
	}
public function register($redirect_uri = NULL){
		
		$this->data['provinces'] = Province::orderBy('prov_desc', 'asc')->get();
		$this->data['cities'] = City::all();
		$this->data['page_title'] = "Register";
		return view('frontend.auth.register',$this->data);
	}

	public function store(RegisterRequest $request){
		//  return $request->all();

		DB::beginTransaction();
		try {
			$this->user_model->fill($request->except(['password','re-password']));
			$this->user_model->password = bcrypt($request->password);
			$this->user_model->points = '200';
			$this->user_model->type = 'pazer';
			$this->user_model->email_confirmation = substr(number_format(time() * rand(),0,'',''),0,6);
			$this->user_model->uuid = Str::uuid()->toString();
			$this->user_model->save();
			// if($request->hasFile('full_path')){
			// 	$file = $request->file('full_path');
			// 	$filename = $file->getClientOriginalName();
			// 	$path =public_path().'/uploads/user_avatar/';

			// 	$this->user_model->full_path = $path."/".$filename;
			// 	$this->user_model->full_path = $path.$filename;
			// }
			// if($this->user_model->save()){
			// 	$file->move($path,$filename);
			// }

			$this->address_model->user_id = $this->user_model->uuid;
			$this->address_model->province = $request->province;
			$this->address_model->city = $request->city;
			$this->address_model->zip_code = $request->zip_code;
			if($this->address_model->save()){
				DB::commit();
				$ch = curl_init();
				$parameters = array(
					'apikey' => '3f1f0e11f83e78554d9ccd83988f9494', //Your API KEY
					'number' => $request->mobile_number,
					'message' =>  "Welcome to Pazeball Web App! Here is your account activation code: ".$this->user_model->email_confirmation,
					'sendername' => 'Pazeball'
				);
				curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
				curl_setopt( $ch, CURLOPT_POST, 1 );
				
				//Send the parameters set above with the request
				curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
				
				// Receive response from server
				curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
				$output = curl_exec( $ch );
				curl_close ($ch);
				return response()->json([
					'status'=> 200,
					'message'=> 'Register Successfully',
					'data' => $this->user_model
				]);
			}
		
		
			 
			// $details = [
			// 	"title" => "email verifacation",
			// 	"body" => $this->user_model->email_confirmation
			// 	 ];
		// Mail::to($request->email)->send( new EmailValidation($details));
	
		} catch (Exception $th) {
			DB::rollback();
			// throw $th;
			return response()->json([
				'status'=> 500,
				'message'=> $th
			]);
		}

		
		
	}

	public function confirmation(){
		$this->data['page_title'] = "Verification";
		return view('frontend.auth.verification',$this->data);
	}

	public function send_confirmation(PageRequest $request){

	 $user = User::where('email_confirmation',$request->vcode)->first();
		if($user){

			try {
				DB::beginTransaction();
				$user->email_confirmation = "verified";
				$user->status = "active";
				
				if($user->save()){
					DB::commit();
					return response()->json([
						'status'=> 200,
						'message'=> 'Verified Successfully',
						'data' => $this->user_model
					]);
				}else{

				}
				
			
				
			} catch (\Throwable $th) {
				DB::rollback();
				
			}
		}else{
			return response()->json([
				'status'=> 404,
				'message'=> 'invalid Code',
			
			]);
		}
	}
	public function authenticate($redirect_uri = NULL){
		try{
			$this->data['page_title'] = "Login";
			$username = Input::get('email');
			$password = Input::get('password');
			$remember_me = Input::get('remember_me',0);
			$field = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';	

			$user = User::where($field,$username)
					->where('status','active')
					->whereNotIn('type', ['admin','super_user'])
					->first();
			
			if(!$user){

				session()->flash('notification-status', "error");
				session()->flash('notification-msg', "Invalid username/password");
				
				return redirect()->back();
			}

			if($this->auth->attempt([$field => $username,'password' => $password], $remember_me)){
				session()->flash('notification-status','success');
				session()->flash('notification-title',"It's nice to be back");
				session()->flash('notification-msg',"Welcome {$this->auth->user()->name}!");
				$this->auth->user()->save();
				if($redirect_uri AND session()->has($redirect_uri)){
					return redirect( session()->get($redirect_uri) );
				}

				
			
				return redirect()->route('frontend.video.index');
			}	

			session()->flash('notification-status','failed');
			session()->flash('notification-msg','Wrong username or password.');
			return redirect()->back();

		}catch(Exception $e){
			abort(500);
		}
	}

	public function destroy(){
		$this->auth->logout();
		session()->flash('notification-status','success');
		session()->flash('notification-msg','You are now signed off.');
		return redirect()->route('frontend.auth.login');
	}


	public function email_verification($code = ""){

		$user = User::where('email_confirmation',$code)->first();
		if($user){

			try {
				DB::beginTransaction();
				$user->email_confirmation = "verified";
				$user->status = "active";
				$user->save();

				session()->flash('notification-status','success');
				session()->flash('notification-msg','Email Verified, You can now login your Account');
				return redirect()->route('frontend.auth.login');
				DB::commit();
			} catch (\Throwable $th) {
				DB::rollback();
				throw $th;
			}
		
			

		}
	}


}