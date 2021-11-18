@extends('frontend._layouts.main') @section('content')

<div class="theme-layout">
    <div class="postoverlay"></div>

    @include('frontend._components.header')

    <section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <span class="create-post">Information</span>
                                    <div class="page-createbox">
                                        <form class="c-form" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6 {{$errors->first('description') ? 'has-error' : NULL}}">
                                                    <img id="blah_primary_front" src="images/placeholder-image.png" style="width: auto; height: 300px;" alt="" />
                                                    <label>Front Image</label>
                                                    <input value="{{ old('first_front_id_full_path') }}" type="file" accept="image/png, image/gif, image/jpeg" name="first_front_id_full_path" placeholder="file" id="img_primary_front" />
                                                    @if($errors->first('first_front_id_full_path'))
                                                    <span class="text text-danger">{{$errors->first('first_front_id_full_path')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <img id="blah_primary_back" src="images/placeholder-image.png" style="width: auto; height: 300px;" alt="" />
                                                    <label>Back Image</label>
                                                    <input type="file" accept="image/png, image/gif, image/jpeg" name="first_back_id_full_path" placeholder="file" id="img_primary_back" />
                                                    @if($errors->first('first_back_id_full_path'))
                                                    <span class="text text-danger">{{$errors->first('first_back_id_full_path')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="first_id_type">
                                                        <option value="" >Select PRIMARY ID Type</option>
                                                        @foreach ($id_types as $item)
                                                        <option value="{{ $item->code }}"> {{ $item->name }} </option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->first('first_id_type'))
                                                    <span class="text text-danger">{{$errors->first('first_id_type')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="first_id_number" placeholder="ID NUMBER" value="{{ old('first_id_number') }}" />
                                                    @if($errors->first('first_id_number'))
                                                    <span class="text text-danger">{{$errors->first('first_id_number')}}</span>
                                                    @endif
                                                </div>

                                                <div class="col-lg-6">
                                                    <img id="blah_secondary_front" src="images/placeholder-image.png" style="width: auto; height: 300px;" alt="" />
                                                    <label>Front Image</label>
                                                    <input type="file" name="second_front_id_full_path" accept="image/png, image/gif, image/jpeg" placeholder="file" id="img_secondary_front" />
                                                    @if($errors->first('second_front_id_full_path'))
                                                    <span class="text text-danger">{{$errors->first('second_front_id_full_path')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <img id="blah_secondary_back" src="images/placeholder-image.png" style="width: auto; height: 300px;" alt="" />
                                                    <label>Back Image</label>
                                                    <input type="file" name="second_back_id_full_path" accept="image/png, image/gif, image/jpeg" placeholder="file" id="img_secondary_back" />
                                                    @if($errors->first('second_back_id_full_path'))
                                                    <span class="text text-danger">{{$errors->first('second_back_id_full_path')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="second_id_type">
                                                        <option value="">Select Secondary ID Type</option>  
                                                        @foreach ($id_types as $item)
                                                        <option value="{{ $item->code }}"> {{ $item->name }} </option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->first('second_id_type'))
                                                    <span class="text text-danger">{{$errors->first('second_id_type')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <input name="second_id_number" type="text" placeholder="ID NUMBER" />
                                                    @if($errors->first('second_id_number'))
                                                    <span class="text text-danger">{{$errors->first('second_id_number')}}</span>
                                                    @endif
                                                </div> 
                                                <div class="col-lg-12">
                                                     <label>Description about you</label>
                                                    <textarea rows="5" name="description"></textarea>
                                                    @if($errors->first('description'))
                                                    <span class="text text-danger">{{$errors->first('description')}}</span>
                                                    @endif
                                                </div>
                                            <div class="col-lg-12">
                                                 <label>Sports</label>
                                                    <select name="sport[]" id="sport" style="" multiple="">
                                                        <option value="1" >Basketball</option>
                                                        <option value="2">Yoga</option>
                                                        @if($errors->first('sport'))
                                                        <span class="text text-danger">{{$errors->first('sport')}}</span>
                                                        @endif
                                                    </select>
                                                </div>
                                                {{--
                                                <div class="col-lg-12">
                                                    <textarea rows="6" placeholder="Additional info about you"></textarea>
                                                </div>
                                                --}}
                                                <div class="col-md-12">
                                                    <span class="create-post">Curriculum Vitae</span>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="file" name="curriculum_vitae_full_path" class="mt-1" placeholder="File" />
                                                            @if($errors->first('curriculum_vitae_full_path'))
                                                            <span class="text text-danger">{{$errors->first('curriculum_vitae_full_path')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                <div class="col-md-12">
                                                    <span class="create-post">Certificates</span>
                                                    <div class="container1">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="add_form_field">
                                                                    Add New Certificates &nbsp;
                                                                    <span style="font-size: 16px; font-weight: bold;">+ </span>
                                                                </button>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="mt-1" placeholder="Title" name="title[]" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="mt-1" placeholder="Location" name="location[]" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="mt-1" placeholder="Month" name="month[]" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="mt-1" placeholder="Year" name="year[]" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="file" class="mt-1" placeholder="File" name="certificate_file[]" />
                                                            </div>
                                                            <!-- <div class="col-md-4">
                                                                <a href="#" class="delete btn bg-danger mt-4" style="color: white;">Delete</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <button class="main-btn" type="submit" data-ripple="">Submit</button>
                                                    <button class="main-btn3" type="submit" data-ripple="">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- centerl meta -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

    {{-- --}}
</div>

<div class="popup-wraper1">
    <div class="popup direct-mesg">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Send Message</h5>
            </div>
            <div class="send-message">
                <form method="post" class="c-form">
                    <input type="text" placeholder="Sophia" />
                    <textarea placeholder="Write Message"></textarea>
                    <button type="submit" class="main-btn">Send</button>
                </form>
                <div class="add-smiles">
                    <div class="uploadimage">
                        <i class="fa fa-image"></i>
                        <label class="fileContainer">
                            <input type="file" />
                        </label>
                    </div>
                    <span title="add icon" class="em em-expressionless"></span>
                    <div class="smiles-bunch">
                        <i class="em em---1"></i>
                        <i class="em em-smiley"></i>
                        <i class="em em-anguished"></i>
                        <i class="em em-laughing"></i>
                        <i class="em em-angry"></i>
                        <i class="em em-astonished"></i>
                        <i class="em em-blush"></i>
                        <i class="em em-disappointed"></i>
                        <i class="em em-worried"></i>
                        <i class="em em-kissing_heart"></i>
                        <i class="em em-rage"></i>
                        <i class="em em-stuck_out_tongue"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- send message popup -->

<div class="popup-wraper3">
    <div class="popup">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Report Post</h5>
            </div>
            <div class="Rpt-meta">
                <span>We're sorry something's wrong. How can we help?</span>
                <form method="post" class="c-form">
                    <div class="form-radio">
                        <div class="radio">
                            <label> <input type="radio" name="radio" checked="checked" /><i class="check-box"></i>It's spam or abuse </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>It breaks r/technology's rules </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Not Related </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Other issues </label>
                        </div>
                    </div>
                    <div>
                        <label>Write about Report</label>
                        <textarea placeholder="write someting about Post" rows="2"></textarea>
                    </div>
                    <div>
                        <button data-ripple="" type="submit" class="main-btn">Submit</button>
                        <a href="timeline-friends.html#" data-ripple="" class="main-btn3 cancel">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- report popup -->

@stop @section('page-styles')
<style type="text/css">
    .frnd-info > li span {
        width: 90px;
    }
   .chosen-container-multi .chosen-choices {
        background-color: #EDF2F6 !important;
        background-image:linear-gradient(transparent 1%,transparent 15%) !important;
        padding: 10px 12px;
    }
</style>
@stop 
@section('page-scripts')
<script type="text/javascript">
          $(document).ready(function() {
            var max_fields = 20;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div class="row"><div class="col-md-4"><input type="text" class="mt-1" placeholder="Title" name="title[]"/></div><div class="col-md-4"><input type="text" class="mt-1" placeholder="Location" name="location[]"/></div><div class="col-md-4"><input type="text" class="mt-1" placeholder="Month" name="month[]"/></div><div class="col-md-4"><input type="text" class="mt-1" placeholder="Year" name="year[]"/></div><div class="col-md-4"><input type="file" class="mt-1" placeholder="File" name="certificate_file[]"/></div><a href="#" class="delete btn bg-danger mt-md-3" style="color: white;height: 41px; margin-left: 10px;"><i class="fa fa-trash"></i></a></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            // <div class="row list-cert"><div class="col-md-4"><input type="text" class="mt-1" placeholder="Title" name="mytext[]"/></div><div class="col-md-4"><input type="text" class="mt-1" placeholder="Location" name="mytext[]"/></div><div class="col-md-4"><input type="text" class="mt-1" placeholder="Month" name="mytext[]"/></div><div class="col-md-4"><input type="text" class="mt-1" placeholder="Year" name="mytext[]"/></div><div class="col-md-4"><input type="file" class="mt-1" placeholder="File" name="mytext[]"/></div><div class="col-md-4"><a href="#" class="delete btn bg-danger mt-4" style="color: white;">Delete</a></div></div>
            $(wrapper).on("click", ".delete", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
        img_primary_front.onchange = evt => {
            const [file] = img_primary_front.files
            if (file) {
                blah_primary_front.src = URL.createObjectURL(file)
            }
            }

    img_primary_back.onchange = evt => {
      const [file] = img_primary_back.files
      if (file) {
        blah_primary_back.src = URL.createObjectURL(file)
      }
    }

    img_secondary_front.onchange = evt => {
      const [file] = img_secondary_front.files
      if (file) {
        blah_secondary_front.src = URL.createObjectURL(file)
      }
    }

    img_secondary_back.onchange = evt => {
      const [file] = img_secondary_back.files
      if (file) {
        blah_secondary_back.src = URL.createObjectURL(file)
      }
    }



    //Add Certificate

    // $("form").on('submit',function(e){
    //     event.preventDefault();
    //     let form_data = $( this ).serialize();
    //     console.log(form_data)
    //     $.ajax({
    //             method:"POST",
    //             contentType: false,
    //             processData: false,
    //             cache: false,
    //             // dataType:"json",
    //             data: new FormData(this),
    //             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //             url:"{{ route("frontend.become_pazepro.store") }}",
    //             beforeSend:function(){
    //                 // $('#upload').text("uploading.....")
    //             },
    //             success:function(response){
    //                 console.log(response)
    //                 alert(response.message)
    //             },
    //             error:function(data){
    //                 console.log(data.responseJSON.message)


    //                 }

    //             })
    // })
</script>
@stop
