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
                            <div class="col-lg-12">
                                <div class="central-meta">
                                    <div class="row merged5">
                                        <div class="col-lg-12">
                                            <div class="featurepost">
                                                <h5><i class="fa fa-fire"></i>Videos</h5>
                                            </div>
                                        </div>
                                        @forelse ($pazepro->trainings as $item)
                                        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
                                            <a href="{{route('frontend.pazepro.video_details',[$pazepro->uuid,$item->uuid])}}">
                                                <div class="item-box">
                                                    @if($item->is_premium == 'true')
                                                    <span>
                                                        <img title="Premium Video" style="width: auto; height: 30px; position: absolute;" src="{{asset('frontend/images/premium.png')}}" /> 
                                                    </span>
                                                    @endif
                                                    <video id="myvideo" width="100%" height="auto" controls="false">
                                                        <source src="{{  asset('uploads/videos/'.$item->filename)  }}" type="video/mp4" />
                                                    </video>
                                                    <div class="over-photo">
                                                        <a href="{{route('frontend.pazepro.video_details',[$pazepro->uuid,$item->uuid])}}" title=""><i class="fa fa-heart"></i> 0</a>
                                                        <span>0 Views</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        @empty
                                        <div class="col-md-12 text-center">
                                                <img src="{{asset('no-data-found.png')}}">
                                            </div>
                                        @endforelse
                                     
                                    </div>

                                    <div class="lodmore">
                                        <span>Viewing 1-15 of 47 Videos</span>
                                        <button class="btn-view btn-load-more"></button>
                                    </div>
                                </div>
                                <!-- photos -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</div>
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1" />
            <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notifications</span>
            <input type="checkbox" id="switch22" />
            <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notification sound</span>
            <input type="checkbox" id="switch33" />
            <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>My profile</span>
            <input type="checkbox" id="switch44" />
            <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show profile</span>
            <input type="checkbox" id="switch55" />
            <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>Sub users</span>
            <input type="checkbox" id="switch66" />
            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>personal account</span>
            <input type="checkbox" id="switch77" />
            <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Business account</span>
            <input type="checkbox" id="switch88" />
            <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show me online</span>
            <input type="checkbox" id="switch99" />
            <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Delete history</span>
            <input type="checkbox" id="switch101" />
            <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Expose author name</span>
            <input type="checkbox" id="switch111" />
            <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
</div>
<!-- side panel -->

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
                        <a href="about.html#" data-ripple="" class="main-btn3 cancel">Close</a>
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
    /* video {
  pointer-events: none;
} */
</style>
<style>
    video::-webkit-media-controls {
        display: none !important;
    }
</style>
@stop @section('page-scripts')
<script type="text/javascript"></script>
@stop
