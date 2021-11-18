<?php 

namespace App\Laravel\Controllers\Frontend;
use App\Laravel\Models\User;
use App\Laravel\Models\Video_upload;
use App\Laravel\Models\VideoLike;
use App\Laravel\Models\VideoComment;
use App\Laravel\Models\VideoView;
use App\Laravel\Requests\Frontend\VideoRequest;
use App\Http\Resources\VideoResource;
use Carbon,Auth,Validator,Str,Mail;
use Illuminate\Http\Request as PageRequest;

use App\Mail\EmailValidation;
class VideoController extends Controller{
	protected $video_model;
	protected $data;

	public function __construct () {
		$this->data = [];
		$this->video_model = new Video_upload;
		$this->video_like_model = new VideoLike;
	}
	public function index(){

		// return \Storage::disk('s3')->url("images/primary_image/C8V3rjDdOnjiI3BfYitkjURj5p4DVwzAGFUjunnI.jpg");

	    $this->data['videos'] = $this->video_model->with("user",'likes','comments')->orderBy('created_at','desc')->get();
		$this->data['videos_avatar'] = $this->video_like_model->latest('created_at')->take(5)->get();

		$this->data['page_title'] = "Videos";
		// return $this->data['videos'];
		return view('frontend.video.index',$this->data);
	}
	public function store(VideoRequest $request){
			// return $request->all();

			try {
				

				$getID3 = new \getID3;
				$file = $getID3->analyze($request->file('file'));
				$duration =$file['playtime_seconds'];
				// $duration = date('H:i:s', $file['playtime_seconds']);
				if(auth()->user()->is_premium == "true"){

				}else{
					if($duration > 30){

						return response()->json([
							'status'=> 412,
							'message'=> "Minimum Video length is 30 seconds for none Premium user",
							'duration' => $duration
						]);
						
	
					}
				}
				

				
		
			$data = new Video_upload;
			if($request->hasFile('file')){
				$file = $request->file('file');
				$filename = time().$file->getClientOriginalName();
				$path = public_path().'/uploads/videos/';
			
				$data->description = $request->description;
				$data->uuid = Str::uuid()->toString();
				// $data->directory = \Storage::disk('s3')->put('videos',$file);
				$data->directory = $path;
				$data->filename = $filename;
				$data->is_public = $request->is_public;
				$data->user_id =  Auth::user()->id;

				if($data->save()){
					$file->move($path, $filename);
					
				}
				// $data->save();
				// $getID3 = new \getID3;
    			// $files = $getID3->analyze(public_path().'/uploads/videos/1628950954Pop Art Tutorial step by step - very easy -).mp4');
    			// $playtime_seconds = $files['playtime_string'];
				// $duration = date('H:i:s.v', $playtime_seconds);
			}

			
			return response()->json([
				'status'=> 200,
				'message'=> "Video Uploaded Successfully"
			]);



			} catch (\Throwable $th) {
			throw $th;
			}
			
		
				
		
	}

	public function like(PageRequest $request){
		
		$this->video_like_model->status = "like";
		$this->video_like_model->video_uploaded_id = $request->id;
		$this->video_like_model->coins_earned = 10;
		$this->video_like_model->user_id = Auth::user()->uuid;
		if($this->video_like_model->save()){
			return response()->json([
				'status'=> 200,
				'message'=> "Sucess"
			]);
		}
		
	}

	function post_comment(PageRequest $request){
		
		$data = new VideoComment;
		$data->fill($request->all());
		$data->save();
		return response()->json([
			'status'=> 200,
			'message'=> "Sucess",
			'data' => $data
		]);

	}
	function video_view(PageRequest $request){
		$user = VideoView::where('user_id',auth()->user()->uuid)	
					->where('video_id',$request->video_id)->count();

		if($user > 0){
			return response()->json([
				'status'=> 200,
				'message'=> "Already View",
			]);
		}			

		$data = new VideoView;
		$data->fill($request->all());
		$data->save();
		return response()->json([
			'status'=> 200,
			'message'=> "Finish",
			'data' => $data
		]);

	}
}