<div class="responsive-header">
    <div class="mh-head first Sticky">
        <span class="mh-btns-left">
            <a class="" href="#menu"> 
                <!-- <img style="border-radius: 50%" src="{{asset('frontend/images/resources/admin.jpg')}}" alt="" /> -->
                <!-- Mobile -->
                @if(auth()->user()->file_name == null)
                <img  alt="author" src="{{asset('placeholder/avatar.png')}}" alt="" />
                @endif
                @if(auth()->user()->file_name != null)
                <img  alt="author" src="{{ asset('uploads/images/'.auth()->user()->file_name ) }}" alt="" />
                @endif
            
            </a>
        
        </span>
        <span class="mh-text">
            <a href="/" title=""><img style="width: auto; height: 42px;" src="{{asset('logo.png')}}" alt="" /></a>
        </span>
    </div>
    <div class="mh-head second">
        <!-- <form class="mh-form">
            <input placeholder="search" />
            <a href="#/" class="fa fa-search"></a>
        </form> -->
    </div>
    <nav id="menu" class="res-menu">
        <ul>
            @if (auth()->user()->is_premium == "false")
            <li>
                <a class="" style="padding: 10px; background-color: #fffbd4;">
                    <img style="margin-bottom: 2px; margin-right: 3px; width: auto; height: 40px !important;" title="Premium Video" src="{{asset('frontend/images/premium.png')}}" />
                    <span style="margin-right: 15px; color: #f1c40f; white-space: normal !important;">SUBSCRIBE NOW! <br /></span>
                    <p class="" style="white-space: normal !important; font-size: 10px; color: #f1c40f;">Earn this badge by subscribing to Pazeball Premium</p>
                </a>
            </li>
            @endif

            @if (!auth()->user()->is_pazepro == "true")
            <li>
                <a href="{{route('frontend.become_pazepro.index')}}" title=""><i class="ti-user"></i> Become a pazepro</a>
            </li>
            @endif
            <li>
                <a class="" href="{{route('frontend.video.index')}}" title=""><i class="fa fa-film"></i> Videos</a>
            </li>
            <li>
                <a class="" href="{{route('frontend.pazepro.index')}}" title=""><i class="fa fa-female"></i> Pazepro</a>
            </li>

            <li>
                <a class="" href="{{route('frontend.rewards.index')}}" title=""><i class="fa fa-heart"></i> Rewards</a>
            </li>
            <li>
                <a class="" href="#" title=""><i class="fa fa-forumbee"></i> Trainings</a>
                <ul>
                    <li><a href="{{route('frontend.training.index')}}" title="">All Training</a></li>
                    @if (auth()->user()->is_pazepro == "true")
                    <li><a href="{{route('frontend.training.create')}}" title="">Create Training</a></li>
                    @endif
                </ul>
            </li>

            <li>
                <a class="" href="{{route('frontend.account_settings.update_profile')}}" title=""><i class="fa fa-gears"></i> Account Setting</a>
               
            </li>

            <li>
                <a class="" href="{{route('frontend.wallet.logs')}}" title=""><i class="fa fa-wrench"></i> Wallet</a>
            </li>
            <li>
                <a href="{{route('frontend.booking.individual')}}" title=""><i class="ti-pencil-alt"></i> List of Appointment</a>
            </li>
            <li>
                <a href="{{route('frontend.profile.index')}}" title=""><i class="ti-user"></i> Profile</a>
            </li>
            <li>
                <a href="{{route('frontend.account_settings.update_profile')}}" title=""><i class="ti-settings"></i>Account Setting</a>
            </li>
            
            <li>
                <a href="{{ route('frontend.logout') }}" title=""><i class="ti-power-off"></i>log out</a>
            </li>
        </ul>
    </nav>
</div>
<!-- responsive header -->

<div class="topbar stick">
    <div class="logo">
        <a title="" href="/"><img src="{{asset('logo.png')}}" alt="" /></a>
    </div>
    <div class="top-area">
        <div class="main-menu">
            <span>
                <i class="fa fa-braille"></i>
            </span>
        </div>
        <div class="top-search">
            <form method="post" class="">
                <input type="text" placeholder="Search People, Pages, Groups etc" />
                <button data-ripple><i class="ti-search"></i></button>
            </form>
        </div>
        <div class="page-name">
            <span>{{$page_title}}</span>
        </div>
        <ul class="setting-area">
            <!-- <li>
                <a href="#" title="Notification" data-ripple=""> <i class="fa fa-bell"></i><em class="bg-purple">7</em> </a>
                <div class="dropdowns">
                    <span>4 New Notifications <a href="#" title="">Mark all as read</a></span>
                    <ul class="drops-menu">
                        <li>
                            <a href="#" title="">
                                <figure>
                                    <img src="{{asset('frontend/images/resources/thumb-1.jpg')}}" alt="" />
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="mesg-meta">
                                    <h6>sarah Loren</h6>
                                    <span>commented on your new profile status</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <figure>
                                    <img src="{{asset('frontend/images/resources/thumb-2.jpg')}}" alt="" />
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="mesg-meta">
                                    <h6>Jhon doe</h6>
                                    <span>Nicholas Grissom just became friends. Write on his wall.</span>
                                    <i>4 hours ago</i>
                                    <figure>
                                        <span>Today is Marina Valentine’s Birthday! wish for celebrating</span>
                                        <img src="{{asset('frontend/images/birthday.png')}}" alt="" />
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <figure>
                                    <img src="{{asset('frontend/images/resources/thumb-3.jpg')}}" alt="" />
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="mesg-meta">
                                    <h6>Andrew</h6>
                                    <span>commented on your photo.</span>
                                    <i>Sunday</i>
                                    <figure>
                                        <span>"Celebrity looks Beautiful in that outfit! We should see each"</span>
                                        <img src="{{asset('frontend/images/resources/admin.jpg')}}" alt="" />
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <figure>
                                    <img src="{{asset('frontend/images/resources/thumb-4.jpg')}}" alt="" />
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="mesg-meta">
                                    <h6>Tom cruse</h6>
                                    <span>nvited you to attend to his event Goo in</span>
                                    <i>May 19</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                        <li>
                            <a href="#" title="">
                                <figure>
                                    <img src="{{asset('frontend/images/resources/thumb-5.jpg')}}" alt="" />
                                    <span class="status f-online"></span>
                                </figure>
                                <div class="mesg-meta">
                                    <h6>Amy</h6>
                                    <span>Andrew Changed his profile picture. </span>
                                    <i>dec 18</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                    </ul>
                    <a href="#" title="" class="more-mesg">View All</a>
                </div>
            </li> -->

            <div class="dropdowns helps">
                <span>Quick Help</span>
                <form method="post">
                    <input type="text" placeholder="How can we help you?" />
                </form>
                <span>Help with this page</span>
                <ul class="help-drop">
                    <li>
                        <a href="#" title=""><i class="fa fa-book"></i>Community & Forum</a>
                    </li>
                    <li>
                        <a href="#" title=""><i class="fa fa-question-circle-o"></i>FAQs</a>
                    </li>
                    <li>
                        <a href="#" title=""><i class="fa fa-building-o"></i>Carrers</a>
                    </li>
                    <li>
                        <a href="#" title=""><i class="fa fa-pencil-square-o"></i>Terms & Policy</a>
                    </li>
                    <li>
                        <a href="#" title=""><i class="fa fa-map-marker"></i>Contact</a>
                    </li>
                    <li>
                        <a href="#" title=""><i class="fa fa-exclamation-triangle"></i>Report a Problem</a>
                    </li>
                </ul>
            </div>
        </ul>
        <div class="user-img">
            <h5>{{ auth()->user()->first_name ." ". auth()->user()->last_name }}</h5>
            <!-- Desktop -->
            @if(auth()->user()->file_name == null)
            <img style="height:60px;width:60px" alt="author" src="{{asset('placeholder/avatar.png')}}" alt="" />
            @endif
            @if(auth()->user()->file_name != null)
            <img style="height:60px;width:60px"  alt="author" src="{{ asset('uploads/images/'.auth()->user()->file_name ) }}" alt="" />
            @endif
            <span class="status f-online"></span>
            <div class="user-setting">
                @if (auth()->user()->is_premium == "false")
                <a href="{{route('frontend.subscribe.index')}}" class="seting-title" style="padding: 10px; background-color: #fffbd4;">
                    <img style="margin-bottom: 2px; margin-right: 3px; width: auto; height: 40px !important;" title="Premium Video" src="{{asset('frontend/images/premium.png')}}" />
                    <span style="margin-right: 15px; color: #f1c40f;">SUBSCRIBE NOW! </span>
                </a>
                @endif
                <!-- <span class="seting-title">User setting</span> -->
                <ul class="log-out">
                    <li>
                        <a href="{{route('frontend.profile.index')}}" title=""><i class="ti-user"></i> Profile</a>
                    </li>
                    @if (!auth()->user()->is_pazepro == "true")
                    <li>
                        <a href="{{route('frontend.become_pazepro.index')}}" title=""><i class="ti-user"></i> Become a pazepro</a>
                    </li>
                    @endif

                
                
                    <li>
                        <a href="{{route('frontend.booking.individual')}}" title=""><i class="ti-pencil-alt"></i> List of Appointment</a>
                    </li>
                  
                    <li>
                        <a href="{{route('frontend.account_settings.update_profile')}}" title=""><i class="ti-settings"></i>Account Setting</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.logout') }}" title=""><i class="ti-power-off"></i>log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav>
        <ul class="nav-list">
            <li>
                <a class="" href="{{route('frontend.video.index')}}" title=""><i class="fa fa-film"></i> Videos</a>
            </li>
            <li>
                <a class="" href="{{route('frontend.pazepro.index')}}" title=""><i class="fa fa-female"></i> Pazepro</a>
            </li>

            <li>
                <a class="" href="{{route('frontend.rewards.index')}}" title=""><i class="fa fa-heart"></i> Rewards</a>
            </li>
            <li>
                <a class="" href="#" title=""><i class="fa fa-forumbee"></i> Trainings</a>
                <ul>
                    <li><a href="{{route('frontend.training.index')}}" title="">All Training</a></li>
                    @if (auth()->user()->is_pazepro == "true")
                    <li><a href="{{route('frontend.training.create')}}" title="">Create Training</a></li>
                    @endif
                    <li><a href="{{route('frontend.my_training.index')}}" title="">My Training</a></li>
                </ul>
            </li>

            <li>
                <a class="" href="{{route('frontend.account_settings.update_profile')}}" title=""><i class="fa fa-gears"></i> Account Setting</a>
               
            </li>

            <li>
                <a class="" href="{{route('frontend.wallet.logs')}}" title=""><i class="fa fa-wrench"></i> Wallet</a>
            </li>
            
        </ul>
    </nav>
    <!-- nav menu -->
</div>

