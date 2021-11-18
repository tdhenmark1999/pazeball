<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class TrainingRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			// 'file' => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
			// 'address' => "required",
			'amount' => "required",
			// 'barangay' => "required",
			// 'province' => "required",
			// 'city' => "required",
			'date' => "required",
			'description' => "required",
			// 'time_end' => "required",
			// 'time_start[]' => "required",
			// 'time_end[]' => "required",
			// 'date[]' => "required",
			'type' => "required",
			'url_training'	=> "required",
			'category'	=> "required",
			'capacity'	=> "required",
			'amount'	=> "required",
			'time_start.*' => 'required',
			'time_end.*' => 'required',
			'date.*'=> 'required'
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'unique_username'	=> "Username already used. Try another",
			'unique_email'	=> "Email already used. Try another",
			'password.confirmed'	=> "Password mismatch.",
			'password_format' => "Password must be 6-20 alphanumeric and some allowed special characters only.",
		
			
		];
	}
}