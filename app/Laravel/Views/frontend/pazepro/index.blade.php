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
                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <div class="title-block">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="align-left">
                                                    <h5>Pazepro <span>44</span></h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row merged20">
                                                    <div class="col-lg-7 col-lg-7 col-sm-7">
                                                        <form method="post">
                                                            <input type="text" placeholder="Search Pazepro" />
                                                            <button type="submit"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                                        <div class="select-options">
                                                            <select class="select form-control" wtyle="width:100%">
                                                                <option selected disabled>Sort by</option>
                                                                <option>A to Z</option>
                                                                <option>See All</option>
                                                                <option>Newest</option>
                                                                <option>oldest</option>
                                                                <option>Premium</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- title block -->
                                <div class="central-meta padding30">
                                    <div class="row">
                                        @if (count($paze_pros)) @forelse($paze_pros as $pazer)

                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="friend-box">
                                                <figure>
                                                    @if($pazer->file_name_banner == null)
                                                    <img src="{{asset('placeholder/banner.png')}}" alt="" />
                                                    @endif
                                                    @if($pazer->file_name_banner != null)
                                                    <img src="{{ asset('uploads/images/'.$pazer->file_name_banner ) }}" alt="" />
                                                    @endif
                                                    <!-- <img src="{{asset('frontend/images/resources/frnd-cover1.jpg')}}" alt="" /> -->
                                                    @if($pazer->is_premium == 'true')
                                                    <span><img style="height: 34px; width: 29px;" title="Premium Video" style="" src="{{asset('frontend/images/premium.png')}}" /></span>
                                                    @endif
                                                </figure>
                                                <div class="frnd-meta">
                                                    @if($pazer->file_name == null)
                                                    <img src="{{asset('placeholder/avatar.png')}}" style="height:100px;width:100px" alt="" />
                                                    @endif
                                                    @if($pazer->file_name != null)
                                                    <img src="{{ asset('uploads/images/'.$pazer->file_name ) }}" alt="" />
                                                    @endif                                                    
                                                    <div class="frnd-name">
                                                        <a href="{{route('frontend.pazepro.about',[$pazer->uuid])}}" title="Details">{{ $pazer->first_name ." ". $pazer->last_name }}</a>
                                                        <span>California, USA</span>
                                                    </div>
                                                    <ul class="frnd-info">
                                                        <li><span>Certificates:</span>{{ count($pazer->certificates) }}</li>
                                                        <li><span>Videos:</span> {{ count($pazer->videos) }}</li>
                                                        <li><span>Trainings:</span> 144</li>
                                                        <li><span>Booked:</span> 250</li>
                                                        <li><span>Since:</span> December, 2014</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                            <div class="col-md-12 text-center">
                                                <img src="{{asset('no-data-found.png')}}">
                                            </div>
                                            
                                        @endforelse @endif {{--
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="friend-box">
                                                <figure>
                                                    <img src="{{asset('frontend/images/resources/frnd-cover2.jpg')}}" alt="" />
                                                    <span>Ratings: 4.0</span>
                                                </figure>
                                                <div class="frnd-meta">
                                                    <img src="{{asset('frontend/images/resources/frnd-figure2.jpg')}}" alt="" />
                                                    <div class="frnd-name">
                                                        <a href="{{route('frontend.pazepro.about')}}" title="Details">Andrew</a>
                                                        <span>Tornoto, Canada</span>
                                                    </div>
                                                    <ul class="frnd-info">
                                                        <li><span>Certificates:</span> 223</li>
                                                        <li><span>Videos:</span> 240</li>
                                                        <li><span>Trainings:</span> 144</li>
                                                        <li><span>Booked:</span> 250</li>
                                                        <li><span>Since:</span> December, 2014</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        --}} {{--
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="friend-box">
                                                <figure>
                                                    <img src="{{asset('frontend/images/resources/frnd-cover3.jpg')}}" alt="" />
                                                    <span>Ratings: 5.0</span>
                                                </figure>
                                                <div class="frnd-meta">
                                                    <img src="{{asset('frontend/images/resources/frnd-figure3.jpg')}}" alt="" />
                                                    <div class="frnd-name">
                                                        <a href="{{route('frontend.pazepro.about')}}" title="Details">Arnold</a>
                                                        <span>Istanbul, Turky</span>
                                                    </div>
                                                    <ul class="frnd-info">
                                                        <li><span>Certificates:</span> 223</li>
                                                        <li><span>Videos:</span> 240</li>
                                                        <li><span>Trainings:</span> 144</li>
                                                        <li><span>Booked:</span> 250</li>
                                                        <li><span>Since:</span> December, 2014</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        --}} {{--
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="friend-box">
                                                <figure>
                                                    <img src="{{asset('frontend/images/resources/frnd-cover4.jpg')}}" alt="" />
                                                    <span>Ratings: 5.0</span>
                                                </figure>
                                                <div class="frnd-meta">
                                                    <img src="{{asset('frontend/images/resources/frnd-figure4.jpg')}}" alt="" />
                                                    <div class="frnd-name">
                                                        <a href="{{route('frontend.pazepro.about')}}" title="Details">Ella John</a>
                                                        <span>Maxico city, USA</span>
                                                    </div>
                                                    <ul class="frnd-info">
                                                        <li><span>Certificates:</span> 223</li>
                                                        <li><span>Videos:</span> 240</li>
                                                        <li><span>Trainings:</span> 144</li>
                                                        <li><span>Booked:</span> 250</li>
                                                        <li><span>Since:</span> December, 2014</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        --}}
                                    </div>
                                    <div class="lodmore">
                                        <span>Viewing 1-8 of 44 friends</span>
                                        <button class="btn-view btn-load-more"></button>
                                    </div>
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

<div class="popup-wraper3">
    <div class="popup">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Report Post</h5>
            </div>
            <div class="Rpt-meta">
                <span>We're sorry something's wrong. How can we help?</span>
                <form method="post" class="c-form">
                    <div class="form-radio">
                        <div class="radio">
                            <label> <input type="radio" name="radio" checked="checked" /><i class="check-box"></i>It's spam or abuse </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>It breaks r/technology's rules </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Not Related </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Other issues </label>
                        </div>
                    </div>
                    <div>
                        <label>Write about Report</label>
                        <textarea placeholder="write someting about Post" rows="2"></textarea>
                    </div>
                    <div>
                        <button data-ripple="" type="submit" class="main-btn">Submit</button>
                        <a href="timeline-friends.html#" data-ripple="" class="main-btn3 cancel">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- report popup -->

@stop @section('page-styles')
<style type="text/css">
    .frnd-info > li span {
        width: 90px;
    }
</style>
@stop @section('page-scripts')
<script type="text/javascript"></script>
@stop
