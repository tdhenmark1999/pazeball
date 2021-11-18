<?php 

namespace App\Laravel\Controllers\Frontend;
use App\Laravel\Models\User;
use App\Laravel\Models\City;
use App\Laravel\Requests\Frontend\VideoRequest;
use Carbon,Auth,Validator,Str;
use Illuminate\Http\Request as PageRequest;
class AddressController extends Controller{

	public function get_city(PageRequest $request){
		
		$data = City::where("prov_code",$request->prov_code)->get();
		return $data;
	}
	


}