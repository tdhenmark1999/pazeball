<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class ProfilePasswordRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		$guard = session()->get('is_admin','no') == "yes" ? 'user' :'partner';
		$id = Auth::guard($guard)->user()->id;

		$rules = [
			'current_password'	=> "required|current_password:{$id},{$guard}",
			'password'	=> "required|password_format|confirmed",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'password.confirmed'	=> "Password mismatch.",
			'password_format' => "Password must be 6-20 alphanumeric and some allowed special characters only.",
			'current_password' => "Invalid current password.",
		];
	}
}