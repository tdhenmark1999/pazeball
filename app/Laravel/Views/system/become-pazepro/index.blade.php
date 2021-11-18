@extends('system._layouts.main') @section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List of New Pazepro</h4>
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
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            {{-- <th>Address</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($users as $user)
                                        <tr>
                                            <th scope="row"><img class="rounded-circle header-profile-user" src="{{asset('backoffice/images/users/avatar-1.jpg')}}"alt="Header Avatar"></th>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            {{-- <td>{{ $user->address[0]->province ? $user->address[0]->province : "N/A" }} </td> --}}
                                            <td>
                                                <a href="{{route('system.become_pazepro.details',[$user->uuid])}}"><i class=" far fa-eye"></i></a>
                                            <i class="far fa-trash-alt"></i></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No Data Found</td>
                                        </tr>
                                        @endforelse
                                        
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

@stop @section('page-scripts')


<script src="{{asset('backoffice/js/app.js')}}"></script>
@stop
