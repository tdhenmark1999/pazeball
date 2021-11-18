<?php 

namespace App\Laravel\Controllers\Frontend;

use Carbon,Auth;

class HomeController extends Controller{
		protected $data;
	public function __construct () {
		$this->data = [];		
		
	}

	public function index(){

		$this->data['page_title'] = "Homepage";
		return view('frontend.index',$this->data);
	}
	

}