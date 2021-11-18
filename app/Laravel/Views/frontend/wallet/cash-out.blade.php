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
                                        <i class="fa fa-id-card" style="background-color: #f1c40f !important; color: white;"></i>
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
                                    <span class="oswald-500">1 Coin = 1 Peso</span>
                                        <span class="title2">Cash out</span>
                                        <form method="POST" action=" {{ route('frontend.wallet.checkout') }} ">
                                             <div class="row">
                                                <div class="col-md-6 mt-2">
                                                    <label>Payment Options</label>
                                                    <select name="payment_option" class="form-control" id="paymentOption" >
                                                        <option value="Cash">Cash</option>
                                                        <option value="Mobile Wallets">Mobile Wallets</option>
                                                    </select>
                                                </div>
                                                 <div style="display: none;" id="hidden_div1" class="col-md-6 mt-2">
                                                    <label>Wallet Name</label>
                                                    <input type="text" class="form-control" name="bank">
                                                </div>
                                                 <div style="display: none;" id="hidden_div2" class="col-md-6 mt-2">
                                                    <label>Account Name</label>
                                                    <input type="text" class="form-control" name="account_name">
                                                </div>
                                                <div style="display: none;" id="hidden_div3" class="col-md-6 mt-2">
                                                    <label>Account No / Mobile Number</label>
                                                    <input type="number" class="form-control" name="account_no" >
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label>Amount</label>
                                                    <input  min="500" type="number" class="form-control" required name="amount">
                                                </div>
                                                 <div class="col-md-6 mt-2">
                                                    <label>Remarks</label>
                                                    <input type="text" class="form-control" name="remarks">
                                                </div>
                                                <div class="col-md-12 mt-3 text-right">
                                                    <button type="submit" class="btn bg-primary--orange text-white">Proceed</button>
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
    #hidden_div {
        display: none;
    }
    #paymentOption_chosen {
         display: none !important;
    }
    #paymentOption {
        display: block !important;
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

   document.getElementById('paymentOption').addEventListener('change', function () {
    var style = this.value == "Mobile Wallets" ? 'block' : 'none';
    document.getElementById('hidden_div1').style.display = style;
    document.getElementById('hidden_div2').style.display = style;
    document.getElementById('hidden_div3').style.display = style;
});
</script>
@stop
