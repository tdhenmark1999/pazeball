<?php 

namespace App\Laravel\Controllers\Frontend;


use App\Laravel\Models\IdType;
use App\Laravel\Models\Identity;
use App\Laravel\Models\Certificate;
use App\Laravel\Models\User;
use App\Laravel\Models\UserSport;
use App\Laravel\Requests\Frontend\BecomePazeproRequest;
use Illuminate\Http\Request as PageRequest;

use Carbon,Auth,DB;
class BecomePazeproController extends Controller{


	protected $id_type_model;
	protected $identity_model;
	protected $certificate_model;
	protected $data;
	protected $auth;
	public function __construct(){
		$this->data = [];
		$this->id_type_model = new IdType;
		$this->identity_model = new Identity;
		$this->certificate_model = new Certificate;
	
		//Dropdown
		$this->data['id_types'] = $this->id_type_model->all();
	}
	public function index(){
	
		$this->data['page_title'] = "Become a pazepro";
		return view('frontend.become-pazepro.index',$this->data);
	}


	public function store(BecomePazeproRequest $request){
	
		// return  $request->certificate_file;

	// return $request->all();

	
		DB::beginTransaction();

			try {
				
				if(
					$request->hasFile('first_front_id_full_path') && 
					$request->hasFile('first_back_id_full_path') &&
					$request->hasFile('second_front_id_full_path') && 
					$request->hasFile('second_back_id_full_path') &&
					$request->hasFile('curriculum_vitae_full_path')
					){
							// return $request->all();
					$first_front_id = $request->file('first_front_id_full_path');
					$first_back_id = $request->file('first_back_id_full_path');
					$second_front_id = $request->file('second_front_id_full_path');
					$second_back_id = $request->file('second_back_id_full_path');
					$curriculum_vitae = $request->file('curriculum_vitae_full_path');
		
					$ffid = $first_front_id->getClientOriginalName();
					$fbid = $first_back_id->getClientOriginalName();
					$sfid = $second_front_id->getClientOriginalName();
					$sbid = $second_back_id->getClientOriginalName();
					$cv = 	$curriculum_vitae->getClientOriginalName();
					$path = public_path().'/uploads/identity/';
		
					$files = [$ffid,$fbid,$sfid,$sbid,$cv];
						// return $files;
		
					$this->identity_model->first_front_id_full_path = $path."/".$ffid;
					$this->identity_model->first_back_id_full_path = $path."/".$fbid;
					$this->identity_model->second_front_id_full_path = $path."/".$sfid;
					$this->identity_model->second_back_id_full_path = $path."/".$sbid;
					$this->identity_model->curriculum_vitae_full_path = $path."/".$cv;
					$this->identity_model->user_id = Auth::user()->uuid;
					$this->identity_model->fill($request->except(['first_front_id_full_path','first_back_id_full_path','second_front_id_full_path','second_back_id_full_path','curriculum_vitae_full_path']));
					

					//insert certificate
				
					if($request->hasFile('certificate_file')){
						for($x = 0; $x < count($request->certificate_file); $x++){
			
						$certification = new Certificate;
						$certificate = $request->file('certificate_file')[$x];
						$cname = $certificate->getClientOriginalName();
						$cpath = public_path().'/uploads/certificate/';
					//	#aasfas
						$certification->user_id = Auth::user()->uuid;
						$certification->filename = $cname;
						$certification->directory = $cpath;
						$certification->full_path = $cpath."/".$cname;
						$certification->month = $request->month[$x];
						$certification->year = $request->year[$x];
						$certification->title = $request->title[$x];
						$certification->city = $request->location[$x];
						$certification->save();
						$certificate->move($cpath,$cname);
						}
					}

					foreach($request->sport as $item){
						$user_sport = new UserSport;
						$user_sport->user_id = auth()->user()->uuid;
						$user_sport->sport_id = $item;
						$user_sport->save();
					}
					if($this->identity_model->save()){
							$first_front_id->move($path,$ffid);
							$first_back_id->move($path,$fbid);
							$second_front_id->move($path,$sfid);
							$second_back_id->move($path,$sbid);
							$curriculum_vitae->move($path,$cv);	
					}
					$user = User::where('uuid',auth()->user()->uuid)->first();
					$user->is_pazepro = "false";
					$user->save();
					DB::commit();
					return redirect()->back();
					// return response()->json([
					// 	'status'=> 200,
					// 	'message'=> "Submitted  Successfully!"
					// ]);
				}
				
			} catch (\Exception  $e) {
				DB::rollback();
				return 	redirect()->back();
				
				return $e;
				// return response()->json([
				// 	'status'=> 500,
				// 	'message'=> $e
				// ]);
			}
	
	
	}
}