<?php 

namespace App\Laravel\Controllers\System;


use App\Laravel\Models\User as user;
use App\Laravel\Models\Sale;
use App\Laravel\Models\Business;
use App\Laravel\Models\TransactionManager;

use Carbon,Auth;

class BecomePazeproController extends Controller{

protected $user_model;
protected $user;
protected $data;
public function __construct(){
	$this->data = [];
	$this->user_model = new User;
	
}
	public function index(){
		$this->data['users'] = $this->user_model->with(['certificates','address'])->where('is_pazepro','false')->get();
		return view('system.become-pazepro.index',$this->data);
	}
public function details($id = ""){
		$this->data['info'] = $this->user_model->with(['certificates','address'])->where('uuid',$id)->first();
		return view('system.become-pazepro.show',$this->data);
	}

	public function approve($id=""){
		
		$user = $this->user_model->where('uuid',$id)->first();
		$user->is_pazepro = "true";
		$user->save();
		return redirect()->route('system.become_pazepro.index');
	}
}