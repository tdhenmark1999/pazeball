@extends('frontend._layouts.main') @section('content')
 @include('frontend._components.header')
<section>
    <p>Please wait while we redirect you to payment gateway.</p>

    <form id='autosubmit' action='{{ $url }}' method='POST'>

        <div>
            <input type='hidden' class="form-control" name='PaymentId' value="{{ $payment_id }}">
            <input type='hidden' class="form-control" name='MerchantCode' value="{{ $merchant_code }}">
            <input type='hidden' class="form-control" name='RefNo' value="{{ $refno }}">
            <input type='hidden' class="form-control" name='FirstPaymentDate' value="{{ $first_payment_date }}">
            <input type='hidden' class="form-control" name='Currency' value="{{ $currency }}">
            <input type='hidden' class="form-control" name='Amount' value="{{ $amount }}">
            <input type='hidden' class="form-control" name='NumberofPayments' value="{{ $number_of_payment }}">
            <input type='hidden' class="form-control" name='Frequency' value="{{ $frequency }}">
            <input type='hidden' class="form-control" name='Desc' value="{{ $description }}">
            <input type='hidden' class="form-control" name='CC_Ic' value="{{ $CC_Ic }}">
            <input type='hidden' class="form-control" name='CC_Email' value="{{ $CC_Email }}">
            <input type='hidden' class="form-control" name='CC_Phone' value="{{ $CC_Phone }}">
            <input type='hidden' class="form-control" name='P_Name' value="{{ $P_Name }}">
            <input type='hidden' class="form-control" name='P_Email' value="{{ $P_Email }}">
            <input type='hidden' class="form-control" name='P_Phone' value="{{ $P_Phone }}">
            <input type='hidden' class="form-control" name='P_Addrl1' value="{{ $P_Addrl1 }}">
            <input type='hidden' class="form-control" name='P_Addrl2' value="{{ $P_Addrl2 }}">
            <input type='hidden' class="form-control" name='P_City' value="{{ $P_City }}">
            <input type='hidden' class="form-control" name='P_State' value="{{ $P_State }}">
            <input type='hidden' class="form-control" name='P_Zip' value="{{ $P_Zip }}">
            <input type='hidden' class="form-control" name='P_Country' value="{{ $P_Country }}">
            <input type='hidden' class="form-control" name='SignatureType' value="">
            <input type='hidden' class="form-control" name='Signature' value="{{ $Signature }}">
            <input type='hidden' class="form-control" name='ResponseURL' value="{{ route('frontend.wallet.ipay88_recurring_response') }}">
            <input type='hidden' class="form-control" name='BackendURL' value="{{ route('frontend.wallet.ipay88_recurring_backend_url') }}">
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
