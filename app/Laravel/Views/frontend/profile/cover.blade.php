<style type="text/css">
   @media screen and (min-width: 812px) {
        .popup.direct-mesg {
            width: 50%;
       }
   }
   @media screen and (max-width: 811px) {
       .popup.direct-mesg {
           width: 90%;
       }
   }
</style>

<div class="user-profile">

   <figure>
        @if($my_profile->file_name_banner == null)
       <img src="{{asset('placeholder/banner.png')}}" alt="" />
       @endif
       @if($my_profile->file_name_banner != null)
       <img src="{{ asset('uploads/images/'.$my_profile->file_name_banner ) }}" alt="" />
       @endif
       <ul class="profile-controls">
            @if($my_profile->is_pazepro == 'true')
           <li><img title="Pazepro badge" src="{{asset('frontend/images/pazepro.png')}}" /></li>
           @endif
           @if($my_profile->is_premium == 'true')
           <li><img title="Premium badge" src="{{asset('frontend/images/premium.png')}}" /></li>
           @endif
       </ul>
       <ol class="pit-rate">
           @if($ratings_whole == 0)
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><span>{{$ratings_whole}}/5</span></li>
            @endif
            @if($ratings_whole == 1)
                <li  class="rated"><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><span>{{$ratings_whole}}/5</span></li>
            @endif
            @if($ratings_whole == 2)
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><span>{{$ratings_whole}}/5</span></li>
            @endif
            @if($ratings_whole == 3)
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><span>{{$ratings_whole}}/5</span></li>
            @endif
            @if($ratings_whole == 4)
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><span>{{$ratings_whole}}/5</span></li>
            @endif
            @if($ratings_whole == 5)
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li class="rated"><i class="fa fa-star"></i></li>
                <li><span>{{$ratings_whole}}/5</span></li>
            @endif
       </ol>
   </figure>

   <div class="profile-section">
       <div class="row">
           <div class="col-lg-3 col-md-3">
               <div class="profile-author">
                   <div class="profile-author-thumb">
                        @if($my_profile->file_name == null)
                        <img src="{{asset('placeholder/avatar.png')}}" alt="" />
                        @endif
                        @if($my_profile->file_name != null)
                        <img src="{{ asset('uploads/images/'.$my_profile->file_name ) }}" alt="" />
                        @endif
                       <div class="edit-dp">
                           <label class="fileContainer">
                               <a href="{{route('frontend.account_settings.update_profile')}}">
                                <i class="fa fa-camera"></i>
                               </a>
                           </label>
                       </div>
                   </div>

                   <div class="author-content">
                       <a class="h4 author-name">{{ $my_profile->first_name ." ". $my_profile->last_name  }}</a>
                       <div class="country">{{ $my_profile->province. ", ".  $my_profile->city  }}</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-9 col-md-9">
               <ul class="profile-menu">
                   <li>
                       <a class="{{ (request()->is('profile')) ? 'active' : '' }}" href="{{route('frontend.profile.index')}}">About</a>
                   </li>
                   <li>
                       <a class="{{ (request()->is('profile/trainings')) ? 'active' : '' }}" href="{{route('frontend.profile.trainings')}}">Trainings</a>
                   </li>
                   <li>
                       <a class="{{ (request()->is('profile/videos')) ? 'active' : '' }}" href="{{route('frontend.profile.videos')}}">Videos</a>
                   </li>
                   <li>
                       <a class="{{ (request()->is('profile/reviews')) ? 'active' : '' }}" href="{{route('frontend.profile.reviews')}}">Reviews</a>
                   </li>

                   {{--
                   <li>
                       <div class="more">
                           <i class="fa fa-ellipsis-h"></i>
                           <ul class="more-dropdown">
                               <li>
                                   <a href="timeline-groups.html">Profile Groups</a>
                               </li>
                               <li>
                                   <a href="statistics.html">Profile Analytics</a>
                               </li>
                           </ul>
                       </div>
                   </li>
                   --}}
               </ul>
               <ol class="folw-detail">
                   <li><span>Videos</span><ins>{{$my_profile->videos->count()}}</ins></li>
                   <li><span>Trainings</span><ins>{{$my_profile->trainings->count()}}</ins></li>
                   <!-- <li><span>Level</span><ins>4</ins></li> -->
               </ol>
           </div>
       </div>
   </div>
</div>

<div class="popup-wraper1">
   <div class="popup direct-mesg">
       <span class="popup-closed"><i class="ti-close"></i></span>
       <div class="popup-meta">
           <div class="popup-head">
               <h5>Book a Appointment</h5>
           </div>
           <div class="send-message">
               <form method="post" class="c-form">
                   <div class="row">
                       <div class="col-md-12">
                           <label>Type of Appointment</label>
                           <select class="form-control" style="background-color: #edf2f6; font-size: 13px; height: calc(2.8em + 0.75rem + 2px);">
                               <option selected="" disabled="">Select Type of Appointment</option>
                               <option>Meet Up</option>
                               <option>Online</option>
                           </select>
                       </div>
                       <div class="col-md-6">
                           <label>Date</label>
                           <input type="date" name="" />
                       </div>
                       <div class="col-md-6">
                           <label>Time</label>
                           <input type="time" name="" />
                       </div>
                        <div class="col-md-12">
                           <label>Address</label>
                           <textarea rows="3" placeholder="Address"></textarea>
                       </div>
                   
                           <div class="col-md-12">
                                 <label>Remarks</label>
                               <input type="text" name="" />
                           </div>
                           <div class="col-md-12 mt-3">
                                   <button type="submit" class="main-btn">Submit</button>
                                   <button type="button" style="font-size: 13px;position: sticky !important" class="main-btn3 popup-closed">Close</button>
                           </div>
                      
                   </div>

                   
               </form>
           </div>
       </div>
   </div>
</div>
<!-send message popup -->