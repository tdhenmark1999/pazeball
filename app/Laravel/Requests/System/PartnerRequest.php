<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class PartnerRequest extends RequestManager{

	public function rules(){

		$id = $this->route('partner_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'name'	=> "required",
			'owner_name'	=> "required",
			'code' => "required|unique_partner_code:{$id}",
			'username' => "required|unique_username:{$id},partner|username_format",
			'email' => "required|email|unique_email:{$id},partner",
			'password'	=> "required|password_format|confirmed",
			'status'	=> "required",
			'margin'	=> "required|numeric|min:0",

		];

		if($id > 0){
			unset($rules['password']);
		}

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'unique_partner_code'	=> "Partner Code already used. Try another",
			'unique_username'	=> "Username already used. Try another",
			'unique_email'	=> "Email already used. Try another",
			'password.confirmed'	=> "Password mismatch.",
			'password_format' => "Password must be 6-20 alphanumeric and some allowed special characters only.",
			'username_format' => "Username must be 6-20 alphanumeric and some allowed special characters only.",
			'margin.numeric' => "Indicate sales margin as 10 for 10%, 15 for 15% etc.",
			'margin.min' => "Indicate sales margin as 10 for 10%, 15 for 15% etc.",

		];
	}
}