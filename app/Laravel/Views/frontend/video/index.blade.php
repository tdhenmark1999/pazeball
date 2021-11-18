@extends('frontend._layouts.main')

@section('content')
    

<div class="theme-layout">
    
    <div class="postoverlay"></div>
    
   @include('frontend._components.header')

        
    <section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                           
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('frontend.video.upload') }}" enctype='multipart/form-data'>
                                    <div class="central-meta postbox">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="create-post" style="border-bottom:0px solid">Create Video </span>
                                            </div>
                                            <div class="col-md-6 text-right">
                                            @if (!auth()->user()->is_pazepro == "true")
                                                <div class="setting-row" style="margin-bottom: 0px; padding-bottom: 0px;border-bottom:0px solid;width: 30%;">
                                                    <input type="checkbox"  id="switch04" checked=""/> 
                                                    <label for="switch04" data-on-label="Public" data-off-label="Premium"></label>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        
                                     
                                            {{ csrf_field() }}

                                            <div class="new-postbox">
                                        
                                                <figure>
                                                    <img src="{{asset('frontend/images/resources/admin.jpg')}}" alt="">
                                                </figure>
                                                <div class="newpst-input">
                                                        <textarea rows="2" name="description" id="description" placeholder="Share some what you are thinking?"></textarea> 
                                                </div>
                                                <div class="attachments">
                                                <input type="file" name="file" id="file" accept="video/mp4,video/x-m4v,video/*">
                                                    <button class="post-btn" type="button" id="uploadsss" data-ripple="">Post</button>
                                                </div>
                                                
                                            </div> 
                                 
                                        
                                     
                                    </div><!-- add post new box -->
                                </form>
                                <div class="loadMore">
                                    
                                    @forelse($videos as $video)
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{asset('frontend/images/resources/nearly1.jpg')}}" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <div class="more">
                                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                            <ul>
                                                                <li  class="update-report"><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ins><a href="timeline.html" title="">{{ $video->user->first_name ." ". $video->user->first_name   }}</a></ins>
                                                    <span><i class="fa fa-globe"></i> published: {{  $video->created_at->diffForHumans() }} </span>
                                                </div>
                                                <div class="post-meta">
                                                    <!-- <video src="{{ $video->directory."/".$video->filename  }}" control></video>
                                                    <figure>
                                                        <a href="{{$video->directory."/".$video->filename  }}" title="" data-strip-group="mygroup" class="strip vdeo-link" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
                                                        <img src="{{asset('frontend/images/resources/user-post.jpg')}}" alt="">
                                                            
                                                            <h2>Canada tourist spots you must visit in 2020</h2>
                                                        </a>
                                                

                                                    </figure>     -->
                                                    <video playsinline onclick="openFullscreen();" class="myvideo" id="myvideo" data-video_id="{{ $video->uuid }}"  width="100%" height="auto" controls preload="metadata">
                                                    {{-- <source src="{{  $video->directory.'/'.$video->filename  }}" type="video/mp4"> --}}
                                                        <source src="{{  asset('uploads/videos/'.$video->filename)  }}" type="video/mp4">
                                                    </video>                                           
                                                    <div class="description">
                                                        <p>
                                                            {{-- @if (count($video->videos)  > 0)
                                                                {{ $video->videos['0']->description }}
                                                            @endif --}}
                                                            
                                                        </p>
                                                    </div>
                                                    <div class="text-right mb-2">
                                                         <span> <a href="#" title="">{{ $video->total_views == 0 ? "0" : $video->total_views   }}</a> View(s)</span>
                                                    </div>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            @if(Helper::get_likes_Verify(auth()->user()->uuid,$video->uuid) == false)
                                                            <li>
                                                                <div class="likes heart" id="like" data-id="{{ $video->uuid }}" title="Like">❤ <span>{{$video->total_likes}}</span></div>
                                                            </li>
                                                            @endif
                                                            @if(Helper::get_likes_Verify(auth()->user()->uuid,$video->uuid) == true)
                                                            <li>
                                                                <div style="color:#fa6342 ;pointer-events: none;" class="likes heart" id="like" data-id="{{ $video->uuid }}" title="Like/Dislike">❤ <span>{{$video->total_likes}}</span></div>
                                                            </li>
                                                            @endif
                                                            <li>
                                                                <span class="comment" title="Comments">
                                                                    <i class="fa fa-commenting"></i>
                                                                    <ins></ins>
                                                                </span>
                                                            </li>

                                                        
                                                        </ul>
                                                        <div class="users-thumb-list">
                                                            @forelse($videos_avatar as $item)
															<a data-toggle="tooltip" title="" href="index.html#">
                                                                @if(Helper::avatar($item->user_id) == null)
																<img alt="" style="width:30px;height:30px" src="{{asset('placeholder/avatar.png')}}">  
                                                                @else
                                                                <img alt="" style="width:30px;height:30px" src="{{ asset(Helper::avatar_image($item->user_id))}}"> 
                                                                @endif
															</a>
                                                            @empty

                                                            @endforelse
                                                          
                                                            <span><a href="#" title=""> {{ Helper::get_likes($video->uuid)}} </a> like</span>

														</div>
                                            
                                                        <!-- <div class="users-thumb-list">
                                                            @forelse($video->likes as $item)
                                                                @if(Helper::avatar($item->user_id) == "" || NULL)
                                                                <a data-toggle="tooltip" title="Anderw" href="#">
                                                                
                                                                    <img alt="" src="{{asset('frontend/images/resources/userlist-1.jpg')}}">  
                                                                </a>
                                                               @else
                                                               <a data-toggle="tooltip" title="Anderw" href="#">
                                                                <img alt="" src="{{ asset(Helper::avatar($item->user_id))}}"> 
                                                                </a>
                                                          
                                                                @endif

                                                                <span><strong> {{ in_array($item->user_id,[auth()->user()->uuid]) ? "You " : ""  }} </strong>, and <a href="#" title="">{{ $video->total_likes }}   more</a> liked</span>
                                                                @empty
                                                               
                                                                @endforelse
                                                       
                                                         
                                                          
                                                
                                                       
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="coment-area" style="">
                                                    <ul class="we-comet">
                                                        @forelse ($video->comments as $comment)
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{asset('frontend/images/resources/comet-4.jpg')}}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <h5><a href="timeline.html" title="">{{Helper::get_user($comment->user_id) }}</a></h5>
                                                                <p>{{ $comment->comment  }}
                                                        
                                                                </p>
                                                                <div class="inline-itms">
                                                                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @empty

                                                        @endforelse
                                                      
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more comments+</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="{{asset('frontend/images/resources/nearly1.jpg')}}" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="">
                                                                <textarea 
                                                                data-id="{{ $video->uuid }}" 
                                                                data-user_id="{{ auth()->user()->uuid }}" 
                                                                data-url="{{ route('frontend.video.comment') }}" 
                                                                data-user_name="{{ Helper::get_user(auth()->user()->uuid) }}" 
                                                                placeholder="Post your comment"></textarea>
                                                                    
                                                                    <button type="submit">submit</button>
                                                                </form> 
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- video post -->    
                                    @empty
                                    <div class="central-meta item">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img src="{{asset('no-data-found.png')}}">
                                            </div>
                                            
                                        </div>
                                    </div><!-- video post -->
                                    @endforelse
                                  
                                  
                            
                                    
                                </div>
                            </div><!-- centerl meta -->
                           
                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>


 {{--    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright">© Pazeball 2021. All rights reserved.</span>
                    <i><img src="{{asset('frontend/images/credit-cards.png')}}" alt=""></i>
                </div>
            </div>
        </div>
    </div> --}}
</div>
    
    
    <div class="popup-wraper2">
        <div class="popup post-sharing">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <select data-placeholder="Share to friends..." multiple class="chosen-select multi">
                        <option>Share in your feed</option>
                        <option>Share in friend feed</option>
                        <option>Share in a page</option>
                        <option>Share in a group</option>
                        <option>Share in message</option>
                    </select>
                    <div class="post-status">
                        <span><i class="fa fa-globe"></i></span>
                        <ul>
                            <li><a href="#" title=""><i class="fa fa-globe"></i> Post Globaly</a></li>
                            <li><a href="#" title=""><i class="fa fa-user"></i> Post Private</a></li>
                            <li><a href="#" title=""><i class="fa fa-user-plus"></i> Post Friends</a></li>
                        </ul>
                    </div>
                </div>
                <div class="postbox">
                    <div class="post-comt-box">
                        <form method="post">
                            <input type="text" placeholder="Search Friends, Pages, Groups, etc....">
                            <textarea placeholder="Say something about this..."></textarea>
                            <div class="add-smiles">
                                <span title="add icon" class="em em-expressionless"></span>
                                <div class="smiles-bunch">
                                    <i class="em em---1"></i>
                                    <i class="em em-smiley"></i>
                                    <i class="em em-anguished"></i>
                                    <i class="em em-laughing"></i>
                                    <i class="em em-angry"></i>
                                    <i class="em em-astonished"></i>
                                    <i class="em em-blush"></i>
                                    <i class="em em-disappointed"></i>
                                    <i class="em em-worried"></i>
                                    <i class="em em-kissing_heart"></i>
                                    <i class="em em-rage"></i>
                                    <i class="em em-stuck_out_tongue"></i>
                                </div>
                            </div>

                            <button type="submit"></button>
                        </form> 
                    </div>
                    <figure><img src="{{asset('frontend/images/resources/share-post.jpg')}}" alt=""></figure>
                    <div class="friend-info">
                        <figure>
                            <img alt="" src="{{asset('frontend/images/resources/admin.jpg')}}">
                        </figure>
                        <div class="friend-name">
                            <ins><a title="" href="timeline.html">Jack Carter</a> share <a title="" href="#">link</a></ins>
                            <span>Yesterday with @Jack Piller and @Emily Stone at the concert of # Rock'n'Rolla in Ontario.</span>
                        </div>
                    </div>
                    <div class="share-to-other">
                        <span>Share to other socials</span>
                        <ul>
                            <li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook-square"></i></a></li>
                            <li><a class="twitter-color" href="#" title=""><i class="fa fa-twitter-square"></i></a></li>
                            <li><a class="dribble-color" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
                            <li><a class="pinterest-color" href="#" title=""><i class="fa fa-pinterest-square"></i></a></li>
                        </ul>
                    </div>
                    <div class="copy-email">
                        <span>Copy & Email</span>
                        <ul>
                            <li><a href="#" title="Copy Post Link"><i class="fa fa-link"></i></a></li>
                            <li><a href="#" title="Email this Post"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="we-video-info">
                        <ul>
                            <li>
                                <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                                    <i class="fa fa-eye"></i>
                                    <ins>1.2k</ins>
                                </span>
                            </li>
                            <li>
                                <span title="" data-toggle="tooltip" class="views" data-original-title="views">
                                    <i class="fa fa-share-alt"></i>
                                    <ins>20k</ins>
                                </span>
                            </li>
                        </ul>
                        <button class="main-btn color" data-ripple="">Submit</button>
                        <button class="main-btn cancel" data-ripple="">Cancel</button>
                    </div>
                </div>
            </div>  
        </div>
    </div><!-- share popup -->
    
    <div class="popup-wraper3">
        <div class="popup">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Report Post</h5>
                </div>
                <div class="Rpt-meta">
                    <span>We're sorry something's wrong. How can we help?</span>
                    <form method="post" class="c-form">
                        <div class="form-radio">
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio" checked="checked"><i class="check-box"></i>It's spam or abuse
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio"><i class="check-box"></i>It breaks r/technology's rules
                            </label>
                          </div>
                            <div class="radio">
                            <label>
                              <input type="radio" name="radio"><i class="check-box"></i>Not Related
                            </label>
                          </div>
                            <div class="radio">
                            <label>
                              <input type="radio" name="radio"><i class="check-box"></i>Other issues
                            </label>
                          </div>
                        </div>
                    <div>
                        <label>Write about Report</label>
                        <textarea placeholder="write someting about Post" rows="2"></textarea>
                    </div>
                    <div>
                        <button data-ripple="" type="submit" class="main-btn">Submit</button>
                        <a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
                    </div>
                    </form> 
                </div>
            </div>  
        </div>
    </div><!-- report popup -->

    <div class="popup-wraper3-update">
        <div class="popup">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Update Post</h5>
                </div>
                <div class="Rpt-meta">              
                    <form method="post" class="c-form"> 
                        <div>
                            <label>Type</label>
                            <select>
                                <option>Public</option>
                                <option>Premium</option>
                            </select>
                        </div>
                    <div>
                        <label>Description</label>
                        <textarea placeholder="write someting about Post" rows="2"></textarea>
                    </div>
                    <div>
                        <button data-ripple="" type="submit" class="main-btn">Update</button>
                        <a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
                    </div>
                    </form> 
                </div>
            </div>  
        </div>
    </div><!-- report popup -->
    
    <div class="popup-wraper1">
        <div class="popup direct-mesg">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Send Message</h5>
                </div>
                <div class="send-message">
                    <form method="post" class="c-form">
                        <input type="text" placeholder="Sophia">
                        <textarea placeholder="Write Message"></textarea>
                        <button type="submit" class="main-btn">Send</button>
                    </form>
                    <div class="add-smiles">
                        <div class="uploadimage">
                            <i class="fa fa-image"></i>
                            <label class="fileContainer">
                                <input type="file">
                            </label>
                        </div>
                        <span title="add icon" class="em em-expressionless"></span>
                        <div class="smiles-bunch">
                            <i class="em em---1"></i>
                            <i class="em em-smiley"></i>
                            <i class="em em-anguished"></i>
                            <i class="em em-laughing"></i>
                            <i class="em em-angry"></i>
                            <i class="em em-astonished"></i>
                            <i class="em em-blush"></i>
                            <i class="em em-disappointed"></i>
                            <i class="em em-worried"></i>
                            <i class="em em-kissing_heart"></i>
                            <i class="em em-rage"></i>
                            <i class="em em-stuck_out_tongue"></i>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!-- send message popup -->   


@stop

@section('page-styles')
<style type="text/css">
.setting-row input:checked + label::after {
 
    left: 60px;
}
.setting-row input + label {
   
    width: 80px;
}
</style>
@stop

@section('page-scripts')

<script type="text/javascript">
        jQuery(document).ready(function($) {
            
            $('#us3').locationpicker({
              location: {
                latitude: -8.681013,
                longitude: 115.23506410000005
              },
              radius: 0,
              inputBinding: {
                latitudeInput: $('#us3-lat'),
                longitudeInput: $('#us3-lon'),
                radiusInput: $('#us3-radius'),
                locationNameInput: $('#us3-address')
              },
              enableAutocomplete: true,
              onchanged: function (currentLocation, radius, isMarkerDropped) {
                // Uncomment line below to show alert on each Location Changed event
                //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
              }
            });

        }); 




</script>

<script>
function ajax_request(data,url,param){

let id = $(this).data("id");
$.ajax({
    method:param, 
    data:data,
    dataType:"json",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    url:url,
    success:function(response){
    console.log(response);             
},
error:function(data){
if(data){
    console.log(data.responseJSON)
}

}

})


}	
    // like video
    $(document).on('click','#like',function(){
                let id = $(this).data("id");
                ajax_request({id:id},'{{ route("frontend.video.like") }}',"POST");
            })

$(document).ready(function () {
    


    $('#uploadsss').on('click',function(){
            
                let description = $('#description').val();
                let is_public = $('#switch04').val();
                let file_data = $('input[type=file]')[0].files[0];
                file_data == undefined ? file_data = "" : file_data;
                let form_data = new FormData();
                form_data.append('file',file_data);
                form_data.append('is_public',is_public);
                form_data.append('description', description);

            $.ajax({
                xhr: function() {
        var xhr = new window.XMLHttpRequest();
        xhr.upload.addEventListener("progress", function(evt) {
            if (evt.lengthComputable) {
                var percentComplete = (evt.loaded / evt.total) * 100;
                //Do something with upload progress here
                console.log("PERCENT",percentComplete)
                $('#uploadsss').text("uploading " +" "+ Math.round(percentComplete) +"%")
            }
       }, false);
       return xhr;
        },
                
            method:"POST",
            contentType: false,
            processData: false,   
            cache: false,
            data:form_data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:"{{ route("frontend.video.upload") }}",
            beforeSend:function(){
                // $('#upload').text("uploading.....")
            },
            success:function(response){
                console.log(response)
               
            // alert(response.message)
            Swal.fire({
                position: 'top-end',
                icon: response.status == 200 ? 'success' : 'warning',
                title: response.message,
                showConfirmButton: false,
                timer: 1500
                })
            if(response.status == 200){
                $('#uploadsss').text("success");
                window.location.reload();
            }else{
                $('#uploadsss').text("Upload");
            }
          
             
            },
            error:function(data){
                console.log(data)
                let error = data.responseJSON.errors
                // error.forEach(element => {
                //      alert(element)  
                //     });
                $('#uploadsss').text("upload")
                }

            })
            })


        function playFile() {
            $(".myvideo").not(this).each(function () {
                $(this).get(0).pause();
            });
            this[this.get(0).paused ? "play" : "pause"]();
        }

        $('.myvideo').on("click play", function() {
            playFile.call(this);
        });
        $('.myvideo').on("ended", function() {
            ajax_request({user_id:"{{ auth()->user()->uuid }}", video_id:$(this).data('video_id')},'{{ route("frontend.video.video_view") }}',"POST");

        });
    })

    const video = document.querySelector(".myvideo");

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      video.pause();
    } else {
      video.play();
    }
  });
}, {});

observer.observe(video);
			</script>
@stop