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
													<a href="{{route('frontend.account_settings.update_profile')}}" class="nav-link"><i class="fa fa-gear"></i> Update Profile</a>
												</li>
<!-- 												
												<li class="nav-item">
													<a href="#" class="nav-link"><i class="fa fa-bell"></i> Notification</a>
												</li> -->
												<li class="nav-item">
													<a href="{{route('frontend.account_settings.transactions')}}" class="nav-link"><i class="fa fa-shield"></i> Transactions</a>
												</li>
												<li class="nav-item">
													<a href="{{route('frontend.account_settings.change_password')}}" class="nav-link active"><i class="fa fa-lock"></i> Change Password</a>
												</li>
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="gen-setting" >
													
													<div class="set-title" style="margin-left:-15px">
														<h5>Change Password</h5>
														<span>lorem iopsunm</span>
													</div>
												
													<div class="stg-form-area">
														<form method="post" class="c-form row">
															<div class="row">

																<div class="col-lg-12 col-md-12 col-sm-12 mb-3">
																	<label>Old Password</label>
																	<input class="mb-2" type="text" name="old_password" placeholder="Old Password" />
																	<span class="text-danger" id="old_password_error"></span>
																</div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
																	<label>New Password</label>
																	<input class="mb-2" type="text" name="new_password" placeholder="New Password" />
																	<span class="text-danger" id="new_password_error"></span>
																</div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
																	<label>Confirm New Password</label>
																	<input class="mb-2" type="text" name="confirm_new_password" placeholder="Confirm New Password" />
																	<span class="text-danger" id="confirm_new_password_error"></span>
																</div>
															
																<div class="col-lg-12">
																	<button type="submit" data-ripple="">Cancel</button>
																	<button type="submit" data-ripple="">Save</button>
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
@stop