@extends('system._layouts.auth')

@section('content')
 <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0 justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-9">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100" >
                                    <div class="mb-4 mb-md-5 text-center" >
                                       {{--  <a href="index.html" class="d-block auth-logo">
                                            <img src="{{asset('logo.png')}}" alt="" height="28"> <span class="logo-txt"></span>
                                        </a> --}}
                                    </div>
                                    <div class="auth-content my-auto" style="background-color: white;padding: 30px;border-radius: 1%">
                                        <div class="text-center">
                                        	<img src="{{asset('logo.png')}}" alt="" height="50"> <span class="logo-txt"></span>
                                        </div>
                                        <form class="mt-4 pt-2" action="" method="POST">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="email" placeholder="Enter username">
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Password</label>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="">
                                                            {{-- <a href="auth-recoverpw.html" class="text-muted">Forgot password?</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                                        <label class="form-check-label" for="remember-check">
                                                            Remember me
                                                        </label>
                                                    </div>  
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                             <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Pazeball   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Developers</p>
                                    </div>
                                        </form>

                                       

                                   
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                   
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>
@stop
