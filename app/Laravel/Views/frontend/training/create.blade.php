@extends('frontend._layouts.main')

@section('content')
    <div class="wavy-wraper">
        <div class="wavy">
          <span style="--i:1;">p</span>
          <span style="--i:2;">a</span>
          <span style="--i:3;">z</span>
          <span style="--i:4;">e</span>
          <span style="--i:5;">b</span>
          <span style="--i:6;">a</span>
          <span style="--i:7;">l</span>
          <span style="--i:8;">l</span>
          <span style="--i:9;">.</span>
        </div>
    </div>

    
<div class="theme-layout">
    
    
    
   @include('frontend._components.header')
        
    <section>
        <div class="page-header">
            <div class="header-inner">
                <h2>Create Trainings</h2>
                <p>
                    Welcome to Pazeball. This page is for the community where user can put some technicial questions about the pitnik policies.
                </p>
            </div>
            <figure><img src="{{asset('frontend/images/resources/baner-forum.png')}}" alt=""></figure>
        </div>
    </section><!-- sub header -->
    
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row merged20">
                    <div class="col-lg-12">
                        <div class="forum-warper">
                            <div class="central-meta">
                                <div class="title-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="align-left">
                                                <h5>Add Training</h5>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div><!-- title block -->
                        </div>
                        <div class="forum-form">
                            <div class="central-meta">
                                <form  class="c-form" enctype='multipart/form-data'  id="training_form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                    <div class="col-lg-12 mb-3 text-center">
                                            <img id="blah_primary_back" src="images/placeholder-image.png" style="width: auto;height: 200px;" alt="" />
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <input type="file" accept="image/png, image/gif, image/jpeg" name="file" placeholder="file" id="img_primary_back">
                                            <span class="text-danger" id="file_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label>Engagement Type</label>
                                            <select name="type">
                                                <option  selected >Select Engagement Type</option>
                                                <option value="online"  >Online</option>
                                                <option  disabled value="meetup">Meet Up</option>
                                                
                                            </select>
                                            <span class="text-danger" id="type_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">  
                                            <label>Url</label>
                                            <input type="text" name="url_training" placeholder="Training Url">
                                            <span class="text-danger" id="url_training_error"></span>
                                            
                                        </div>
                                        <div  class="col-md-6 mt-2">
                                            <label>Category</label>
                                            <select name="category">
                                                <option selected disabled>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->code }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger" id="capacity_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">  
                                            <label>Slot</label>
                                            <input type="number" name="capacity" placeholder="Slot of Pazer">
                                            <span class="text-danger" id="category_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">  
                                            <label>Title</label>
                                            <input type="text" name="title" placeholder="Title of training">
                                            <span class="text-danger" id="title_error"></span>
                                        </div>
                                        <div  class="col-md-12 mt-2">
                                            <label>Description</label>
                                            <textarea rows="3"  placeholder="About training" name="description"></textarea>
                                            <span class="text-danger" id="description_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">  
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Insert address">
                                            <span class="text-danger" id="address_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">  
                                            <label>Barangay</label>
                                            {{-- <select name="barangay">
                                                <option selected disabled>Select Barangay</option>
                                            </select> --}}
                                            <input type="text" placeholder="Insert barangay" name="barangay">
                                            <span class="text-danger" id="barangay_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">  
                                            <label>Province</label>
                                            <select name="province" class="form-control" id="training_province">
                                                <option selected disabled>Select Province</option>
                                                @foreach ($provinces as $province)
                                                <option value="{{ $province->prov_code }}">{{ $province->prov_desc }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger" id="province_error"></span>
                                        </div>
                                        <div class="col-md-6 mt-2" >  
                                            <label>City</label>
                                            <select class="form-control" name="city" id="training_cities">
                                                <option selected disabled>Select City</option>
                                                {{-- @foreach ($cities as $city)
                                                    <option value="{{ $city->citymun_code }}">{{ $city->citymun_desc }}</option>
                                                @endforeach --}}
                                            </select>
                                            <span class="text-danger" id="city_error"></span>
                                        </div>
                                      
                                        
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="container1">
                                                    
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="add_form_field">Add New Sessions &nbsp; 
                                                            <span style="font-size:16px; font-weight:bold;">+ </span>
                                                            </button>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <input type="time" class="mt-1" placeholder="Time Start" id="time_starts" name="time_start[]"/>
                                                        <span class="text-danger" id="time_start_error"></span>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <input type="time" class="mt-1" placeholder="Time End" name="time_end[]"/>
                                                        <span class="text-danger" id="time_end_error"></span>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <input type="date" class="mt-1" placeholder="Date" name="date[]"/>
                                                        <span class="text-danger" id="date_error"></span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>
                                                    
                                                
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-12 mt-3">
                                            <label>Amount of Coins</label>
                                            <input type="text" placeholder="Amount of Coins" name="amount">
                                            <span class="text-danger" id="amount_error"></span>
                                        </div>
                                        <div  class="col-md-12 mt-2">
                                            <button  class="main-btn" type="submit" id="post_training" data-ripple="">Post Trainings</button>
                                            <button class="main-btn3" type="submit" data-ripple="">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    

    

  
    
</div>



@stop

@section('page-styles')
<style type="text/css">
#training_province{
    display:block !important;
    background: #edf2f6 none repeat scroll 0 0;
    border-radius: 4px;
    font-size: 13px;
    height:50px;
    width: 100%;
    color: #535165;
    border: 1px solid #e4e4e4;
}
#training_cities {
    display:block !important;
    background: #edf2f6 none repeat scroll 0 0;
    border-radius: 4px;
    font-size: 13px;
    height:50px;
    width: 100%;
    color: #535165;
    border: 1px solid #e4e4e4;
}
#training_cities_chosen,#training_province_chosen {
    display:none !important
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
                $(wrapper).append('<div class="row"><div class="col-md-6 mt-2"><input type="time" class="mt-1" placeholder="Time Start" name="time_start[]"/></div><div class="col-md-6 mt-2"><input type="time" class="mt-1" placeholder="Time End" name="time_end[]"/></div><div class="col-md-6 mt-2"><input type="date" class="mt-1" placeholder="Date" name="date[]"/></div><a href="#" class="delete btn bg-danger mt-md-3" style="color: white;height: 41px; margin-left: 12px;"><i class="fa fa-trash"></i></a></div>'); //add input box
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


    img_primary_back.onchange = evt => {
  const [file] = img_primary_back.files
  if (file) {
    blah_primary_back.src = URL.createObjectURL(file)
  }
}
function onSubmit() {
    if (confirm('Are you sure you want to proceed?')) {
  // Save it!
  console.log('Thing was saved to the database.');
    } else {
      // Do nothing!
      console.log('Thing was not saved to the database.');
    }

}

    //submit form
$("form").on('submit',function(e){
    event.preventDefault();
    let form_data = $( this ).serialize();
    $.ajax({
            method:"POST",
            contentType: false,
            processData: false,   
            cache: false,
            // dataType:"json",
            data: new FormData(this),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:"{{ route("frontend.training.store") }}",
            beforeSend:function(){
                //code here
            },
            success:function(response){
                console.log(response)
                alert(response.message);
                window.location.href = "{{ route("frontend.training.index") }}";
            },
            error:function(error){
                console.log(error)
                if( error.status === 422 ) {
                        var errors = error.responseJSON.errors ;

        
                        console.log(errors)
                        $.each(errors, function (key, val) {
                            $("#" + key.replace(/[`~!@#$%^&*()|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '') + "_error").text(val[0]);
                        });
                    }
                
                }

            })
})

$(document).on('change','#training_province',function(){
   var id = $(this).val();
    $.post('address',{id:id},function(response){
        console.log(response.data)

    $("#training_cities").empty();
     $("#training_cities").append("<option value=''></option>");
    //  $('select.task_name_select').empty();
                    // $('select.task_name_select').removeAttr('disabled');
                    $.each(response.data, function(key, value){
                        console.log(value.citymun_desc)
                        $('#training_cities').css('display','block')
                        $('#training_cities').append(
                            '<option value="'+value.citymun_code+'">'+value.citymun_desc+'</option>'
                        );
                        $('.chosen-drop .chosen-results').append(
                            '<li class="active-result" >'+value.citymun_desc+'</li>'
                        );
                    });
    

    })
})
</script>
@stop