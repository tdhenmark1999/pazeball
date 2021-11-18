@extends('system._layouts.main')

@section('content')
  
  <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List of Admin</h4>
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
                                            <th>Account Number</th>
                                            <th>Email Address</th>
                                            <th>Mobile Number</th>
                                            <th>Points</th>
                                            <th>Date Created</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($admins as $admin)
                                        <tr>
                                            <th scope="row">{{ $admin->id }}</th>
                                            <td> {{ $admin->last_name }}, {{ $admin->first_name }} {{ $admin->middle_name }}</td>
                                            <td>{{ $admin->account_number }}</td>
                                            <td>{{ $admin->email_address }}</td>
                                            <td>{{ $admin->mobile_number }}</td>
                                            <td>{{ $admin->points }}</td>
                                            <td>{{ $admin->created_at }}</td>
                                           
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No Data Found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center" style="display:flex;justify-content:center">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="ui-general.html#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="ui-general.html#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="ui-general.html#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="ui-general.html#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="ui-general.html#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
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
