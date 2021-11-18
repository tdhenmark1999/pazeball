@extends('system._layouts.main')

@section('content')
  
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
              <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">List of Parameters</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List of Parameters</a></li>
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
                                                        <th>Description</th>
                                                        <th>Date Created</th>
                                                    
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($parameters as $parameter)
                                                    <tr>
                                                        <th scope="row">{{ $reward->id }}</th>
                                                        <td>{{ $parameter->title }}</td>
                                                        <td>{{ $parameter->description }}</td>
                                                        <td>{{ date('Y-m-d',strtotime($parameter->created_at)) }}</td>
                                                    
                                                        <td>
                                                            <a href="{{route('system.parameter.edit',[$parameter->id])}}"><i class="far fa-edit"></i></a>
                                                            <a href="{{route('system.parameter.destroy',[$parameter->id])}}"><i class="far fa-trash-alt"></i></a>
                                                            
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
