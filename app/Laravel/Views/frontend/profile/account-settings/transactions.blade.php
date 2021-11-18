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
												
												<!-- <li class="nav-item">
													<a href="#" class="nav-link"><i class="fa fa-bell"></i> Notification</a>
												</li> -->
												<li class="nav-item">
													<a href="{{route('frontend.account_settings.transactions')}}" class="nav-link active"><i class="fa fa-shield"></i> Transactions</a>
												</li>
												<li class="nav-item">
													<a href="{{route('frontend.account_settings.change_password')}}" class="nav-link"><i class="fa fa-lock"></i> Change Password</a>
												</li>
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="gen-setting" >
													
													<div class="set-title" style="margin-left:-15px">
														<h5>Transactions</h5>
														<span>lorem iopsunm</span>
													</div>
												
													<div class="stg-form-area">
														<table class="overview table table-striped table-responsive">
															<thead>
																<th>Sample</th>
																<th>Sample</th>
																<th>Sample</th>
																<th>Sample</th>
															</thead>
															<tbody>
																<tr>
																	<td>Sample</td>
																	<td>Sample</td>
																	<td>Sample</td>
																	<td>Sample</td>
																</tr>
															</tbody>
														</table>
													</div>
													<ul class="pagination borderd mt-4">
                                       
													
														<li class="prev-pge">
															<a href="#" title=""><i class="fa fa-angle-left"></i></a>
														</li>
														<li><a href="#" title="" data-ripple="">1</a></li>
														<li><a href="#" title="" data-ripple="">2</a></li>
														<li><a class="active" href="#" title="" data-ripple="">3</a></li>
														<li class="dotzz">.....</li>
														<li><a href="#" title="" data-ripple="">10</a></li>
														<li class="next-pge">
															<a href="#" title=""><i class="fa fa-angle-right"></i></a>
														</li> 
													</ul>
													
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