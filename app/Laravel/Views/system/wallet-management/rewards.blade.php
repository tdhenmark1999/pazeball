@extends('system._layouts.main')

@section('content')
  
  <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List of Rewards</h4>
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
                                            <th>Full Name</th>
                                            <th>Amount </th>
                                            <th>Type of Transaction</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>000123123</td>
                                            <td> Dhen mark</td>
                                            <td>1000.00</td>
                                            <td>Convert to pazecoin</td>
                                            <td>
                                            <a href="#" class="btn btn-primary">Approve</a>
                                            </td>
                                           
                                        </tr>
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
