@extends('system._layouts.main')

@section('content')
        <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Create Reward</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">List of Rewards</a></li>
                                            <li class="breadcrumb-item active">Create</li>
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
                                    
                                        <form method="POST" enctype='multipart/form-data'>
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-12 mb-3 text-center">
                                                    <img id="blah_primary_back" src="images/placeholder-image.png" style="width: auto;height: 200px;" alt="" />
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="file" class="form-label">Image</label>
                                                        <input class="form-control" type="file" accept="image/png, image/gif, image/jpeg" name="file" placeholder="file" id="img_primary_back">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input class="form-control" type="text" value="" name="title" id="title">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select name="status" class="form-control">
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="quantity" class="form-label">Type</label>
                                                        <select name="type" class="form-control">
                                                            <option value="load">Load</option>
                                                            <option value="item">Item</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="quantity" class="form-label">Quantity</label>
                                                        <input class="form-control" type="text" value="" name="quantity" id="quantity">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="amount" class="form-label">Amount</label>
                                                        <input class="form-control" type="text" value="" name="amount" id="amount">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea  class="form-control" rows="5" name="description" id="description"></textarea>
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
