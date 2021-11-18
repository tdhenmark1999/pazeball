@extends('frontend._layouts.main') @section('content')
 @include('frontend._components.header')
<section>
        <div class="page-header">
            <div class="header-inner">
                <h2>Booking list</h2>
                <p>
                    Welcome to Pitnik Social Network. Here you’ll find all the typography, content sources, & ready made elemets as you want. you can use to show on your custom pages.
                </p>
            </div>
            <figure><img src="{{asset('frontend/images/resources/baner-badges.png')}}" alt=""></figure>
        </div>
    </section><!-- sub header -->
    
    <section>
        <div class="gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                         <!-- <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="boost-box ">
                                    <a href="{{route('frontend.booking.group')}}" title="">
                                        <i class="fa fa-users"></i>
                                        <span>Group Training</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="boost-box bg-primary--gray-dark">
                                    <a href="{{route('frontend.booking.individual')}}" title="">
                                        <i class="fa fa-user"></i>
                                        <span class="text-white">Individual Training</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <div class="central-meta">
                                    <div class="title-block">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="align-left">
                                                    <h5>List of Appointment <span>1</span></h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row merged20">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <form method="post">
                                                            <input type="text" placeholder="Search training">
                                                            <button type="submit"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                 
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="select-options">
                                                            <select class="select">
                                                                <option disabled selected>Select Status</option>
                                                                <option>New</option>
                                                                <option>Ongoing</option>
                                                                <option>Pending</option>
                                                                <option>Completed</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- title block -->
                    </div>
               
                    
                    @foreach ($booking_ind as $item)
                        @foreach ($item->users as $user)
                        <div class="col-xs-12 col-sm-6">
                            <div class="central-meta item" >
                                <div class="classic-post">
                                    <div class="row">
                                        <div class="col-lg-2 text-center">
                                            <figure>
                                             <img style="width: 100%;height: auto;border-radius: 50%" src="{{asset('frontend/images/resources/thumb-2.jpg')}}" alt="">
                                            <span style="margin-top: 10px;font-weight: bold">PAZER</span>
                                            </figure>
                                        </div>
                                        <div class="col-lg-10">
                                            <h4 class="oswald-600">{{ $user->fullname }}<img style="height: 25px;margin-top: -5px" src="{{asset('frontend/images/points.png')}}"></h4>
                                            <span class="roboto-400">Type of Appointment: {{ $item->type }} </span><br>
                                             <span>Link of google meet or zoom</span>
                                            <p  class="roboto-400"><i class="fa fa-clock"></i> Jan,12 2020 @3:00PM</p>
                                            <div>   
                                               <a onclick="onlineType()" class="main-btn bg-success">Accept</a>
                                                <a onclick="onDeclined()"class="main-btn bg-danger">Declined</a>
    
                                            </div>
                                        </div>
                                        
                                    </div>
                                     
                                       
                                    </div>
                                </div><!-- shop product post -->
                          
                    
                </div>
                        @endforeach
                 
                    @endforeach

                    <div class="col-lg-12">
                        <ul class="pagination borderd mt-4">
                                            <li class="prev-pge"><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
                                            <li><a href="#" title="" data-ripple="">1</a></li>
                                            <li><a href="#" title="" data-ripple="">2</a></li>
                                            <li><a class="active" href="#" title="" data-ripple="">3</a></li>
                                            <li class="dotzz">.....</li>
                                            <li><a href="#" title="" data-ripple="">10</a></li>
                                            <li class="next-pge"><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                    </div>
                    
              
                </div>
            </div>
        </div>
    </section><!-- price plans -->
{
@stop 

@section('page-styles')
<style type="text/css">
    .classic-pst-meta {
        max-width: 90% !important
    }
    .boost-box > a {
        border-radius: 0px;
    box-shadow: 0 1px 7px rgb(0 0 0 / 10%) !important;
    }
</style>
@stop 

@section('page-scripts')
    <script type="text/javascript">
    function onApprove() {
        if (confirm("Are you sure you want to accept a book?")) {
            // Save it!
            console.log("Thing was saved to the database.");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
      function onDeclined() {
        if (confirm("Are you sure you want to declined?")) {
            // Save it!
            console.log("Thing was saved to the database.");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
    function goBack() {
      window.history.back();
    }
function onlineType() {
        if (confirm("Are you sure you want to accept a book?")) {
            // Save it!
            let link = prompt("Please enter the zoom or google meet link:", "");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
 
</script>
@stop
