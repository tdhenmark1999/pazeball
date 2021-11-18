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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    function toggle() {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';
        }
        else {
            cont.style.display = 'block';
        }
    }

    $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
});
</script>
<div class="user-profile">
   <a class="send-mesg">
       <div class="" style="margin-bottom: 5px; width: 100%; background-color: #fa6342; color: white; padding: 15px 20px; border-radius: 10px;">
           <h5 class="text-uppercase oswald-500">Book Now</h5>
           <span>Book a pazepro for the sports that you want for only <strong>2,000.00 Online and 2,500.00 Meet up</strong> per training.</span>
       </div>
   </a>
   <figure>
       @if($pazepro->file_name_banner == null)
        <img  alt="author" src="{{asset('placeholder/banner.png')}}" alt="" />
        @endif
        @if($pazepro->file_name_banner != null)
        <img  alt="author" src="{{ asset('uploads/images/'.$pazepro->file_name_banner ) }}" alt="" />
        @endif
       <ul class="profile-controls">
            @if($pazepro->is_pazepro == 'true')
           <li><img title="Pazepro badge" src="{{asset('frontend/images/pazepro.png')}}" /></li>
           @endif
           @if($pazepro->is_premium == 'true')
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
                       @if($pazepro->file_name == null)
                        <img  alt="author" src="{{asset('placeholder/avatar.png')}}" alt="" />
                        @endif
                        @if($pazepro->file_name != null)
                        <img  alt="author" src="{{ asset('uploads/images/'.$pazepro->file_name ) }}" alt="" />
                        @endif
               
                   </div>
                    
                   <div class="author-content">
                       <a class="h4 author-name">{{ $pazepro->first_name ." ". $pazepro->last_name  }}</a>
                       <div class="country">{{ $pazepro->province ." ". $pazepro->city  }}</div>
                   </div>
               </div>
           </div>
           <div class="col-lg-9 col-md-9">
               <ul class="profile-menu">
                   <li>
                       <a class="{{ (request()->is('pazepro/about*')) ? 'active' : '' }}" href="{{route('frontend.pazepro.about',[$pazepro->uuid])}}">About</a>
                   </li>
                   <li>
                       <a class="{{ (request()->is('pazepro/list-trainings*')) ? 'active' : '' }}" href="{{route('frontend.pazepro.list_trainings',[$pazepro->uuid])}}">Trainings</a>
                   </li>
                   <li>
                       <a class="{{ (request()->is('pazepro/list-videos*')) ? 'active' : '' }}" href="{{route('frontend.pazepro.list_videos',[$pazepro->uuid])}}">Videos</a>
                   </li>
                   <li>
                       <a class="{{ (request()->is('pazepro/list-reviews*')) ? 'active' : '' }}" href="{{route('frontend.pazepro.list_reviews',[$pazepro->uuid])}}">Reviews</a>
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
                   <li><span>Videos</span><ins>0</ins></li>
                   <li><span>Trainings</span><ins>0</ins></li>
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
                   {{ csrf_field() }}
                   <div class="row">
                       <div class="col-md-12">
                           <label>Type of Appointment</label>
                           <select onchange="toggle()" class="form-control" name="type" id="type" style="background-color: #edf2f6; font-size: 13px; height: calc(2.8em + 0.75rem + 2px);">
                               <option selected="" disabled="">Select Type of Appointment</option>
                              
                               <option>Online</option>
                               <option>Meet Up</option>
                           </select>
                       </div>
                       <div class="col-md-6">
                           <label>Date</label>
                           <input type="date" id="txtDate" name="date" />
                       </div>
                       <div class="col-md-6">
                           <label>Time</label>
                           <input type="time" id="time" name="time" />
                       </div>
                        <div id="cont" style="display:none" class="col-md-12">
                           <label>Address</label>
                           <textarea rows="3" placeholder="Address" id="address" name="address"></textarea>
                       </div>
                   
                           <div class="col-md-12">
                                 <label>Remarks</label>
                               <input type="text" name="remarks" id="remarks" />
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