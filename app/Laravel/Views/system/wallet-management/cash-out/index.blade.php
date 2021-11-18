@extends('system._layouts.main')

@section('content')
  
  <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List of Pazepro</h4>
                            <p class="card-title-desc">
                                Lorem ipsum dummy text
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Date Submitted</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cashout_request as $item)
                                        <tr>
                                            <td>{{ $item->transaction_id }}</td>
                                            <td>{{ $item->details->account_name  }}</td>
                                            <td>{{ $item->total_amount   }} PHP</td>
                                            <td>{{ $item->created_at   }}</td>
                                            <td>
                                            <a href="{{route('system.wallet_management.cash_out_details',[$item->id])}}" class="btn btn-primary">View</a>
                                            </td>
                                           
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
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

@stop
@section('page-scripts')


<script src="{{asset('backoffice/js/app.js')}}"></script>
@stop
