<?php 

namespace App\Laravel\Controllers\System;


use App\Laravel\Models\Partner;
use App\Laravel\Models\Sale;
use App\Laravel\Models\Business;
use App\Laravel\Models\TransactionManager;
use App\Laravel\Models\Transaction;
use Carbon,Auth,DB;

class WalletManagementController extends Controller{
	protected $data;
	public function __construct(){
		$this->data = [];
		
	}
	public function cash_in(){
	
		return view('system.wallet-management.cash-in',$this->data);
	}
	
	public function cash_out(){
		$this->data['cashout_request'] = Transaction::with('details')->where('status','pending')->orderBy('created_at','asc')->get();
		return view('system.wallet-management.cash-out.index',$this->data);
	}
	public function cash_out_details($id = ""){
		 $this->data['item'] = Transaction::with('details')->where('id',$id)->first();
		return view('system.wallet-management.cash-out.show',$this->data);
	}
	public function approved($id = ""){
	
		try {
			DB::beginTransaction();
			$item = Transaction::find($id);
			$item->status = "Completed";
			$item->update();
			DB::commit();
			return redirect()->route('system.wallet_management.cash_out');
		} catch (\Throwable $th) {
			DB::rollback();
			throw $th;
		}
	}

	public function rewards(){
	
		return view('system.wallet-management.rewards');
	}
}