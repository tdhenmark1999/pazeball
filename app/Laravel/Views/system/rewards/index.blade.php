@extends('system._layouts.main')

@section('content')
  
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
              <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">List of Rewards</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List of Rewards</a></li>
                                            <li class="breadcrumb-item active">index</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
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
                                                        <th>Title</th>
                                                        <th>Quantity</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Date Created</th>
                                                    
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($rewards as $reward)
                                                    <tr>
                                                        <th scope="row">{{ $reward->id }}</th>
                                                        <td>{{ $reward->title }}</td>
                                                        <td>{{ $reward->quantity }}</td>
                                                        <td>{{ $reward->amount }}</td>
                                                        <td>{{ $reward->status }}</td>
                                                        <td>{{ date('Y-m-d',strtotime($reward->created_at)) }}</td>
                                                    
                                                        <td>
                                                            <a href="{{route('system.rewards.edit',[$reward->id])}}"><i class="far fa-edit"></i></a>
                                                            <a href="{{route('system.rewards.destroy',[$reward->id])}}"><i class="far fa-trash-alt"></i></a>
                                                            
                                                        </td>
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

@stop
@section('page-scripts')

<script src="{{asset('backoffice/js/app.js')}}"></script>
@stop
