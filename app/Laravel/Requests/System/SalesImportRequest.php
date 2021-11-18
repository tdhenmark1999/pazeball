<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class SalesImportRequest extends RequestManager{

	public function rules(){

		$rules = [
			'sale_date' => "required|date",
			'file'	=> "required|mimes:xls,xlsx,application/excel,application/vnd.ms-excel,application/vnd.msexcel",
			// 'sort_type'		=> "required",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'file.required'	=> "Please upload an excel file.",
			'file.mimes' => "Invalid excel file format.",
			'sale_date.date' => "Please indicate sales date."
		];
	}
}