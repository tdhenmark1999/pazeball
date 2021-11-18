<?php 

namespace App\Laravel\Controllers\Frontend;
use Illuminate\Http\Request as PageRequest;

use App\Laravel\Models\Transaction;
use App\Laravel\Models\TransactionDetail;
use App\Laravel\Models\User;
use App\Laravel\Models\Recurring;
use App\Laravel\Services\WalletService;
use Carbon,Auth,Str,Mail,DB,Helper;
//PH01209
//ZTsayVgjMt
use App\Mail\EmailValidation;
use Ipay88\Responses\Response as IPay88Response;
use Hash;
class WalletController extends Controller{
		protected $data;
		protected $wallet_service;
		
	public function __construct () {
		$this->data = [];		
		$this->wallet_service = new WalletService;
	}

	public function logs(){

		$this->data['logs'] = Transaction::with('details')->where('user_id',auth()->user()->uuid)->orderBy('created_at','desc')->paginate(10);
		$this->data['page_title'] = "Wallet - Activity Logs";
		return view('frontend.wallet.logs',$this->data);
	}
	public function iPay88_signature($source)
	{
	return base64_encode(hex2bin(sha1($source)));
	}
public	function hex2bin($hexSource)
	{
		$bin="";
	for ($i=0;$i<strlen($hexSource);$i=$i+2)
	{
	$bin .= chr(hexdec(substr($hexSource,$i,2)));
	}
	return $bin;
	}

	public function cash_in(){
		
		$this->data['page_title'] = "Wallet - Cash in";
		return view('frontend.wallet.cash-in',$this->data);
	
	}

	public function store_cash_in(PageRequest $request){


		$this->data['amount'] = $request->amount;
		$this->data['user_id'] = auth()->user()->uuid;
		$this->data['method'] = 1;
		$this->data['remarks'] = $request->remarks;
		return 	$this->wallet_service->store($this->data);
	}

	public function ipay88_straight($code = "", $method = "" , $remarks = "", $amount = ""){

			$this->data['payment_id'] = "";
			$this->data['merchant_code'] = "PH01211"; //config('app.merchant_code'); // "PH00640";
			$this->data['merchant_key'] = "9IXYqqqMot"; //config('app.merchant_key');//"EpgGdfpvao";
			$this->data['url'] = config('app.straight_url');//"https://sandbox.ipay88.com.ph/epayment/entry.asp"; 
			$this->data['refno'] =  $code; 
			$this->data['currency'] = "PHP";
			$this->data['amount'] = number_format($amount,2);
			$this->data['remarks'] = $remarks;
			$this->data['email'] = auth()->user()->email;
			$this->data['contact'] = "09163746664";
			$this->data['name'] = auth()->user()->first_name ." ". auth()->user()->last_name;
			$this->data['signature'] = $this->iPay88_signature( $this->data['merchant_key'].$this->data['merchant_code'].$this->data['refno'].str_replace([".",","],"",$this->data['amount']).$this->data['currency']);
			$this->data['page_title'] = "Wallet - Cash in";
			return view('frontend.ipay88.index',$this->data);
	}
	public function ipay88_callback_url(PageRequest $request){
		// return $request->all();
		if($request->Status == 1){
			$this->data['status'] = "Completed";
			$this->data['reference_code'] = $request->TransId;
			$this->data['code'] = $request->RefNo;
			$this->data['amount'] = $request->Amount;
			$this->data['bank'] = $request->S_bankname;
			return 	$this->wallet_service->success($this->data);
		}
		session()->flash('notification-status', "error");
		session()->flash('notification-msg',$request->ErrDesc);
		return redirect()->route("frontend.wallet.logs");
			// return  response()->json([
			// 	"message" => "Failed",
			// 	"status" => FALSE,
			// 	"ErrDesc" => $request->ErrDesc,
			// ]);
	}


	public function ipay88_recurring($price){
		$this->data['payment_id'] = "";
		$this->data['merchant_code'] = config('app.r_merchant_code'); 
		$this->data['merchant_key'] =  config('app.r_merchant_key'); 
	    $this->data['first_payment_date'] = date("dmY",strtotime(now())); 
		$this->data['amount'] = number_format($price,2);
		$this->data['currency'] ="PHP";
		$this->data['number_of_payment'] = config('app.r_no_of_payments');
		$this->data['frequency'] = "1";
		$this->data['description'] = "Recurring method";
		$this->data['CC_Ic'] = auth()->user()->first_name . " " . auth()->user()->last_name ;
		$this->data['CC_Email'] = "juan@gmail.com";
		$this->data['CC_Phone'] = "09175236355";
		$this->data['P_Name'] = auth()->user()->first_name . " " . auth()->user()->last_name;
		$this->data['P_Email'] = auth()->user()->email;
		$this->data['P_Phone'] = auth()->user()->mobile_number;
		$this->data['P_Addrl1'] = "lot 17 block 22";
		$this->data['P_Addrl2'] = "";
		$this->data['P_City'] = "Makati City";
		$this->data['P_State'] = "NCR";
		$this->data['P_Zip'] = "1208";
		$this->data['P_Country'] = "Philippines";
		$this->data['page_title'] = "Recuring";
		$this->data['url'] =  "https://payment.ipay88.com.ph/recurringpayment2.0/subscription.asp";  //"https://sandbox.ipay88.com.ph//recurringpayment2.0/subscription.asp"; 
		try {
		DB::beginTransaction();
		$recurring = new Recurring;
		$recurring->amount = $this->data['amount'];
		$recurring->first_payment_date = $this->data['first_payment_date'];
		$recurring->status = "Pending";
		$recurring->amount = $this->data['amount'];
		$recurring->save();

		$recurring->ref_no = 'PR-'.Str::random(10).date('dmY',strtotime(now())) .$recurring->id;
		$this->data['refno'] = $recurring->ref_no; 
		$sig =  $this->data['merchant_code'].$this->data['merchant_key'].$this->data['refno'].$this->data['first_payment_date'].$this->data['currency'].str_replace([".",","],"",$this->data['amount']).$this->data['number_of_payment'].$this->data['frequency'];
		$this->data['Signature'] = $this->iPay88_signature($sig);
		$recurring->signature = $this->data['Signature'];
		$recurring->update();
		DB::commit();
		} catch (\Throwable $th) {
			throw $th;
		}
	

		return view('frontend.ipay88.recurring',$this->data);
}

public function ipay88_recurring_response(PageRequest $request){


	if($request->status == "00"){
		return "OK";
	}
	// return $request->all();
	$this->data['ref_no']  = $request->RefNo ? $request->RefNo : $request->Refno;
	$this->data['error_message']  = $request->ErrDesc;
	return $this->wallet_service->cancel($this->data);
}

public function ipay88_recurring_backend_url(PageRequest $request){

	
	if($request->status == "00"){
		return "OK";
	}
	// return $request->all();
	$this->data['ref_no']  = $request->RefNo ? $request->RefNo : $request->Refno;
	$this->data['error_message']  = $request->ErrDesc;
	return $this->wallet_service->cancel($this->data);

}



	public function cash_out(){
	
		$this->data['page_title'] = "Wallet - Cash out";
		return view('frontend.wallet.cash-out',$this->data);
	}
	public function cash_out_checkout(PageRequest $request){
		
		$this->data['bank'] = $request->bank; 
		$this->data['account_name'] = $request->account_name; 
		$this->data['account_no'] = $request->account_no; 
		$this->data['payment_option'] = $request->payment_option; 
		$this->data['amount'] = $request->amount; 
		$this->data['remarks'] = $request->remarks; 
		$this->data['amount'] = $request->amount; 
		$this->data['tax'] =   number_format((0.12 *  $request->amount),2);
		$this->data['service_fee'] =   number_format((0.08 *  $request->amount),2);
		$this->data['total_amount'] = number_format($this->data['amount'] - ($this->data['tax'] + $this->data['service_fee']),2);

		

		$this->data['page_title'] = "Wallet - Cash out checkout";
		return view('frontend.wallet.cash-out-checkout',$this->data);
	}

	public function place_checkout(PageRequest $request){
		
		// return $request->all();
	try {
		
		DB::beginTransaction();
		$header = new Transaction;
		$header->type = "Cash out";
		$header->remarks = $request->remarks;
		$header->user_id = auth()->user()->uuid;
		$header->total_amount = str_replace(",","",$request->total_amount);
		$header->points = str_replace(",","",$request->amount);
		$header->save();

       //Details
	   $detail = new TransactionDetail;
	   $detail->payment_option = $request->payment_option;
	   $detail->bank = $request->bank;
	   $detail->account_name = $request->account_name ? $request->account_name : Helper::get_user(auth()->user()->uuid) ;
	   $detail->account_no = $request->account_no;
	   $detail->amount = str_replace(",","",$request->amount);
	   $detail->service_fee = $request->service_fee;
	   $detail->tax = $request->tax;
	   $detail->total_amount = str_replace(",","",$request->total_amount);
	   $detail->save();

	   //Generate Transaction ID

	   $header->transaction_id = str_pad('PB-0000',8,$header->id,STR_PAD_RIGHT) ;
	   $header->update();
	   $detail->transaction_id = $header->transaction_id;
	   $detail->update();

		//Deduct points if cashout is successfull
	   $user = User::where("uuid",auth()->user()->uuid)->first();
	   $points = $user->points - $header->points;
	   $user->points = $points;
	   $user->update();
	   DB::commit();
	   return redirect()->route('frontend.wallet.logs');
	} catch (\Throwable $th) {
		DB::rollback();
		// return redirect()->route('frontend.wallet.cash_out');
		throw $th;
	
	}

		$this->data['bank'] = $request->bank; 
		$this->data['account_name'] = $request->account_name; 
		$this->data['account_no'] = $request->account_no; 
		$this->data['payment_option'] = $request->payment_option; 
		$this->data['amount'] = $request->amount; 
		$this->data['remarks'] = $request->remarks; 
		$this->data['amount'] = $request->amount; 
		$this->data['tax'] =   number_format((0.12 *  $request->amount),2);
		$this->data['service_fee'] =   number_format((0.08 *  $request->amount),2);
		$this->data['total_amount'] = number_format($this->data['amount'] - ($this->data['tax'] + $this->data['service_fee']),2);

	

		$this->data['page_title'] = "Wallet - Cash out checkout";
		return view('frontend.wallet.cash-out-checkout',$this->data);
	}
	public function rewards(){

		$this->data['page_title'] = "Wallet - Rewards";
		return view('frontend.wallet.rewards',$this->data);
	}

	public function store(PageRequest $request){
		try {
			DB::beginTransaction();
			$wallet = new Wallet;
			$wallet->fill($request->all());
			$wallet->save();
			DB::commit();
			return redirect()->route('frontend.wallet.cash_in',[$request->code,str_random()]);
		} catch (\Throwable $th) {
			throw $th;
			DB::rollback();
		}
	
		return view('frontend.wallet.rewards',$this->data);
	}
}