<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class SalesResetRequest extends RequestManager{

	public function rules(){

		$rules = [
			'sale_date' => "required|date",
			// 'sort_type'		=> "required",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'sale_date.date' => "Please indicate sales date you want to reset."
		];
	}
}