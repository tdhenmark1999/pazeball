<?php 

namespace App\Laravel\Controllers\Frontend;
use App\Laravel\Models\User;
use App\Laravel\Models\Training;
use App\Laravel\Models\Reviews;
use App\Laravel\Models\Engaged;
use App\Laravel\Models\Appointment;
use Illuminate\Http\Request as PageRequest;
use Carbon,Auth,DB,Session;

class PazeproController extends Controller{
		protected $data;
		protected $user_model;
		protected $training_model;
		protected $session_model;
		protected $review_model;

	public function __construct () {
		$this->data = [];	
		$this->user_model = new User;	
		$this->training_model = new Training;	
		$this->session_model = new Engaged;	
		$this->review_model = new Reviews;	
		
	}

	public function index(){

		$this->data['page_title'] = "Pazepro";
		$this->data['paze_pros'] = $this->user_model->with('videos','certificates')->where('is_pazepro','true')->get();
		return view('frontend.pazepro.index',$this->data);
	}
	public function about($id = ""){
		$this->data['page_title'] = "Pazepro Profile";
		$ratings =  $this->review_model->where('review_for',$id)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
	 	$this->data['pazepro']  = $this->user_model->with(['certificates','videos','trainings'])->where('uuid',$id)->first();
		return view('frontend.pazepro.about',$this->data);
	}

	public function book(PageRequest $request,$id = ""){
		$appointment = new Appointment;
		$appointment->fill($request->all());
		$appointment->user_id = auth()->user()->uuid;
		$appointment->paze_pro_id =  $id;
		$appointment->save();
		return redirect()->back();
	}
	public function list_trainings($id = ""){
		$this->data['pazepro']  = $this->user_model->with(['certificates','videos','trainings'])->where('uuid',$id)->first();
		$this->data['page_title'] = "Pazepro List of Trainings";
		$ratings =  $this->review_model->where('review_for',$id)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		return view('frontend.pazepro.trainings.index',$this->data);
	}

	public function details_training($id = "",$training_id=""){
		$ratings =  $this->review_model->where('review_for',$id)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
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
		return view('frontend.pazepro.trainings.show',$this->data);
	}

	public function list_videos($id = ""){
		$this->data['pazepro']  = $this->user_model->with(['trainings'])->where('uuid',$id)->first();
		$this->data['page_title'] = "Pazepro List of Videos";
		$ratings =  $this->review_model->where('review_for',$id)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		return view('frontend.pazepro.videos.index',$this->data);
	}
	
	public function details_video($id = ""){
		$this->data['pazepro']  = $this->user_model->with(['trainings'])->where('uuid',$id)->first();
		$this->data['page_title'] = "Pazepro Details of Video";
		$ratings =  $this->review_model->where('review_for',$id)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		return view('frontend.pazepro.videos.show',$this->data);
	}

	public function list_reviews($id = ""){
		$this->data['pazepro']  = $this->user_model->with(['trainings'])->where('uuid',$id)->first();
		$this->data['reviews']  = $this->review_model->where('review_for',$id)->get();
		$ratings =  $this->review_model->where('review_for',$id)->selectRaw('SUM(rate)/COUNT(review_for) AS avg_rating')->first()->avg_rating;
		$this->data['ratings'] =  number_format(floor($ratings*100)/100,2, '.', ''); 
		$this->data['ratings_whole'] = floor($ratings);
		$this->data['page_title'] = "Pazepro List of Reviews";
		return view('frontend.pazepro.reviews',$this->data);
	}

	public function reviews_store($id = "", PageRequest $request){

		try {
			DB::beginTransaction();
			$this->review_model->review_for = $id;
			$this->review_model->review_by = auth()->user()->uuid;
			$this->review_model->rate = $request->rate == null ? 0 : $request->rate;
			$this->review_model->description = $request->description;
			$this->review_model->save();
			DB::commit();
			return redirect()->back();
		} catch (\Throwable $th) {
			throw $th;
			DB::rollback();
		}

	}

	public function engage($trainingId="",$sessionID="",$userId=""){

		DB::beginTransaction();
		try {
			$this->session_model->inactive = 1;
			$this->session_model->session_id = $sessionID;
			$this->session_model->training_id = $trainingId;
			$this->session_model->user_id = $userId ;
			$this->session_model->save();
			DB::commit();
			return redirect()->back();
		} catch (\Throwable $th) {
			throw $th;
			DB::rollback();
		}
	
	
		
	}
}