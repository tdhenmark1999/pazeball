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
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <div class="friend-name" style="width: 100% !important;">
                                                <div class="more">
                                                    <div class="more-post-optns">
                                                        <i class="ti-more-alt"></i>
                                                        <ul>
                                                            <li>
                                                                <a data-toggle="modal" data-target="#exampleModal"><i class="update-report" class="fa fa-edit"></i>Edit Post</a>
                                                            </li>
                                                            <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span><img title="Premium Video" style="width: auto; height: 30px;" src="{{asset('frontend/images/premium.png')}}" /> january,5 2010 19:PM </span>
                                            </div>

                                            <div class="post-meta">
                                                <video id="myvideo" width="100%" height="auto" controls>
                                                    <source src="{{asset('frontend/sample.mp4')}}" type="video/mp4" />
                                                </video>

                                                <div class="description">
                                                    <p>
                                                        Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc.
                                                    </p>
                                                </div>
                                                <div class="text-right mb-2">
                                                    <span> <a href="#" title="">24k</a> Views</span>
                                                </div>
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                                                        </li>
                                                        <li>
                                                            <span class="comment" title="Comments">
                                                                <i class="fa fa-commenting"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="users-thumb-list">
                                                        <a data-toggle="tooltip" title="Anderw" href="#">
                                                            <img alt="" src="{{asset('frontend/images/resources/userlist-1.jpg')}}" />
                                                        </a>
                                                        <a data-toggle="tooltip" title="frank" href="#">
                                                            <img alt="" src="{{asset('frontend/images/resources/userlist-2.jpg')}}" />
                                                        </a>
                                                        <a data-toggle="tooltip" title="Sara" href="#">
                                                            <img alt="" src="{{asset('frontend/images/resources/userlist-3.jpg')}}" />
                                                        </a>
                                                        <a data-toggle="tooltip" title="Amy" href="#">
                                                            <img alt="" src="{{asset('frontend/images/resources/userlist-4.jpg')}}" />
                                                        </a>
                                                        <a data-toggle="tooltip" title="Ema" href="#">
                                                            <img alt="" src="{{asset('frontend/images/resources/userlist-5.jpg')}}" />
                                                        </a>
                                                        <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coment-area" style="">
                                                <ul class="we-comet">
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('frontend/images/resources/nearly3.jpg')}}" alt="" />
                                                        </div>
                                                        <div class="we-comment">
                                                            <h5><a href="timeline.html" title="">Jason borne</a></h5>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                                            <div class="inline-itms">
                                                                <span>1 year ago</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('frontend/images/resources/comet-4.jpg')}}" alt="" />
                                                        </div>
                                                        <div class="we-comment">
                                                            <h5><a href="timeline.html" title="">Sophia</a></h5>
                                                            <p>
                                                                we are working for the dance and sing songs. this video is very awesome for the youngster.
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                            <div class="inline-itms">
                                                                <span>1 year ago</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more comments+</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="{{asset('frontend/images/resources/nearly1.jpg')}}" alt="" />
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>

                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- video post -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

    <!-- bottom bar -->
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="c-form">
                    <div>
                        <label>Type</label>
                        <select>
                            <option>Public</option>
                            <option>Premium</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label>Description</label>
                        <textarea placeholder="write someting about Post" rows="4"></textarea>
                    </div>
                    <div class="mt-3">
                        <button type="button" class="main-btn">Save changes</button>
                        <button type="button" class="main-btn3" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="popup">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Update Post</h5>
            </div>
            <div class="Rpt-meta">
                <form method="post" class="c-form">
                    <div>
                        <label>Type</label>
                        <select>
                            <option>Public</option>
                            <option>Premium</option>
                        </select>
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea placeholder="write someting about Post" rows="2"></textarea>
                    </div>
                    <div>
                        <button data-ripple="" type="submit" class="main-btn">Update</button>
                        <a class="main-btn3 btn1">Close</a>
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

@stop @section('page-scripts')
<script type="text/javascript"></script>
@stop
