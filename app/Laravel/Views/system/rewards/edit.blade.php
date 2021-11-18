@extends('system._layouts.main')

@section('content')
        <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Update Rewards</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List of Rewards</a></li>
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
                                                <div class="col-lg-12 mb-3 text-center">
                                                    <img id="blah_primary_back" src="{{asset('uploads/images/'.$reward->file_name)}}" style="width: auto;height: 200px;" alt="" />
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Image</label>
                                                        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" name="file" placeholder="file" id="img_primary_back">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input class="form-control" type="text" value="{{ old('title',$reward->title) }}" name="title" id="title">
                                                        @if($errors->first('title'))
                                                        <span class="help-block">{{$errors->first('title')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="value" class="form-label">Status</label>
                                                        <select name="status" class="form-control">
                                                        @if($reward->status == 'active')
                                                            <option selected value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        @endif
                                                        @if($reward->status == 'inactive')
                                                            <option  value="active">Active</option>
                                                            <option selected value="inactive">Inactive</option>
                                                        @endif

                                                        </select>
                                                        @if($errors->first('title'))
                                                        <span class="help-block">{{$errors->first('title')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="value" class="form-label">Quantity</label>
                                                        <input class="form-control" type="number" value="{{ old('quantity',$reward->quantity) }}" name="quantity" id="quantity">
                                                        @if($errors->first('quantity'))
                                                        <span class="help-block">{{$errors->first('quantity')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="amount" class="form-label">Amount</label>
                                                        <input class="form-control" type="number" value="{{ old('amount',$reward->amount) }}" name="amount" id="amount">
                                                        @if($errors->first('amount'))
                                                        <span class="help-block">{{$errors->first('amount')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea  class="form-control" rows="5" name="description" id="description">{{ old('description',$reward->description) }}</textarea>
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

<script>
      img_primary_back.onchange = evt => {
  const [file] = img_primary_back.files
  if (file) {
    blah_primary_back.src = URL.createObjectURL(file)
  }
}
</script>
<script src="{{asset('backoffice/js/app.js')}}"></script>
@stop
