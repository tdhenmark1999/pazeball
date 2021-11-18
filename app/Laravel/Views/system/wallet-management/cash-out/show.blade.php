@extends('system._layouts.main') @section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-row">
                                    <div style="margin-right: 10px;">
                                        <img title="Premium Video" style="width: auto; height: auto;" src="{{asset('frontend/images/premium.png')}}" />
                                    </div>
                                    <div>
                                        <h4 class="card-title">Details of Cashout</h4>
                                        <p class="card-title-desc">
                                            lorem ipsum dummy text
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="" style="border-radius: 10px;" width="auto" height="auto" src="{{asset('backoffice/images/users/avatar-1.jpg')}}" alt="Header Avatar" />
                                </div>
                                <div class="col-lg-9">
                                    {{-- <i class="fas fa-female"></i> --}}
                                    <h4 class="text-uppercase" style="margin-bottom: 15px;">{{ Helper::get_user($item->user_id) }}, <i class="fas fa-male"></i> 22</h4>
                                    <hr />
                                    <div class="row mb-2 mt-2">
                                        <div class="col-md-4">
                                            <span class=""><strong>Payment Option</strong></span>
                                            <p class="text-uppercase">{{ $item->details->payment_option }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <span class=""><strong>Bank Name</strong></span>
                                            <p class="text-uppercase">{{ $item->details->bank }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <span class=""><strong>Account Name</strong></span>
                                            <p class="text-uppercase">{{ $item->details->account_name }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <span class=""><strong>Account Number</strong></span>
                                            <p class="text-uppercase">{{ $item->details->account_no }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <span class=""><strong>Amount</strong></span>
                                            <p class="text-uppercase">{{ $item->total_amount }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <span class=""><strong>Remarks</strong></span>
                                            <p class="text-uppercase">{{ $item->remarks }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mt-3">
                                            <div class="justify-content-end d-flex">
                                                <a type="button" href="{{route('system.wallet_management.approved',[$item->id])}}" class="btn btn-primary">Approve Cashout</a>
                                                <button class="btn btn-secondary" style="margin-left: 5px;">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>

@stop @section('page-scripts')

<script src="{{asset('backoffice/js/app.js')}}"></script>
@stop
