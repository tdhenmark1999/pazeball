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
                                <div class="central-meta">
                                    <div class="title-block">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="align-left">
                                                    <h5>List of My Trainings <span>{{ count($trainings) }}</span></h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row merged20">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <form method="post">
                                                            <input type="text" placeholder="Search Training">
                                                            <button type="submit"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="select-options">
                                                            <select class="select">
                                                                <option disabled selected>Select Category</option>
                                                                <option>Basketball</option>
                                                                <option>Swimming</option>
                                                                <option>Zumba</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div><div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="select-options">
                                                            <select class="select">
                                                                <option disabled selected>Select Status</option>
                                                                <option>Ongoing</option>
                                                                <option>Pending</option>
                                                                <option>Done</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- title block -->
                                <div class="row merged20">

                                    <div class="col-lg-6 col-md-6">
                                        <div class="central-meta">
                                            @foreach ($trainings as $item)
                                            <div class="blog-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img alt="" src="{{asset('frontend/images/resources/nearly1.jpg')}}">
                                                    </figure>
                                                    <div class="friend-name">
                                                     {{--    <div class="more">
                                                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                                <ul>
                                                                    <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                                                    <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div> --}}
                                                        <ins><a title="" href="{{route('frontend.my_training.show')}}">Sample title</a></ins>
                                                        <span><i class="fa fa-globe"></i> Dhen Mark  |  <span><a href="" title="">Basketball</a></span> </span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <figure>
                                                            <a title="" href="{{route('frontend.my_training.show',[$item->uuid])}}">
                                                                <img alt="" src="{{asset('uploads/images/'.$item->file_name)}}">  
                                                            </a>
                                                        
                                                        </figure>                                               
                                                        <div class="description">
                                                            <a data-ripple="" class="learnmore text-uppercase" href="{{route('frontend.my_training.show',[$item->uuid])}}">Pending</a>
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                     <h3><a class="oswald-400" href="{{route('frontend.my_training.show',[$item->uuid])}}" title="">{{ $item->title }}</a></h3>
                                                                        
                                                                </div>
                                                                 <div class="col-md-3 mt-1">
                                                                     <h5 class="oswald-300" style="color: #FA6342"><a href="{{route('frontend.my_training.show',[$item->uuid])}}" title="">{{ $item->amount }}</a></h5>
                                                                </div>
                                                              
                                                               
                                                            </div>
                                                            <p>
                                                               {{ $item->description }}
                                                            </p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                          
                                        </div>
                                    </div>
                                        
                                   
                              
                                   
                                </div>
                                <div class="lodmore">
                                    <span>Viewing 1-6 of 44 posts</span>
                                    <button class="btn-view btn-load-more"></button>
                                </div>
                            </div><!-- centerl meta -->
                            
                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>



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
  <a href="{{route('frontend.training.create')}}" id="topcontrol1" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 1; "> <i class="fa fa-plus"></i></a></a>
@stop

@section('page-styles')
<style type="text/css">
    .setting-row input:checked + label::after {
 
    left: 60px;
}
.setting-row input + label {
   
    width: 80px;
}
#topcontrol {
    display: none;
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
@stop