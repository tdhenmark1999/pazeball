@extends('frontend._layouts.main') @section('content') @include('frontend._components.header')
<section>
    <div class="page-header">
        <div class="header-inner">
            <h2>Price Plans</h2>
            <p>
                Welcome to Pitnik Social Network. Here you’ll find all the typography, content sources, & ready made elemets as you want. you can use to show on your custom pages.
            </p>
        </div>
        <figure><img src="{{asset('frontend/images/resources/baner-badges.png')}}" alt="" /></figure>
    </div>
</section>
<!-- sub header -->

<section>
    <div class="gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="sec-heading style9 text-center">
                        <span><img src="{{asset('premium-big.png')}}" style="margin-top: -11px; height: 15vh;" /> </span>
                        <h2>Our Price <span class="text-primary--orange">Plans</span></h2>
                    </div>
                </div>
             

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="price-box" style="border-radius: 6px;">
                        <span class="bg-primary--orange pt-2 pb-2">best Value</span>
                        <div class="pricings">
                            <h2>Premium</h2>
                            <h1>350 <span>Per Month</span></h1>
                            <p>
                                our price is free of cost for this package. you can not unlock all features.
                            </p>
                            <ul class="price-features">
                                <li><i class="ti-check"></i> Upload more than 30-sec video</li>
                                <li><i class="ti-check"></i> Access to premium training videos</li>
                                <li><i class="ti-check"></i> Convert rewards points to cash</li>
                                <li><i class="ti-check"></i> Book premium Pazepro (session)</li>
                            </ul>
                            <a class="main-btn bg-primary--orange" href="{{ route('frontend.wallet.ipay88_recurring',['10']) }}" title="" data-ripple="">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- price plans -->
{{--
<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row merged20" id="page-contents">
                <div class="col-lg-12 text-center">
                    <div class="central-meta pt-5 pb-5 row">
                        <div class="col-md-12">
                            <h2 class="oswald-700 text-uppercase text-primary--orange" style="color: #f1c40f;">Premium</h2>
                            <img src="{{asset('premium-big.png')}}" style="margin-top: -11px; height: 30vh;" />
                            <h1 class="oswald-700" style="color: #f1c40f;">350.00/<span style="color: #979797;">mo</span></h1>
                            <span class="text-primary--orange" style="font-size: 18px;">Pay using Paze coins</span>
                        </div>
                        <div class="mt-4 text-left col-md-12" style="background-color: #fffbd4; padding: 30px;">
                            <h2 class="text-primary--orange">Perks of being a PREMIUM MEMBER!</h2>

                            <p class="f-22 text-primary--orange mt-3">- Upload more than 30-sec video</p>
                            <p class="f-22 text-primary--orange mt-3">- Access to premium training videos</p>

                            <p>Access to specialized training programs</p>

                            <p class="f-22 text-primary--orange mt-3">- Convert rewards points to cash</p>
                            <p class="f-22 text-primary--orange mt-3">- Book premium Pazepro (session)</p>
                        </div>
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <button onclick="onSubmit()" class="btn bg-primary--orange text-white w-100 p-3 f-22 mt-3" style="border-radius: 25px;">Subscribe Now</button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <button onclick="goBack()" class="btn text-white w-100 p-3 f-22 mt-3 bg-secondary--gray" style="border-radius: 25px;">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--}} 
@stop @section('page-styles')
<style type="text/css"></style>
@stop @section('page-scripts')
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
