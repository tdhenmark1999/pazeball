<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class ProductRequest extends RequestManager{

	public function rules(){

		$id = $this->route('product_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'name'	=> "required",
			'code'	=> "required",
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
			'price.numeric'	=> "Please indicate the product price.",
			'price.min'	=> "Negative price is not allowed."

		];
	}
}