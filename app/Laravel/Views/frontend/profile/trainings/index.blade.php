@extends('frontend._layouts.main') @section('content')

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
                            {{--
                            <div class="col-lg-4 col-md-4">
                                <aside class="sidebar">
                                    <div class="central-meta stick-widget">
                                        <span class="create-post">Personal Info</span>
                                        <div class="personal-head">
                                            <span class="f-title"><i class="fa fa-user"></i> About Me:</span>
                                            <p>
                                                Hi, I’m John Carter, I’m 36 and I work as a Digital Designer for the “dewwater” Agency in Ontario, Canada
                                            </p>
                                            <span class="f-title"><i class="fa fa-birthday-cake"></i> Birthday:</span>
                                            <p>
                                                December 17, 1985
                                            </p>
                                            <span class="f-title"><i class="fa fa-phone"></i> Phone Number:</span>
                                            <p>
                                                +1-989-232435234
                                            </p>
                                            <span class="f-title"><i class="fa fa-medkit"></i> Blood group:</span>
                                            <p>
                                                B+
                                            </p>
                                            <span class="f-title"><i class="fa fa-male"></i> Gender:</span>
                                            <p>
                                                Male
                                            </p>
                                            <span class="f-title"><i class="fa fa-globe"></i> Country:</span>
                                            <p>
                                                San Francisco, California, USA
                                            </p>
                                            <span class="f-title"><i class="fa fa-briefcase"></i> Occupation:</span>
                                            <p>
                                                UI/UX Designer
                                            </p>
                                            <span class="f-title"><i class="fa fa-handshake-o"></i> Joined:</span>
                                            <p>
                                                December 20, 2001
                                            </p>

                                            <span class="f-title"><i class="fa fa-envelope"></i> Email & Website:</span>
                                            <p>
                                                <a href="https://wpkixx.com/html/pitnik/wpkixx.com" title="">www.wpkixx.com</a>
                                                <a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="06566f72686f6d467f6973746b676f6a2865696b">[email&#160;protected]</a>
                                            </p>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            --}}
                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <div class="row">
                                     @forelse ($my_profile->trainings as $item)
                                     <div class="col-lg-12">
                                        <div class="event-box">
                                            <div class="row merged20">
                                                <div class="col-lg-4 col-sm-12">
                                                    <a href="{{route('frontend.profile.training_details',[$my_profile->uuid,$item->uuid])}}">
                                                        <figure class="event-thumb"><img src="{{ asset('uploads/images/'.$item->file_name ) }}" alt="" /></figure>
                                                    </a>
                                                </div>

                                              
                                                <div class="col-lg-6 col-sm-9">
                                                    <a href="{{route('frontend.profile.training_details')}}">
                                                        <div class="event-title">
                                                            <span><i class="fa fa-map-marker"></i> {{ $item->address }}</span>
                                                            <h4>
                                                                <a href="{{route('frontend.profile.training_details')}}" title="Boxing with the Pe ople’s Champ - Manny Pacman">{{ $item->title }} | <strong>{{Helper::get_category($item->category) }}</strong></a>
                                                            </h4>
                                                            <p>{{ $item->description }}</p>
                                                            <!--  -->
                                                        </div>
                                                    </a>
                                                </div>
                            
                                               
                                                <div class="col-lg-2  col-sm-3">
                                                    <div class="event-time">
                                                        <span class="event-date oswald-500">{{ $item->capacity }} Slots</span>
                                                    </div>
                                                </div>


                                       
                                                
                                            </div>
                                        </div>
                                    
                                    </div>
                                     @empty
                                            <div class="col-md-12 text-center">
                                                <img src="{{asset('no-data-found.png')}}">
                                            </div>
                                            
                                     @endforelse


                    
                                    </div>
                                    <div class="lodmore">
                                        <button class="btn-view btn-load-more"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

    
    <!-- bottom bar -->
</div>
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1" />
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
</div>
<!-- side panel -->


<!-- send message popup -->

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
                            <label> <input type="radio" name="radio" checked="checked" /><i class="check-box"></i>It's spam or abuse </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>It breaks r/technology's rules </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Not Related </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Other issues </label>
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
</div>
<!-- report popup -->

@stop @section('page-styles')
<style type="text/css">
    .frnd-info > li span {
        width: 90px;
    }
</style>
@stop @section('page-scripts')
<script type="text/javascript"></script>
@stop
