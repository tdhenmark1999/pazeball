<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class PartnerImportRequest extends RequestManager{

	public function rules(){

		$rules = [
			'file'	=> "required|mimes:xls,xlsx,application/excel,application/vnd.ms-excel,application/vnd.msexcel",
			// 'sort_type'		=> "required",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Please upload an excel file.",
			'file.mimes' => "Invalid excel file format.",
		];
	}
}