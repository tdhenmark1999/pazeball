@extends('system._layouts.main') @section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                          
                            <div class="col-lg-12 d-flex flex-row">
                                <div style="margin-right: 10px">
                                <img title="Premium Video" style="width: auto;height: auto" src="{{asset('frontend/images/premium.png')}}">
                                </div>
                                <div>
                                 <h4 class="card-title">Details of Application</h4>
                            <p class="card-title-desc">
                               lorem ipsum dummy text
                            </p>
                        </div>
                            </div>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="" style="border-radius: 10px" width="auto" height="auto" src="{{asset('backoffice/images/users/avatar-1.jpg')}}"alt="Header Avatar">
                                </div>
                                <div class="col-lg-9">
                                    {{-- <i class="fas fa-female"></i> --}}
                                     <h4 class="text-uppercase" style="margin-bottom: 15px"><a href="#" class="custom-text"><i class="fas fa-file-word" style="margin-right: 10px"></i></a>{{ $info->first_name . " " . $info->last_name }}, <i class=" fas fa-male"></i> 22</h4>
                                     <hr>
                                        <div class="row mb-2 mt-2">
                                         <div class="col-lg-3">
                                            <a href="#" class="custom-text">
                                                <i class="far fa-image"></i>
                                                <span class="text-color--orange">Primary ID Front</span>
                                            </a>
                                        </div>
                                            <div class="col-lg-3">
                                                <a href="#" class="custom-text">
                                            <i class="far fa-image"></i>
                                            <span class="text-color--orange">Primary ID Back</span>
                                        </a>
                                        </div>
                                             <div class="col-lg-3">
                                                <a href="#" class="custom-text">
                                            <i class="far fa-image"></i>
                                            <span class="text-color--orange">Secondary ID Front</span>
                                        </a>
                                        </div>
                                            <div class="col-lg-3">
                                                <a href="#" class="custom-text">
                                            <i class="far fa-image"></i>
                                            <span class="text-color--orange">Secondary ID Back</span>
                                        </a>
                                        </div>
                                    </div>
                                    <p class="text-justify">
                                     {{ $info->about }}  
                                    </p>
                                   
                                    <div class="row">
                                 
                                            {{-- <div class="col-lg-4">
                                             <a href="#" class="custom-text">
                                            <img src="{{asset('frontend/images/marker.png')}}">
                                            <span class="text-color--orange">Certified Basketball Player of all time</span>
                                            <p class="ml-4">Pasay City, Philippines 2018</p>
                                        </a>
                                        </div> --}}
                                            {{-- <div class="col-lg-4">
                                           <a href="#" class="custom-text">
                                            <img src="{{asset('frontend/images/marker.png')}}">
                                            <span class="text-color--orange">Certified Basketball Player of all time</span>
                                            <p class="ml-4">Pasay City, Philippines 2018</p>
                                        </a>
                                        </div> --}}
                                        @forelse ($info->certificates as $certificate)
                                                      
                                     <div class="col-lg-4">
                                        <a href="#" class="custom-text">
                                            <img src="{{asset('frontend/images/marker.png')}}">
                                            <span class="text-color--orange">{{ $certificate->title }}</span>
                                            <p class="ml-4">{{ $certificate->city." ".$certificate->country.", ".$certificate->year }}</p>
                                        </a>
                                        </div>
                                        @empty
                                                      
                                     <div class="col-lg-4">
                                        <a href="#" class="custom-text">
                                            <img src="{{asset('frontend/images/marker.png')}}">
                                            <span class="text-color--orange">Certified Basketball Player of all time</span>
                                            <p class="ml-4">Pasay City, Philippines 2018</p>
                                        </a>
                                        </div>
                                        @endforelse
                                        <div class="col-lg-12 mt-3">
                                            <div class="justify-content-end d-flex">
                                                 <a type="button" href="{{ route('system.become_pazepro.update',[$info->uuid]) }}" class="btn btn-primary">Promote to Pazepro</a>
                                            <button class="btn btn-secondary" style="margin-left: 5px">Cancel</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>

@stop @section('page-scripts')


<script src="{{asset('backoffice/js/app.js')}}"></script>
@stop
