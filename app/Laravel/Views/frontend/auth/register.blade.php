@extends('frontend._layouts.auth') @section('content')
<div class="www-layout">
    <section>
        <div class="gap no-gap signin whitish medium-opacity register">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 mt-5 mb-5">
                        <div class="reg-from">
                            <div style="text-align: center;">
                             <img src="{{asset('logo.png')}}" style="width: auto;height: 50px">
                            </div>
                            <span><i class="fa fa-lock"></i> Create an Account</span>
                            <form class="c-form" method="post">
                                <div class="row merged10">
                                    <div class="col-lg-12 mb-3 text-center" hidden>
                                        <img id="blah_primary_back" src="images/placeholder-image.png" style="width: auto; height: 200px; border-radius: 50%;" alt="" />
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                        <label hidden>Profile Image</label>
                                        <input hidden type="file" accept="image/png, image/gif, image/jpeg" name="full_path" placeholder="file" id="img_primary_back" />
                                        <span class="text-danger" id="full_path_error"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input class="mb-2" type="text" name="first_name" placeholder="First-Name" />
                                        <span class="text-danger" id="first_name_error"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input class="mb-2" type="text" name="last_name" placeholder="Last-Name" />
                                        <span class="text-danger" id="last_name_error"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input class="mb-2" type="email" name="email" placeholder="Email" />
                                        <span class="text-danger" id="email_error"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input class="mb-2" type="number" name="mobile_number" placeholder="Mobile number" />
                                        <span class="text-danger" id="mobile_error"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input class="mb-2" type="password" name="password" placeholder="Password" />
                                        <span class="text-danger" id="password_error"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input class="mb-2" type="password" name="password_confirmation" placeholder="Retype Password" />
                                    </div>
                                    {{--
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Address</label>
                                        <input class="mb-2" type="text" name="address" placeholder="Address" />
                                        <span class="text-danger" id="addres_error"></span>
                                    </div>
                                    --}} {{--
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <label>Province</label>
                                        <select class="mb-2" id="province" name="province">
                                            <option value="">Select Province</option>
                                            @foreach ($provinces as $province)
                                            <option value="{{ $province->prov_code }}">{{ $province->prov_desc }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="province_error"></span>
                                    </div>
                                    --}} {{--
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <label>City</label>
                                        <select class="mb-2" name="city" id="cities">
                                            <option value="">Select City</option>
                                            @foreach ($cities as $item)
                                            <option value="{{ $item->citymun_code }}"> {{ $item->citymun_desc }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="city_error"></span>
                                    </div>
                                    --}} {{--
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <label>Zipcode</label>
                                        <input class="mb-2" type="text" name="zip_code" placeholder="Zipcode" />
                                        <span class="text-danger" id="zip_code_error"></span>
                                    </div>
                                    --}}
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <label>Date of Birth</label>
                                        <input class="mb-2" type="date" name="birth_date" placeholder="Date" />
                                        <span class="text-danger" id="birth_date_error"></span>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <div class="gender mb-2">
                                            <label>Gender</label>
                                            <div class="form-radio">
                                                <div class="radio" style="padding: 14px 15px;">
                                                    <label> <input style="width: 100%" type="radio" name="gender"  value="male" /><i class="check-box"></i>Male </label>
                                                </div>
                                                <div class="radio" style="padding: 14px 15px;">
                                                    <label> <input style="width: 100%" type="radio" name="gender" value="female" /><i class="check-box"></i>Female </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                                        <div class="checkbox mb-1">
                                            <label>
                                                <input type="checkbox" /><i class="check-box"></i>
                                                By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 mt-2">
                                        <!-- <span class="reg-with">Register With</span>
                                            <ul class="social-reg">
                                                <li><a class="facebook" href="register2.html#" title="" data-ripple=""><i class="fa fa-facebook"></i> Facebook</a></li>
                                                <li><a class="twitter" href="register2.html#" title="" data-ripple=""><i class="fa fa-twitter"></i> Twitter</a></li>
                                            </ul> -->
                                    </div>
                                    <div class="col-lg-12 col-md-12 mt-2 text-center" style="justify-content: center;display: flex;margin-bottom: 10px">
                                        <button type="submit" id="signup" style="width: 100%;">Signup</button>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                                                    <span>Already have an account? <a style="color: #fa6342" class="we-account underline font-weight-bold" href="{{route('frontend.auth.login')}}" title="Login your account">Log in now</a></span>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop @section('page-styles')
<style type="text/css">
    .gap.signin:before {
        height: 100% !important;
    }
    body {
        background-image: url({{asset("frontend/images/bg-orange-main.jpg")}});
        background-repeat: no-repeat;
        background-size: cover;
    }
    .app-download {
        display: inline-block;
        vertical-align: middle;
        width: 100% !important;
        margin-left: 0px !important;
    }
    @media screen and (max-width: 990px) {
.c-form .gender .form-radio .radio {
    min-width: 48%;

}
}
 @media screen and (max-width: 739px) {
.c-form .gender .form-radio .radio {
    min-width: 100%;
    margin-bottom: 10px;
}
}
</style>
@stop @section('page-scripts')
<script type="text/javascript">
        img_primary_back.onchange = evt => {
      const [file] = img_primary_back.files
      if (file) {
        blah_primary_back.src = URL.createObjectURL(file)
      }
    }



    $(document).on('change','#province',function(){
        // alert($(this).val())
        let prov_code = $(this).val();

        $("#cities").css('display',"none");
        $.ajax({
                method:"POST",
                dataType:"json",
                data:{prov_code:prov_code},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"{{ route("frontend.address.cities") }}",
                beforeSend:function(){
                    // $('#signup').text("Please wait signing-up.....")
                },
                success:function(response){
                    console.log(response)

                    $("#cities").append("<option value=''>city</option>");
                    for( var i = 0; i < response.length ; i++){
                        var id = response[i]['citymun_code'];
                        var name = response[i]['citymun_desc'];
                        $("#cities").append("<option value='"+id+"'>"+name+"</option>");

                    }

                },
                error:function(data){
                    console.log(data.responseJSON.errors)
                    let error = data.responseJSON.errors

                    }

                })
    })


    //submit form
    $("form").on('submit',function(e){
        event.preventDefault();
        let form_data = $( this ).serialize();
        $.ajax({
                method:"POST",
                // contentType: false,
                // processData: false,
                // cache: false,
                dataType:"json",
                // data: new FormData(this),
                data: form_data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"{{ route("frontend.auth.store") }}",
                beforeSend:function(){
                    $('#signup').text("Please wait signing-up.....")
                },
                success:function(response){
                    console.log(response)
                    alert(response.message)
                    $('#signup').text("Signup")
                    window.location.href = "{{route("frontend.auth.confirmation")  }}";
                },
                error:function(error){
                 $('#signup').text("Signup")
                    console.log("ERROR MESSAGE: ",error)
                    console.log("ERRORS :",error.responseJSON.errors)

                    if( error.status === 422 ) {
                        var errors = error.responseJSON.errors ;
                        console.log(errors)
                        $.each(errors, function (key, val) {
                            $("#" + key + "_error").text(val[0]);
                        });
                    }


                    }

                })
    })
</script>
@stop
