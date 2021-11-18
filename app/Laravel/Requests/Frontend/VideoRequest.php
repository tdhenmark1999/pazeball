<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class VideoRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'file' => 'required',
			'description' => "required",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
		];
	}
}