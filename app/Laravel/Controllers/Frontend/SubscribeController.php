<?php 

namespace App\Laravel\Controllers\Frontend;

use Carbon,Auth;

class SubscribeController extends Controller{
		protected $data;
	public function __construct () {
		$this->data = [];		
		
	}

	public function index(){

		$this->data['page_title'] = "Subscription";
		return view('frontend.subscribe.index',$this->data);
	}
	

}