@extends('frontend._layouts.main') @section('content') @include('frontend._components.header')
<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row merged20" id="page-contents">
                <div class="col-lg-12 text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="" style="">
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
                        </div>
                        
                        <!-- sidebar -->
                    </div>
                </div>
                <div class="col-lg-12" style="">
                    @include('frontend._components.notifications')
                    @if (auth()->user()->is_pazepro == "true")
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="boost-box">
                                <a href="{{route('frontend.wallet.logs')}}" title="">
                                    <i class="fa fa-id-card" style="background-color: #f1c40f !important; color: white;"></i>
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
                                    <i class="fa fa-id-card" style="background-color: #f1c40f !important; color: white;"></i>
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
                                    <span class="title2">Activity Logs</span>
                                    <table class="overview table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Reference ID</th>
                                                <th>Account No</th>
                                                <th>Transaction Type</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Transaction Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($logs as $item)
                                            <tr>
                                                <td>{{ $item->transaction_id }}</td>
                                                <td>{{ $item->details->account_no ?$item->details->account_no. " - " : "CASH"  }} {{ $item->details->bank }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td><span class=" {{ $item->type == 'Cash out' ? "text-danger" :'text-success' }}">  {{$item->type == 'Cash out' ? "-" : "+"}} {{  $item->details->total_amount }}</span></td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <td></td>
                                                <td>31241223 - Ipay88</td>
                                                <td>Cash In</td>
                                                <td><span class="text-success">-100.00</span></td>
                                                <td>08-25-2021</td>
                                            </tr>

                                            <tr>
                                                <td>12312F2D</td>
                                                <td>09772471859 - Gcash</td>
                                                <td>Cash Out</td>
                                                <td><span class="text-danger">-100.00</span></td>
                                                <td>08-25-2021</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                    <ul class="pagination borderd mt-4">
                                       
                                        <li> {{ $logs->links() }}</li>
                                        {{-- <li class="prev-pge">
                                            <a href="#" title=""><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li><a href="#" title="" data-ripple="">1</a></li>
                                        <li><a href="#" title="" data-ripple="">2</a></li>
                                        <li><a class="active" href="#" title="" data-ripple="">3</a></li>
                                        <li class="dotzz">.....</li>
                                        <li><a href="#" title="" data-ripple="">10</a></li>
                                        <li class="next-pge">
                                            <a href="#" title=""><i class="fa fa-angle-right"></i></a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop @section('page-styles')
<style type="text/css">
    .boost-box > a {
        box-shadow: 0 1px 3px rgb(0 0 0 / 20%) !important;
        background-color: white !important;
    }
    .total-balance--layout {
        background-color: white;
        box-shadow: 0 1px 3px rgb(0 0 0 / 20%) !important;
        border-radius: 6px;
    }
</style>
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
