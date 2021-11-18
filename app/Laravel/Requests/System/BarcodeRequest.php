<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class BarcodeRequest extends RequestManager{

	public function rules(){

		$id = $this->route('barcode_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'name'	=> "required",
			'code'	=> "required",
			'qty'	=> "required|integer|min:3|max:99",
			'price'	=> "required|numeric|min:0",
		];

		if(session()->get('is_admin','no') == "yes"){
			$rules['partner_id'] = "required";
		}

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'qty.integer'	=> "No. of copies must be a number min. of 3 and divisible by 3. ",
			'qty.min'	=> "Minimum no. of copies is 3.",
			'qty.max'	=> "Maximum no. of copies is 99.",
			'price.numeric'	=> "Please indicate the product price.",
			'price.min'	=> "Negative price is not allowed."

		];
	}
}