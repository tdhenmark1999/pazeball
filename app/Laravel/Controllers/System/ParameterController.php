<?php 

namespace App\Laravel\Controllers\System;
use Illuminate\Http\Request as PageRequest;
use App\Laravel\Models\Parameters;

use Carbon,Auth,DB;

class ParameterController extends Controller {

	protected $parameters_model;

	public function __construct () {
		$this->data = [];
		$this->parameters_model = new Parameters;
	}

	public function index(){
		$this->data['page_title'] = "All Parameters";
	    $this->data['parameters'] = $this->parameters_model->all();
		return view('system.parameter.index',$this->data);
	}

	public function create(){
		
		return view('system.parameter.create');
	}

	public function store(PageRequest $request){

		// return $request->all();
		try {
			DB::beginTransaction();
			$this->parameters_model->title = $request->title;
			$this->parameters_model->description = $request->description;
			$this->parameters_model->value = $request->value;
			$this->parameters_model->save();
			DB::commit();
			return redirect()->route('system.parameter.index');
		} catch (\Throwable $th) {
			throw $th;
			DB::rollback();
		}

	}

	public function destroy($id=NULL)
	{
		try {
			DB::beginTransaction();
			Parameters::destroy($id);
			DB::commit();
			session()->flash('notification-status','success');
			session()->flash('notification-msg',"User has been deleted.");
			return redirect()->route("system.parameter.index");
		} catch (Exception $e) {
			DB::rollback();
			session()->flash('notification-status','warning');
			session()->flash('notification-msg',"Went something wrong".$e->message());
			return redirect()->back();
		}
	}


	public function edit($id = NULL)
	{
		$this->data['parameter'] = Parameters::find($id);
		return  view("system.parameter.edit",$this->data);
	}

	public function update(PageRequest $request, $id=NULL){
		// return dd($request);
		try {
			DB::beginTransaction();
			$parameters = Parameters::find($id);
			$parameters->fill($request->only('title','description'));
			$parameters->save();
			DB::commit();
			session()->flash('notification-status','success');
			session()->flash('notification-msg',"Parameter .");
			return redirect()->route("system.parameter.index");
		} catch (Exception $e) {
			DB::rollback();
			session()->flash('notification-status','warning');
			session()->flash('notification-msg',"Went something wrong".$e->message());
			return redirect()->back();
		}
	}
}