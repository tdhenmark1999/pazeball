<?php 

namespace App\Laravel\Controllers\Frontend;
use App\Laravel\Models\Rewards;
use Carbon,Auth;

class RewardsController extends Controller{
		protected $data;
		protected $rewards_model;
	public function __construct () {
		$this->data = [];	
		$this->rewards_model = new Rewards;	
		
	}

	public function index(){
		$this->data['rewards'] = $this->rewards_model->all();
		$this->data['page_title'] = "List of Rewards";
		return view('frontend.rewards.index',$this->data);
	}

	public function details($id = NULL){
		$this->data['reward'] = Rewards::find($id);
		$this->data['page_title'] = "Rewards Information ";
		return view('frontend.rewards.details',$this->data);
	}
	
}