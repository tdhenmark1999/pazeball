<?php 

namespace App\Laravel\Controllers\System;


use App\Laravel\Models\Partner;
use App\Laravel\Models\Sale;
use App\Laravel\Models\Business;
use App\Laravel\Models\TransactionManager;

use Carbon,Auth;

class TransactionController extends Controller{

	public function index(){
		
		return view('system.transaction.index');
	}

}