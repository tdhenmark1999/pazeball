@extends('frontend._layouts.main') @section('content') @include('frontend._components.header')
<section>
    <div class="page-header">
        <div class="header-inner">
            <h2>Account Verification</h2>
            <p>
                Welcome to Pitnik Social Network. Here you’ll find all the typography, content sources, & ready made elemets as you want. you can use to show on your custom pages.
            </p>
        </div>
        <figure><img src="{{asset('frontend/images/resources/baner-badges.png')}}" alt="" /></figure>
    </div>
</section>
<!-- sub header -->

<section>
    <div class="gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <h3 class="oswald-600">STEP 1</h3>
                    <p>Verification of your Mobile Number</p>
                </div>
                <div class="col-md-3 mt-3">
                    <button class="btn text-white bg-primary--orange w-100 text-uppercase oswald-500">Verify</button>
                </div>
                <div class="col-md-12">
                    <hr />
                </div>
                <div class="col-md-9">
                    <h3 class="oswald-600">STEP 2</h3>
                    <p>Upload your Avatar</p>
                </div>
                <div class="col-md-3 text-center">
                    <img id="blah_primary_back" src="images/placeholder-image.png" style="width: auto; height: 200px;" alt="" />
                    <input type="file" accept="image/png, image/gif, image/jpeg" name="first_back_id_full_path" placeholder="file" id="img_primary_back" />
                </div>
                <div class="col-md-12">
                    <hr />
                </div>
                <div class="col-md-12">
                    <h3 class="oswald-600">STEP 3</h3>
                    <p>Verification of your Full Address</p>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                            <label>Address</label>
                            <input class="mb-2 form-control" type="text" name="address" placeholder="Address" />
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <label>Province</label>
                            <select class="mb-2" id="province" name="province">
                                <option value="">Select Province</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <label>City</label>
                            <select class="mb-2" name="city" id="cities">
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                            <label>Zipcode</label>
                            <input class="mb-2 form-control" type="text" name="zip_code" placeholder="Zipcode" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <hr />
                    <button class="btn text-white btn-primary text-uppercase oswald-500">Submit Verification</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- price plans -->
{ @stop @section('page-styles')
<style type="text/css">
    .classic-pst-meta {
        max-width: 90% !important;
    }
</style>
@stop @section('page-scripts')
<script type="text/javascript">
    function onApprove() {
        if (confirm("Are you sure you want to accept a book?")) {
            // Save it!
            console.log("Thing was saved to the database.");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
    function onDeclined() {
        if (confirm("Are you sure you want to declined?")) {
            // Save it!
            console.log("Thing was saved to the database.");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
    function goBack() {
        window.history.back();
    }
    function onlineType() {
        if (confirm("Are you sure you want to accept a book?")) {
            // Save it!
            let link = prompt("Please enter the zoom or google meet link:", "");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
    img_primary_back.onchange = (evt) => {
        const [file] = img_primary_back.files;
        if (file) {
            blah_primary_back.src = URL.createObjectURL(file);
        }
    };
</script>
@stop
