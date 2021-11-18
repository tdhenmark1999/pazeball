<?php 

namespace App\Laravel\Controllers\Frontend;

use Carbon,Auth;

class AccountVerificationController extends Controller{
		protected $data;
	public function __construct () {
		$this->data = [];		
		
	}

	public function index(){

		$this->data['page_title'] = "Account Verification ";
		return view('frontend.account-verification.index',$this->data);
	}
}