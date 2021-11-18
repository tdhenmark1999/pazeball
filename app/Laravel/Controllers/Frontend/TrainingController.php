<?php 

namespace App\Laravel\Controllers\Frontend;

use App\Laravel\Models\Province;
use App\Laravel\Models\City;
use App\Laravel\Models\Category;
use App\Laravel\Models\Address;
use App\Laravel\Models\Training;
use App\Laravel\Models\TrainingSessions;
use App\Laravel\Models\Engaged;


use App\Laravel\Requests\Frontend\VideoRequest;
use App\Laravel\Requests\Frontend\TrainingRequest;
use Illuminate\Http\Request as PageRequest;
use Carbon,Auth,Str,DB;

class TrainingController extends Controller{

	protected $data;
	protected $training_model;
	protected $training_session_model;
	protected $auth;

	public function __construct () {
		$this->data = [];
		$this->data['provinces'] = Province::orderBy('prov_desc','asc')->get();
		$this->data['address'] = Address::all();
		$this->data['cities'] = City::all();
		$this->data['categories'] = Category::all();
		$this->data['training_count'] = Training::count();
		$this->training_model = new Training;
		$this->training_session_model = new TrainingSessions;
		$this->session_model = new Engaged;	
	}
	public function index(){
		$this->data['page_title'] = "All Trainings";
	    $this->data['trainings'] = $this->training_model->all();
		return view('frontend.training.index',$this->data);
	}
		public function my_training(){
		$this->data['page_title'] = "My Training";
		return view('frontend.training.my-training.index',$this->data);
	}
	public function create(){
		
		$this->data['page_title'] = "Create Training";
		return view('frontend.training.create',$this->data);
	}
		public function success(){
		
		$this->data['page_title'] = "Successfully Created";
		return view('frontend.training.success',$this->data);
	}
	public function store(TrainingRequest $request){

		// return $request->all();
		DB::beginTransaction();

		try {
			
		if($request->hasFile('file')){
			$file = $request->file('file');
			$filename = time().$file->getClientOriginalName();
			$path = public_path().'/uploads/images/';
			$this->training_model->file_name = $filename;
			$this->training_model->directory = $path;
			$this->training_model->uuid = time().Str::uuid()->toString();
			$this->training_model->user_id = Auth::user()->uuid;
			$this->training_model->full_path = $path."/".$filename;
			$this->training_model->address = $request->address;
			$this->training_model->session = count($request->date);
			$this->training_model->fill($request->except(['file']));
			if($this->training_model->save()){

				$file->move($path, $filename);
				// save training_session
			for($x = 0; $x < count($request->date); $x++){

				$data = new TrainingSessions;
				$data->training_id = $this->training_model->uuid;
				$data->time_start = $request->time_start[$x];
				$data->time_end = $request->time_end[$x];
				$data->date = $request->date[$x];
				$data->save();
			}


			DB::commit();
				return response()->json([
					'status'=> 200,
					'message'=> "Training Added Successfully!",
					'data' =>  $this->training_model,
					'sessions' => $this->training_session_model
				]);
			}
		}
			

		} catch (\Throwable $th) {
			throw $th;
			DB::rollback();
			return response()->json([
				'status'=> 200,
				'message'=> $th,
			]);
			
		}

	

	}
	public function show($id = "",$training_id=""){


		$this->data['page_title'] = "Training Detail";
		$this->data['is_engaged'] =  $this->session_model->where('training_id',$id)->where('user_id',auth()->user()->uuid)->get();
		$this->data['training'] = Training::with(['sessions'])->where('uuid',$id)->first();
		return view('frontend.training.show',$this->data);
	}

	public function getCities(PageRequest $request){
		return response()->json([
			"data" => City::where('prov_code',$request['id'])->get()
		]);
	}
}
