@extends('frontend._layouts.main') @section('content')
 @include('frontend._components.header')
<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row merged20" id="page-contents">
                <div class="col-lg-12 text-left">
                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="boost-box p-3 pt-4 pl-4 total-balance--layout" style="height:105px">
                                            <span>Available Balance</span>
                                            <h2 class="oswald-500"><img style="height: 35px;margin-top: -5px" src="{{asset('frontend/images/points.png')}}">{{ auth()->user()->points }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="boost-box p-3 pt-4 pl-4 total-balance--layout" style="height:105px">
                                            <span style="font-size:12px">Current Balance</span>
                                            <h4 class="oswald-400"><img style="height: 25px;margin-top: -5px" src="{{asset('frontend/images/points.png')}}">{{ auth()->user()->points }}</h4>
                                        </div>
                                    </div>
                                </div>

                </div>
                <div class="col-lg-12" style="">
                @if (auth()->user()->is_pazepro == "true")
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.logs')}}" title="">
                                        <i class="fa fa-id-card"></i>
                                        <span>Activity Logs</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.cash_in')}}" title="">
                                        <i class="fa fa-id-card"></i>
                                        <span>Cash in</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.cash_out')}}" title="">
                                        <i class="fa fa-id-card"></i>
                                        <span>Cash out</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.rewards')}}" title="">
                                        <i class="fa fa-id-card" style="background-color: #f1c40f !important; color: white;"></i>
                                        <span>Rewards</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @else 
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.logs')}}" title="">
                                        <i class="fa fa-id-card"></i>
                                        <span>Activity Logs</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.cash_in')}}" title="">
                                        <i class="fa fa-id-card"></i>
                                        <span>Cash in</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="more-about">
                                    <div class="central-meta">
                                    <span class="oswald-500">1 Reward = 1 Coin</span>
                                        <span class="title2">Rewards - 10,000 points</span>
                                        <form>
                                             <div class="row">
                                               
                                                <div class="col-md-12 mt-2">
                                                    <label>How much rewards points do you want convert in pazer coins?</label>
                                                    <input type="number" class="form-control" name="">
                                                </div>
                                                 
                                                <div class="col-md-12 mt-3 text-right">
                                                    <button onclick="onSubmit()" class="btn bg-primary--orange text-white">Proceed</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop 

@section('page-styles')
<style type="text/css">
    .boost-box > a {
box-shadow: 0 1px 3px rgb(0 0 0 / 20%) !important;
background-color: white !important;
    }
    .total-balance--layout {
        background-color: white;box-shadow: 0 1px 3px rgb(0 0 0 / 20%) !important;border-radius: 6px
    }
</style>
@stop 

@section('page-scripts')
<script type="text/javascript">
    function onSubmit() {
        if (confirm("Are you sure you want to proceed?")) {
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
</script>
@stop
