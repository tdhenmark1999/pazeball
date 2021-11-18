<?php 

namespace App\Laravel\Controllers\Frontend;
use App\Laravel\Models\User;
use App\Laravel\Models\Training;
use App\Laravel\Models\Reviews;
use App\Laravel\Models\Engaged;
use App\Laravel\Models\Province;
use App\Laravel\Models\City;
use App\Laravel\Models\Category;
use App\Laravel\Models\Appointment;

use Illuminate\Http\Request as PageRequest;
use Carbon,Auth,Str,DB;

class ProfileController extends Controller{
		protected $data;
		protected $user_model;
		protected $review_model;
		protected $training_model;
		protected $session_model;
		
	
	public function __construct () {
		$this->data = [];		
		$this->user_model = new User;	
		$this->review_model = new Reviews;	
		$this->data['provinces'] = Province::orderBy('prov_desc','asc')->get();
		$this->data['cities'] = City::all();
		$this->data['categories'] = Category::all();
		$this->training_model = new Training;	
		$this->session_model = new Engaged;	
	
	}

	public function index(){
		$this->data['my_profile']  = $this->user_model->with(['certificates','videos','trainings'])->where('uuid',Auth::user()->uuid)->first();
		$this->data['page_title'] = "My Profile";
		$ratings =  $this->review_model->where('review_for',Auth::user()->uuid)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		return view('frontend.profile.about',$this->data);
	}
	public function trainings(){
		$this->data['my_profile']  = $this->user_model->with(['certificates','videos','trainings'])->where('uuid',Auth::user()->uuid)->first();
		$this->data['page_title'] = "List of Trainings ";
		$ratings =  $this->review_model->where('review_for',Auth::user()->uuid)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		return view('frontend.profile.trainings.index',$this->data);
	}
	

	public function training_details($id = "",$training_id=""){
		$ratings =  $this->review_model->where('review_for',Auth::user()->uuid)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		$this->data['pazepro']  = $this->user_model->with(['trainings'])->where('uuid',$id)->first();
		$this->data['training']  = $this->training_model->with('sessions')->where('uuid',$training_id)->first();
		$this->data['engagements']  = $this->session_model->where('training_id',$training_id)->get();
		$this->data['is_engaged'] =  $this->session_model->where('training_id',$training_id)->where('user_id',auth()->user()->uuid)->get();
		$this->data['page_title'] = "Pazepro Details of Training";
		$this->data['trainings']  = $this->training_model
	->where('uuid',auth()->user()->uuid)
	->orderBy('created_at')->get();
		return view('frontend.profile.trainings.show',$this->data);
	}

	
	public function reviews(){
		$ratings =  $this->review_model->where('review_for',Auth::user()->uuid)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		$this->data['my_profile']  = $this->user_model->with(['certificates','videos','trainings'])->where('uuid',Auth::user()->uuid)->first();
		$this->data['page_title'] = "List of Reviews ";
		$this->data['reviews']  = $this->review_model->where('review_for',Auth::user()->uuid)->get();
		return view('frontend.profile.reviews',$this->data);
	}

	public function videos(){
		$ratings =  $this->review_model->where('review_for',Auth::user()->uuid)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		$this->data['my_profile']  = $this->user_model->with(['certificates','videos','trainings'])->where('uuid',Auth::user()->uuid)->first();
		$this->data['page_title'] = "List of Videos ";
		return view('frontend.profile.videos.index',$this->data);
	}

	public function video_details(){
		$ratings =  $this->review_model->where('review_for',Auth::user()->uuid)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		$this->data['my_profile']  = $this->user_model->with(['certificates','videos','trainings'])->where('uuid',Auth::user()->uuid)->first();	
		$this->data['page_title'] = "Details of Video ";
		return view('frontend.profile.videos.show',$this->data);
	}

	public function booking_group(){

		$this->data['page_title'] = "List of Appointment ";

		
		return view('frontend.profile.booking.group',$this->data);
	}
	public function booking_individual(){

		$this->data['page_title'] = "List of Appointment ";
		$this->data['booking_ind'] = Appointment::with(['users'])->where('paze_pro_id',auth()->user()->uuid)->get();

		return view('frontend.profile.booking.individual',$this->data);
	}
	
	public function booking_details(){

		$this->data['page_title'] = "Details of Booking ";
		return view('frontend.profile.booking.details',$this->data);
	}

	public function change_password(){

		$this->data['page_title'] = "Change Password ";
		return view('frontend.profile.account-settings.change-password',$this->data);
	}

	public function transactions(){

		$this->data['page_title'] = "Transactions ";
		return view('frontend.profile.account-settings.transactions',$this->data);
	}

	public function update_profile(){
		$this->data['profile_info'] = User::where('uuid',auth()->user()->uuid)->first();
		$this->data['page_title'] = "Update Profile ";
		return view('frontend.profile.account-settings.update-profile',$this->data);
	}
	

	public function update(PageRequest $request){
		
		try {
			
			DB::beginTransaction();
			$this->user_model = User::where('uuid',auth()->user()->uuid)->first();
			if($request->hasFile('file')){
				$file = $request->file('file');
				$filename = time().$file->getClientOriginalName();
				$path = public_path().'/uploads/images/';
				$this->user_model->file_name = $filename;
				$this->user_model->directory = $path;
				$this->user_model->full_path = $path."/".$filename;

				
				$this->user_model->fill($request->except(['file'] ));
				if($this->user_model->save()){

					$file->move($path, $filename);
					// save training_session
	
					DB::commit();
					return redirect()->route('frontend.account_settings.update_profile');
				}
			}
			else if($request->hasFile('file_banner')){
			

				$file_banner = $request->file('file_banner');
				$filename_banner = time().$file_banner->getClientOriginalName();
				$path_banner = public_path().'/uploads/images/';
				$this->user_model->file_name_banner = $filename_banner;
				$this->user_model->directory_banner = $path_banner;
				$this->user_model->full_path_banner = $path_banner."/".$filename_banner;
				
				$this->user_model->fill($request->except(['file_banner'] ));
				if($this->user_model->save()){

					$file_banner->move($path_banner, $filename_banner);
					// save training_session
	
					DB::commit();
					return redirect()->route('frontend.account_settings.update_profile');
				}
			}
			else if($request->hasFile('file') && $request->hasFile('file_banner')){
				$file = $request->file('file');
				$filename = time().$file->getClientOriginalName();
				$path = public_path().'/uploads/images/';
				$this->user_model->file_name = $filename;
				$this->user_model->directory = $path;
				$this->user_model->full_path = $path."/".$filename;

				$file_banner = $request->file('file_banner');
				$filename_banner = time().$file_banner->getClientOriginalName();
				$path_banner = public_path().'/uploads/images/';
				$this->user_model->file_name_banner = $filename_banner;
				$this->user_model->directory_banner = $path_banner;
				$this->user_model->full_path_banner = $path_banner."/".$filename_banner;
				
				$this->user_model->fill($request->except(['file','file_banner'] ));
				if($this->user_model->save()){

					$file->move($path, $filename);
					$file_banner->move($path_banner, $filename_banner);
					// save training_session
	
					DB::commit();
					return redirect()->route('frontend.account_settings.update_profile');
				}
			}
			else {
				$this->user_model->fill($request->except(['file','file_banner'] ));
				$user->save();
				DB::commit();
				session()->flash('notification-status','success');
				session()->flash('notification-msg',"Parameter .");
				return redirect()->route("frontend.account_settings.update_profile");
			}
		
		} catch (Exception $e) {
			DB::rollback();
			session()->flash('notification-status','warning');
			session()->flash('notification-msg',"Went something wrong".$e->message());
			return redirect()->back();
		}
	}

	

}