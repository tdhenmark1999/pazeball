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
                                <div class="boost-box" >
                                    <a href="{{route('frontend.wallet.cash_in')}}" title="">
                                        <i class="fa fa-id-card"></i>
                                        <span>Cash in</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.cash_out')}}" title="">
                                        <i class="fa fa-id-card" style="background-color: #F1C40F !important;color: white"></i>
                                        <span>Cash out</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="boost-box">
                                    <a href="{{route('frontend.wallet.rewards')}}" title="">
                                        <i class="fa fa-id-card"></i>
                                        <span>Rewards</span>
                                    </a>
                                </div>
                            </div>
                     
                            
                        </div>
                      
                </div>
                
                            <div class="col-md-12">
                                <div class="more-about">
                                    <div class="central-meta">
                                    <span class="oswald-500">200 Coin = 200 Peso</span>
                                        <span class="title2">Cash out Checkout</span>
                                        <form method="POST" action="{{ route('frontend.wallet.place_cashout') }}">
                                             <div class="row">
                                             <div class="col-md-6">
                                                    <span>Payment Option</span>
                                                    <input type="hidden" name="payment_option" value="{{ $payment_option }}" >
                                                    <input type="hidden" name="remarks" value="{{ $remarks }}" >
                                                    <p>{{ $payment_option  }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="hidden"  name="bank" value="{{ $bank  }}" >
                                                    <span>Bank Name</span>
                                                    <p>{{ $bank }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="hidden" name="account_name" value="{{ $account_name }}" >
                                                    <span>Account Name</span>
                                                    <p>{{ $account_name }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="hidden" name="account_no" value="{{ $account_no }}" >
                                                    <span>Account Number</span>
                                                    <p>{{ $account_no }}</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                             
                                                <div class="col-md-9 col-lg-10 text-right">
                                
                                                    <span class="roboto-400">Subtotal</span>
                                                </div>
                                                <div class="col-md-3 col-lg-2 text-right">
                                                    <input type="hidden" name="amount" value="{{ $amount }}" >
                                                    <p class="roboto-400">{{ $amount }} PHP</p>
                                                </div>

                                                <div class="col-md-9 col-lg-10 text-right">
                                                   
                                                    <span class="roboto-400">Service Fee 8%</span>
                                                </div>
                                                <div class="col-md-3 col-lg-2 text-right">
                                                    <input type="hidden" name="service_fee" value="{{ $service_fee }}" >
                                                    <p class="roboto-400">{{ $service_fee }} PHP</p>
                                                </div>

                                                <div class="col-md-9 col-lg-10 text-right">
                                                    <span class="roboto-400">Tax Fee 12%</span>
                                                </div>
                                                <div class="col-md-3 col-lg-2 text-right">
                                                    <input type="hidden" name="tax" value="{{ $tax }}" >
                                                    <p class="roboto-400">{{ $tax }} PHP</p>
                                                </div>
                                                <div class="col-md-9 col-lg-10 text-right">
                                                    <input type="hidden" name="amount" value="{{ $amount }}" >
                                                    <span class="oswald-500">Total Amount</span>
                                                </div>
                                                <div class="col-md-3 col-lg-2 text-right">
                                        
                                                    <input type="hidden" name="total_amount" value="{{ $total_amount }}" >
                                                    <p class="font-weight-bold oswald-500">{{ $total_amount  }}</p>
                                                </div>
                                               
                                                <div class="col-md-12 mt-3 text-right">
                                                    <button onclick="onSubmit()" id="proceed" class="btn bg-primary--orange text-white">Submit</button>
                                                </div>
                                            </div>
                                        </form>
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
 
        $('#proceed').on('click',function(event){
    event.preventDefault()
        Swal.fire({
        title: 'Confirmatiion',
        text: "Are you sure you want to proceed?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Proceed'
        }).then((result) => {
        if (result.isConfirmed) {
            $('form').submit()
        }
        })
})
    
    function goBack() {
      window.history.back();
    }
</script>
@stop
