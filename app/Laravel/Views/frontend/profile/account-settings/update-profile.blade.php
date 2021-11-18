@extends('frontend._layouts.main')

@section('content')
    

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
									<div class="about">
										<div class="d-flex flex-row mt-2">
											<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
												<li class="nav-item">
													<a href="{{route('frontend.account_settings.update_profile')}}" class="nav-link active"><i class="fa fa-gear"></i> Update Profile</a>
												</li>
												
												<!-- <li class="nav-item">
													<a href="#" class="nav-link"><i class="fa fa-bell"></i> Notification</a>
												</li> -->
												<li class="nav-item">
													<a href="{{route('frontend.account_settings.transactions')}}" class="nav-link"><i class="fa fa-shield"></i> Transactions</a>
												</li>
												<li class="nav-item">
													<a href="{{route('frontend.account_settings.change_password')}}" class="nav-link"><i class="fa fa-lock"></i> Change Password</a>
												</li>
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="gen-setting" >
													
													<div class="set-title" style="margin-left:-15px">
														<h5>Edit Profile</h5>
														<span>Instruction Letter about this page</span>
													</div>
												
													<div class="stg-form-area">
														<form method="POST" class="c-form row" enctype='multipart/form-data'>
														{{ csrf_field() }}
															<div class="row">
																<div class="col-lg-12 mb-3">
																<img id="blah_banner" src="{{asset('uploads/images/'.$profile_info->file_name_banner)}}" style="width: auto; height: 300px;" alt="" />
																	<label>Banner</label>
																	<input type="file" accept="image/png, image/gif, image/jpeg" name="file_banner" placeholder="file" id="img_banner">
																</div>
																<div class="col-lg-12 mb-3">
																<img id="blah_avatar" src="{{asset('uploads/images/'.$profile_info->file_name)}}" style="width: auto; height: 300px;" alt="" />
																	<label>Avatar</label>
																	<input type="file" accept="image/png, image/gif, image/jpeg" name="file" id="img_avatar">
																</div>
																<div class="col-lg-6 mb-3">
																	<label>Birthdate </label> 
																	<input type="text" value="{{ old('birth_date',$profile_info->birth_date) }}" disabled>
																</div>
																<div class="col-lg-6 mb-3">
																	<label>Email Address</label>
																	<input type="type" value="{{ old('email',$profile_info->email) }}" disabled placeholder="">
																</div>
																<div class="col-lg-12 col-md-12 col-sm-12 mb-3">
																	<label>Sports</label>
																	<select class="mb-2" name="sport" id="sports" multiple="">
																		<option disabled selected >Select sport</option>
																	</select>
																</div>
																<div class="col-lg-12 mb-3">
																	<label>Gender</label>
																	<div class="form-radio">
																		@if($profile_info->gender == 'male')
																		<div class="radio">
																			<label>
																			<input disabled type="radio" checked="checked"><i class="check-box"></i>Male
																			</label>
																		</div>
																		<div class="radio">
																			<label>
																			<input disabled type="radio"><i class="check-box"></i>Female
																			</label>
																		</div>
																		@endif
																		@if($profile_info->gender == 'female')
																		<div class="radio">
																			<label>
																			<input disabled type="radio"><i class="check-box"></i>Male
																			</label>
																		</div>
																		<div class="radio">
																			<label>
																			<input disabled type="radio"  checked="checked"><i class="check-box"></i>Female
																			</label>
																		</div>
																		@endif
																
																	</div>
																</div>
																<div class="col-lg-12">
																	<label>about your profile</label>
																	<textarea name="about" rows="3" placeholder="write someting about yourself">{{ old('about',$profile_info->about) }}</textarea>
																</div>	
																		
															
																<div class="col-md-12 mt-2">  
																	<label>Address</label>
																	<input type="text" name="address" value="{{ old('address',$profile_info->address) }}" placeholder="Insert address">
																	<span class="text-danger" id="address_error"></span>
																</div>
																<div class="col-md-6 mt-2">  
																	<label>Barangay</label>
																
																	<input type="text" value="{{ old('barangay',$profile_info->barangay) }}" placeholder="Insert barangay" name="barangay">
																	<span class="text-danger" id="barangay_error"></span>
																</div>
																<div class="col-md-6 mt-2">  
																	<label>Province</label>
																	<select name="province"  id="training_province">
																		<option selected disabled>Select Province</option>
																		@foreach ($provinces as $province)
																		<option selected="{{$profile_info->province}}" value="{{ $province->prov_code }}">{{ $province->prov_desc }}</option>
																		@endforeach
																	</select>
																	<span class="text-danger" id="province_error"></span>
																</div>
																<div class="col-md-6 mt-2" >  
																	<label>City</label>
																	<select class="form-control" name="city" id="training_cities">
																		<option selected disabled>Select City</option>
																		@foreach ($cities as $city)
																			<option selected="{{$profile_info->city}}" value="{{ $city->citymun_code }}">{{ $city->citymun_desc }}</option>
																		@endforeach 
																	</select>
																	<span class="text-danger" id="city_error"></span>
																</div>
																
																<div class="col-lg-6 col-md-6 col-sm-12 mb-3 mt-2">
																	<label>Zipcode</label>
																	<input class="mb-2" value="{{ old('zip_code',$profile_info->zip_code) }}" type="text" name="zip_code" placeholder="Zipcode" "/>
																</div>
														
																<div class="col-lg-12">
																	<button type="button">Cancel</button>
																	<button type="submit">Save</button>
																</div>
															</div>
														</form>
													</div>
													
												</div><!-- general setting -->
												
												
											
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
							
</div>
</div>
</div>
</div>
</div>
</section>
</div>
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
#training_cities_chosen {
    display:none !important
}
</style>

@stop 
@section('page-scripts')
<script type="text/javascript">

    img_banner.onchange = evt => {
      const [file] = img_banner.files
      if (file) {
        blah_banner.src = URL.createObjectURL(file)
      }
    }


	img_avatar.onchange = evt => {
      const [file] = img_avatar.files
      if (file) {
        blah_avatar.src = URL.createObjectURL(file)
      }
    }
	

</script>
<script>
	

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