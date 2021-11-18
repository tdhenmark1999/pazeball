<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class BecomePazeproRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			// 'file' => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
			'first_front_id_full_path' => "required",
			'first_back_id_full_path' => "required",
			'second_front_id_full_path' => "required",
			'second_back_id_full_path' => "required",
			'first_id_type' => "required",
			'first_id_number' => "required",
			'second_id_type' => "required",
			'second_id_number' => "required",
			'curriculum_vitae_full_path' => "required",
			'sport' => "required",
			
		
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
			'image' => 'asdfsfsfs'
		];
	}
}