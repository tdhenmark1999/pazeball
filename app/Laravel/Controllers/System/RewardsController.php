<?php 

namespace App\Laravel\Controllers\System;


use Illuminate\Http\Request as PageRequest;
use App\Laravel\Models\Rewards;

use Carbon,Auth,DB;

class RewardsController extends Controller{

	protected $rewards_model;

	public function __construct () {
		$this->data = [];
		$this->rewards_model = new Rewards;
	}

	public function index(){
		$this->data['page_title'] = "All Rewards";
	    $this->data['rewards'] = $this->rewards_model->all();
		return view('system.rewards.index',$this->data);
	}

	public function create(){
		
		return view('system.rewards.create');
	}

	public function store(PageRequest $request){

		// return $request->all();
		// return $request->all();
		DB::beginTransaction();

		try {
			
		if($request->hasFile('file')){
			$file = $request->file('file');
			$filename = time().$file->getClientOriginalName();
			$path = public_path().'/uploads/images/';
			$this->rewards_model->file_name = $filename;
			$this->rewards_model->directory = $path;
			$this->rewards_model->full_path = $path."/".$filename;
			$this->rewards_model->fill($request->except(['file']));
			if($this->rewards_model->save()){

				$file->move($path, $filename);
				// save training_session

				DB::commit();
				return redirect()->route('system.rewards.index');
			}
		}
			

		} catch (\Throwable $th) {
			throw $th;
			DB::rollback();
		}

	}

	public function destroy($id=NULL)
	{
		try {
			DB::beginTransaction();
			Rewards::destroy($id);
			DB::commit();
			session()->flash('notification-status','success');
			session()->flash('notification-msg',"User has been deleted.");
			return redirect()->route("system.rewards.index");
		} catch (Exception $e) {
			DB::rollback();
			session()->flash('notification-status','warning');
			session()->flash('notification-msg',"Went something wrong".$e->message());
			return redirect()->back();
		}
	}


	public function edit($id = NULL)
	{
		$this->data['reward'] = Rewards::find($id);
		return  view("system.rewards.edit",$this->data);
	}

	public function update(PageRequest $request, $id=NULL){
		// return dd($request);
		try {
			
			DB::beginTransaction();
			$rewards = Rewards::find($id);
			if($request->hasFile('file')){
				$file = $request->file('file');
				$filename = time().$file->getClientOriginalName();
				$path = public_path().'/uploads/images/';
				$this->rewards->file_name = $filename;
				$this->rewards->directory = $path;
				$this->rewards->full_path = $path."/".$filename;
				$this->rewards->fill($request->except(['file']));
				if($this->rewards_model->save()){

					$file->move($path, $filename);
					// save training_session
	
					DB::commit();
					return redirect()->route('system.rewards.index');
				}
			}
			else {
				$rewards->fill($request->only('title','description','status','amount','quantity'));
				$rewards->save();
				DB::commit();
				session()->flash('notification-status','success');
				session()->flash('notification-msg',"Parameter .");
				return redirect()->route("system.rewards.index");
			}
		
		} catch (Exception $e) {
			DB::rollback();
			session()->flash('notification-status','warning');
			session()->flash('notification-msg',"Went something wrong".$e->message());
			return redirect()->back();
		}
	}
}