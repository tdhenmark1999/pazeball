@extends('frontend._layouts.main') @section('content')
 @include('frontend._components.header')
<section>
    <p>Please wait while we redirect you to payment gateway.</p>

    <form id='autosubmit' action='{{ $url }}' method='POST'>
    
        <div
            ><input type='hidden' class="form-control" name='MerchantCode' value="{{ $merchant_code }}">
        </div>
        <div
            >
            <input type='hidden' class="form-control" name='PaymentId' value="">
        </div>
        <div
            ><input type='hidden' class="form-control" name='RefNo' value="{{ $refno }}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='Amount' value="{{ $amount }}">
        </div>
        <div
        >
    
    </div>
        <div
            ><input type='hidden' class="form-control" name='Currency' value="{{ $currency }}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='ProdDesc' value="Cash in">
        </div>
        <div
            ><input type='hidden' class="form-control" name='UserName' value="{{ $name }}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='UserEmail' value="{{ $email }}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='UserContact' value="{{ $contact }}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='Remark' value="{{ $remarks }}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='Lang' value="">
        </div>
        <div>
            <input type='hidden' class="form-control" name='SignatureType' value="SHA1">
        </div>
        <div
            ><input type='hidden' class="form-control" name='Signature' value="{{$signature}}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='ResponseURL' value="{{ route('frontend.wallet.callback_url') }}">
        </div>
        <div
            ><input type='hidden' class="form-control" name='BackendURL' value="{{ route('frontend.wallet.callback_url') }}">
        </div>
        {{-- <button type="submit">submit</button>s --}}
    </form>
    
  
       
  
</section>

@stop 

@section('page-styles')
<style type="text/css">
    .boost-box > a {
box-shadow: 0 1px 3px rgb(0 0 0 / 20%) !important;
background-color: white !important;
    }
    .total-balance--layout {
        background-color: white;box-shadow: 0 1px 3px rgb(0 0 0 / 20%) !important;border-radius: 6px
    }
</style>
@stop 

@section('page-scripts')
<script type="text/javascript">

window.onload = function(){
            document.getElementById('autosubmit').submit();
        };
    function onSubmit() {
        if (confirm("Are you sure you want to proceed?")) {
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
</script>
@stop
