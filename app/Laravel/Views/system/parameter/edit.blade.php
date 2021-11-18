@extends('system._layouts.main')

@section('content')
        <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Update Parameter</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List of Parameters</a></li>
                                            <li class="breadcrumb-item active">Update</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <p class="card-title-desc">Lorem ipsum dummt text.</p>
                                    </div>
                                    <div class="card-body p-4">
                                    <form method="POST">
                                        {{ csrf_field() }}
                                            <div class="row">
                                            
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input class="form-control" type="text" value="{{ old('title',$parameter->title) }}" name="title" id="title">
                                                        @if($errors->first('title'))
                                                        <span class="help-block">{{$errors->first('title')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="value" class="form-label">Value</label>
                                                        <input class="form-control" type="text" value="{{ old('title',$parameter->value) }}" name="value" id="title">
                                                        @if($errors->first('value'))
                                                        <span class="help-block">{{$errors->first('value')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea  class="form-control" rows="5" name="description" id="description">{{ old('description',$parameter->description) }}</textarea>
                                                        @if($errors->first('description'))
                                                        <span class="help-block">{{$errors->first('description')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        </div>
                        </div>
                        </div>
@stop
@section('page-scripts')


<script src="{{asset('backoffice/js/app.js')}}"></script>
@stop
