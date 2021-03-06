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
                             @include('frontend.profile.cover')
                            <!-- user profile banner  -->
                    
                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <span class="create-post">General Info</span>
                                    <div class="row">
                                        @if($my_profile->about != null)
                                        <div class="col-lg-12">
                                            <div class="gen-metabox">
                                                <span><i class="fa fa-address-card"></i>  About Me</span>
                                                <p>
                                                    {{$my_profile->about}}
                                                </p>
                                            </div>
                                            
                                        </div>
                                        @endif
                                        @if($my_profile->birth_date != null)
                                        <div class="col-lg-6">
                                            <div class="gen-metabox">
                                                <span><i class="fa fa-calendar"></i>  Birthday</span>
                                                <p>

                                                {{$my_profile->birth_date}}
                                                </p>
                                            </div>
                                        </div>
                                        @endif
                                        @if($my_profile->gender != null)
                                        <div class="col-lg-6">
                                            <div class="gen-metabox">
                                                <span><i class="fa fa-user"></i>  Gender</span>
                                                <p>
                                                {{$my_profile->gender}}
                                                </p>
                                            </div>
                                        </div>
                                        @endif
                                        @if($my_profile->sports != null)
                                        <div class="col-lg-12">
                                            <div class="gen-metabox">
                                                <span><i class="fa fa-plus"></i> Sports</span>
                                                <p>
                                                {{$my_profile->sports}}
                                                </p>
                                            </div>
                                        </div>

                                        @endif
                                        <div class="col-lg-12">
                                            <div class="gen-metabox">
                                                <span><i class="fa fa-certificate"></i> Certificate</span>
                                                    <div class="row">
                                                        @forelse ($my_profile->certificates as $item)
                                                        <div class="col-md-6 col-lg-4">
                                                            <img src="{{asset('frontend/images/marker.png')}}">
                                                            <span class="text-color--orange">{{ $item->title  }}</span>
                                                            <p class="ml-4">{{ $item->city }}, {{ $item->country }}  {{ $item->year  }}</p>
                                                        </div>
                                                        @empty
                                                        <div class="col-md-12">
                                                            <p>No Certificate Found</p>
                                                        </div>
                                                        @endforelse
                                                        
                                                        
                                                    </div>


                                            </div>
                                        </div>
                                        
                                    
                                        
                                    </div>  
                                </div>
                               
                            
                                <div class="central-meta">
                                    <span class="create-post">Trainings ({{$my_profile->trainings->count()}}) <a href="{{route('frontend.profile.trainings')}}" title="">See All</a></span>
                                    <ul class="photos-list">
                                    @forelse ($my_profile->trainings as $item)
                                        <li>
                                            <div class="item-box">
                                                <a  href="{{route('frontend.profile.training_details',[$my_profile->uuid,$item->uuid])}}" >
                                                <img src="{{ asset('uploads/images/'.$item->file_name ) }}" alt=""></a>
                                                <div class="over-photo">
                                                    
                                                    <span>{{ $item->address }}</span>
                                                </div>
                                                <span class="tv-play-title">{{ $item->title }} </span>
                                            </div>
                                        </li>
                                        @empty
                                       
                                     @endforelse
                                       
                                    </ul>
                                    @if($my_profile->trainings->count() == 0)
                                    <div class="col-md-12 text-center">
                                        <img src="{{asset('no-data-found.png')}}">
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="central-meta">
                                    <span class="create-post">Videos ({{$my_profile->videos->count()}}) <a href="#" title="">See All</a></span>
                                    <ul class="videos-list">
                                       
                                    @forelse ($my_profile->videos as $video)
                                       <li>
                                            <div class="item-box">
                                                <a href="{{route('frontend.profile.video_details')}}">
                                                   
                                                    <video onclick="openFullscreen();" id="myvideo" width="100%" height="auto" controls>
                                                    <source src="{{  asset('uploads/videos/'.$video->filename)  }}" type="video/mp4">
                                                    </video>
                                                </a>
                                                <div class="over-photo">
                                                    <div class="likes heart" title="Like/Dislike">??? <span>0</span></div>
                                                    <span>0 Views</span>
                                                </div>
                                            </div>  
                                        </li>
                                        @empty
                                       
                                       @endforelse
                                        
                                    </ul>
                                    @if($my_profile->videos->count() == 0)
                                    <div class="col-md-12 text-center">
                                        <img src="{{asset('no-data-found.png')}}">
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section><!-- content -->

    


</div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1"/> 
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" /> 
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" /> 
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" /> 
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" /> 
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" /> 
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" /> 
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" /> 
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" /> 
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" /> 
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" /> 
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div><!-- side panel -->

   
    
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
                        <a href="about.html#" data-ripple="" class="main-btn3 cancel">Close</a>
                    </div>
                    </form> 
                </div>
            </div>  
        </div>
    </div><!-- report popup -->


@stop

@section('page-styles')
<style type="text/css">
    .frnd-info > li span {
            width: 90px;
        }
</style>
<style>
    video::-webkit-media-controls {
        display: none !important;
    }
</style>
@stop

@section('page-scripts')
<script type="text/javascript">
       
</script>
@stop