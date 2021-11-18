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
                                @include('frontend.pazepro.cover')
                                <!-- user profile banner  -->

                                <div class="col-lg-12">
                                    <div class="central-meta">
                                        <span class="create-post">List of Reviews</span>
                                        @forelse ($reviews as $review)
                                        <div class="row mb-4">
                                            <div class="col-lg-1 col-md-2 text-center"> 
                                            @if(Helper::avatar($review->review_by) == null)
                                            <img  style="height: 70px; width: auto; border-radius: 50%;" src="{{asset('placeholder/avatar.png')}}" alt="" />
                                            @endif
                                            @if(Helper::avatar($review->review_by) != null)
                                            <img  style="height: 70px; width: auto; border-radius: 50%;" src="{{asset('uploads/images/'.Helper::avatar($review->review_by))}}"alt="" />
                                            @endif
                                                <!-- <img alt="avatar" style="height: 70px; width: auto; border-radius: 50%;" src="{{asset('uploads/images/'.Helper::avatar($review->review_by))}}" /> -->
                                            </div> 
                                            <div class="col-lg-7 col-md-7 mt-2 text-justify">
                                                <span style="font-size:14px;" class="oswald-500">{{ Helper::get_user($review->review_by) }}</span>
                                                <p>
                                                    {{$review->description}}
                                                    
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-md-3">
                                                <ol class="pit-rate text-right">
                                                    @if($review->rate == 0)
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><span class="oswald-500" style="color: #333; font-size: 15px; margin-left: 10px;">0/5</span></li>
                                                    @endif
                                                    @if($review->rate == 1)
                                                        <li  class="rated"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><span class="oswald-500" style="color: #333; font-size: 15px; margin-left: 10px;">1/5</span></li>
                                                    @endif
                                                    @if($review->rate == 2)
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><span class="oswald-500" style="color: #333; font-size: 15px; margin-left: 10px;">2/5</span></li>
                                                    @endif
                                                    @if($review->rate == 3)
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><span class="oswald-500" style="color: #333; font-size: 15px; margin-left: 10px;">3/5</span></li>
                                                    @endif
                                                    @if($review->rate == 4)
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><span class="oswald-500" style="color: #333; font-size: 15px; margin-left: 10px;">4/5</span></li>
                                                    @endif
                                                    @if($review->rate == 5)
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li class="rated"><i class="fa fa-star"></i></li>
                                                        <li><span class="oswald-500" style="color: #333; font-size: 15px; margin-left: 10px;">5/5</span></li>
                                                    @endif
                                                    
                                                </ol>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="row">
                                        <div class="col-md-12 text-center">
                                                <img src="{{asset('no-data-found.png')}}">
                                            </div>
                                        </div>
                                         @endforelse
                                        <form method="POST">
                                        {{ csrf_field() }}
                                            <div class="row">
                                            
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-5" style="margin-top: 15px;">
                                                            <label class="oswald-500">
                                                                Write your Reviews
                                                            </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rate" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rate" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rate" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rate" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rate" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                                </div>
                                                <div class="col-md-12 mt-2 text-right">
                                                    <button id="proceed" class="btn bg-primary text-white oswald-400">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </section>
    <!-- content -->
</div>



@stop @section('page-styles')
<style type="text/css">
    .frnd-info > li span {
        width: 90px;
    }
    .rate {
    float: left;
    height: 46px;
    
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:25px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
.rate {
    border-top: none !important;
    display: inline-block;
    padding-top: 0px;
    width: 100%;
}
</style>
@stop 
@section('page-scripts')
<script type="text/javascript">

$('#proceed').on('click',function(event){
    event.preventDefault()
        Swal.fire({
        title: 'Confirmation',
        text: "Are you sure you want to proceed?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Proceed'
        }).then((result) => {
        if (result.isConfirmed) {
            $('form').submit()
        }
        })
})
    
    function goBack() {
      window.history.back();
    }
</script>
@stop