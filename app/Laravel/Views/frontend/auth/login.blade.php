@extends('frontend._layouts.auth') @section('content')
<div class="www-layout">
    <section>
        <div class="gap no-gap signin whitish medium-opacity" style="background-color: transparent;">
            <div class="bg-image" style=" background-image:url({{asset('frontend/images/bg-orange-main.jpg')}}"></div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4">
                        <div class="we-login-register">
                            <div class="form-title">
                                <img src="{{asset('logo-white.png')}}">
{{--                                 <i class="fa fa-key"></i>login
 --}}                                <span>sign in now and meet the awesome Pazepro around the philippines.</span>
                            </div>
                            @include('frontend._components.notifications')
                            <form class="we-form" method="post">
                                {{ csrf_field() }}
                                <input type="text" name="email" placeholder="Email" />
                                <input type="password" name="password" placeholder="Password" />
                                <input type="checkbox" /><label>remember me</label>
                                <button type="submit" data-ripple="">sign in</button>
                                <a class="forgot underline" href="#" title="">forgot password?</a>
                            </form>
                            {{-- <a class="with-smedia facebook" href="login.html#" title="" data-ripple=""><i class="fa fa-facebook"></i></a>
                            <a class="with-smedia twitter" href="login.html#" title="" data-ripple=""><i class="fa fa-twitter"></i></a>
                            <a class="with-smedia instagram" href="login.html#" title="" data-ripple=""><i class="fa fa-instagram"></i></a>
                            <a class="with-smedia google" href="login.html#" title="" data-ripple=""><i class="fa fa-google-plus"></i></a> --}}
                            <span>don't have an account? <a class="we-account underline" href="{{route('frontend.auth.register')}}" title="">register now</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
