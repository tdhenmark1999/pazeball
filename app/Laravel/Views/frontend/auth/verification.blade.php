@extends('frontend._layouts.verification') 
@section('content')
<div class="container">
      <h2>Verify Your Account</h2>
      <p>We send you the six digit code to mobile number <br/> Enter the code below to confirm your mobile number.</p>
      <div class="code-container">
        <input type="number" class="code" id="first" placeholder="0" min="0" max="9" required>
        <input type="number" class="code" id="second"  placeholder="0" min="0" max="9" required>
        <input type="number" class="code" id="third" placeholder="0" min="0" max="9" required>
        <input type="number" class="code" id="fourth" placeholder="0" min="0" max="9" required>
        <input type="number" class="code" id="fifth" placeholder="0" min="0" max="9" required>
        <input type="number" class="code" id="six" placeholder="0" min="0" max="9" required>
        <input type="hidden" name="" id="url" value="{{ route('frontend.auth.send_confirmation') }}">
      </div>
      <small class="info">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore rem quidem provident, enim! Fugit, libero.
      </small>
    </div>
@stop


