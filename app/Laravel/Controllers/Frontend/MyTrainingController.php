<?php 

namespace App\Laravel\Controllers\Frontend;
use App\Laravel\Models\Training;
use App\Laravel\Models\TrainingSessions;
use Carbon,Auth;

class MyTrainingController extends Controller{
		protected $data;
	public function __construct () {
		$this->data = [];		
		
	}

	public function index(){

		$this->data['page_title'] = "List of My Training";
		$this->data['trainings'] = Training::where('user_id', auth()->user()->uuid)->with('sessions')->get();
		return view('frontend.training.my-training.index',$this->data);
	}

	public function show($id = ""){

		$this->data['page_title'] = "My Training Details ";
		$this->data["training"] =  Training::where('uuid',$id)->with('sessions')->first();
		return view('frontend.training.my-training.show',$this->data);
	}
	
}