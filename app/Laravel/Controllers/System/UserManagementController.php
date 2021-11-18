<?php 

namespace App\Laravel\Controllers\System;


use App\Laravel\Models\User;


use Carbon,Auth,DB;

class UserManagementController extends Controller{


	protected $user_model;

	public function __construct () {
		$this->data = [];
		$this->user_model = new User;
	}

	public function pazer(){
		$this->data['pazers'] = User::where('type','pazer')->get();
		return view('system.user-management.pazer',$this->data);
	}
public function pazepro(){
		$this->data['pazepros'] = User::where('type','pazer')->where('is_pazepro','true')->get();
		return view('system.user-management.pazepro',$this->data);
	}
	public function admin(){
		$this->data['admins'] = User::where('type','admin')->get();
		return view('system.user-management.admin',$this->data);
	}
}