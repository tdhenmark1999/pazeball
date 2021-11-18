<?php 

namespace App\Laravel\Services;

use App\Laravel\Models\Winner;
use App\Laravel\Models\User;
use App\Laravel\Models\Wallet;
use App\Laravel\Models\Transaction;
use App\Laravel\Models\TransactionDetail;
use App\Laravel\Models\Recurring;
use Route,Str,Carbon,Input,DB,DateTime,DateInterval,DatePeriod;

class WalletService{

	public static function cash_in_transaction(array $param){
		$trans_id = $param['RefNo'];
		// .Str::upper(Str::random(6))

		$request = [
			'referenceNo' => $trans_id,
			'total' => $param['Amount'],
			'authCode' => $param['AuthCode'],
			'middlename' => $param['middle_name'],
			'lastname' => $param['last_name'],
			'subMerchantCode' => "",
			'subMerchantName' => "",
			'title' => $param['title'],
			'successUrl' => $param['success_url'],
			'cancelUrl' => $param['cancel_url'],
			'returnUrl' => $param['return_url'],
			'details' => [
				'particularFee' => $param['particular_fee'],
				'penaltyFee' => $param['penalty_fee'],
				'dstFee' => $param['dst_fee'],
			]

		];

		return $request;
	}


    public static function store(array $param){

        try {
            DB::beginTransaction();
            $data = new Wallet;
            $data->amount = $param['amount'];
            $data->method = $param['method'];
            $data->remarks = $param['remarks'];
            $data->status = 'Pending';
            $data->user_id = $param['user_id'];
            $data->save();
            $data->code = 'CI-'.Str::random(10).date('dmY',strtotime(now())) .$data->id;
            $data->update();
            DB::commit();
            return redirect()->route('frontend.wallet.ipay88_straight',[$data->code,$data->method,$data->remarks,$data->amount]);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;


        }
       


    }
    public static function success(array $param){

        try {
            DB::beginTransaction();
            $data = Wallet::where("code", $param['code'] )->first();
            $data->status = $param['status'];
            $data->reference_code = $param['reference_code'];
            $data->save();
            $user = User::where('uuid',auth()->user()->uuid)->first();
            $points =  $user->points +  $param['amount'];
            $user->points = $points;
            $user->update();

            //Insert to transaction
       
            $header = new Transaction;
            $header->type = "Cash in";
            $header->remarks = $data->remarks;
            $header->user_id = auth()->user()->uuid;
            $header->total_amount = $data->amount;
            $header->status =  "Completed" ;
            $header->points = $data->amount;
            $header->save();
    
           //Details
           $detail = new TransactionDetail;
        //    $detail->payment_option = "---";
        //    $detail->bank = $param['bank'] ? $param['bank'] : "---" ;
           $detail->account_name = Helper::get_user(auth()->user()->uuid) ;
           $detail->amount = $data->amount;
           $detail->total_amount = $data->amount;
           $detail->save();
    
           //Generate Transaction ID
           $header->transaction_id = 'PB-'.Str::random(10).date('dmY',strtotime(now())) .$header->id; 
           $header->update();
           $detail->transaction_id = $header->transaction_id;
           $detail->update();
           DB::commit();
            return redirect()->route('frontend.wallet.logs');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;


        }
       


    }


    public function cancel(array $param){
        $transaction = Recurring::where('ref_no',$param['ref_no'])->first();
      
        $transaction->status =  $param['error_message'] == "Transaction did not pass all risk check" ? "Failed" : "Cancelled";
        $transaction->update();
        session()->flash('notification-status', "error");
        session()->flash('notification-msg',$param['error_message']);
        return redirect()->route("frontend.wallet.logs");
    }

    public static function getById($code){
        return $wallet;

    }





	

}

