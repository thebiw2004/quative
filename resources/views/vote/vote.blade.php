@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="css/_vote-detail.css">
@endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}" />


<link href="{{ asset('css/_vote-detail.css') }}" rel="stylesheet">
<div class="bd-example">
    <div id="carouselExampleCaptions3" class="carousel slide" data-ride="pause">

        <div class="carousel-inner">
            <div class="carousel-item active">
               
                <a href="">
                    <img src="../photo/bg-vote.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption1 d-none d-md-block">
                    {{-- <a href="/votedetail" class="site-link"></a> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-left">
                                <div class="site-header">
                                    <h1 class="_hilight mt-5">ผลงานของนักออกแบบ</h1>
                                    <p style="color:black;">รวบรวมผลงานของนักออกแบบบรรจุภัณฑ์ที่สร้างสรรค์ผลงาน <br>
                                        บรรจุภัณฑ์ในรูปแบบต่างๆผ่านทางเว็บไซต์ Quative</p>
                                </div>
                                <div class="site-below">
                                    {{-- <h1 class="_hilight float-left mt-5">ผลงานที่ได้รับการโหวตมากที่สุด</h1>
                                    <p>รวบรวมผลงานของนักออกแบบบรรจุภัณฑ์ที่สร้างสรรค์ผลงาน <br>
                                        บรรจุภัณฑ์ในรูปแบบต่างๆผ่านทางเว็บไซต์ Quative</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="container">

    <div class="form-row mt-5">
        {{-- select-mobile  --}}
        <div class=" selecter d-lg-none">
          <div class="row">
              <div class="form-group col-12 col-md-9">
                <ul class="overflow-select nav nav-select nav-pills mt-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        
                      <a class="nav-link-1 border bg-white rounded m-2 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ทั้งหมด</a>
                    </li>
                    <li class="nav-item border bg-white rounded m-2">
                      <a class="nav-link-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">กล่อง</a>
                    </li>
                    <li class="nav-item border bg-white m-2 rounded">
                      <a class="nav-link-1" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">ขวด</a>
                    </li>
                    <li class="nav-item border bg-white m-2 rounded">
                        <a class="nav-link-1" id="pills-glass-tab" data-toggle="pill" href="#pills-glass" role="tab" aria-controls="pills-glass" aria-selected="false">แก้ว</a>
                      </li>
                      <li class="nav-item border bg-white m-2 rounded">
                        <a class="nav-link-1" id="pills-bag-tab" data-toggle="pill" href="#pills-bag" role="tab" aria-controls="pills-bag" aria-selected="false">ถุง</a>
                      </li>
                      <li class="nav-item border bg-white m-2 rounded">
                        <a class="nav-link-1" id="pills-can-tab" data-toggle="pill" href="#pills-can" role="tab" aria-controls="pills-can" aria-selected="false">กระป๋อง</a>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
        <div class="form-group col-md-9 col-lg-12 d-none d-lg-block">
            <ul class="nav nav-pills mt-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link-1 border bg-white rounded m-2 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ทั้งหมด</a>
                </li>
                <li class="nav-item border bg-white rounded m-2">
                  <a class="nav-link-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">กล่อง</a>
                </li>
                <li class="nav-item border bg-white m-2 rounded">
                  <a class="nav-link-1" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">ขวด</a>
                </li>
                <li class="nav-item border bg-white m-2 rounded">
                    <a class="nav-link-1" id="pills-glass-tab" data-toggle="pill" href="#pills-glass" role="tab" aria-controls="pills-glass" aria-selected="false">แก้ว</a>
                  </li>
                  <li class="nav-item border bg-white m-2 rounded">
                    <a class="nav-link-1" id="pills-bag-tab" data-toggle="pill" href="#pills-bag" role="tab" aria-controls="pills-bag" aria-selected="false">ถุง</a>
                  </li>
                  <li class="nav-item border bg-white m-2 rounded">
                    <a class="nav-link-1" id="pills-can-tab" data-toggle="pill" href="#pills-can" role="tab" aria-controls="pills-can" aria-selected="false">กระป๋อง</a>
                  </li>
              </ul>

        </div>

       
    </div>
    <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <div class="row">
            
                        @if($jobs->count() == 0)
                        <article class="col-12 mt-5">
                            <div class="row">
                                <p class="mx-auto text-secondary" style="opacity:0.5;"> ไม่มีผลงาน</p>
                            </div>
                        </article>
                        @elseif($jobs->count())

                            @foreach($jobs as $job)

                                @php
                                    $designerid = \App\Designer::find($job->designer_id);

                                    $jobfilee = DB::table('jobfiles')->where('job_id',$job->id)->first();

                                    // foreach ($jobs as $job){
            // $object->title 
                                        $jobtags = json_decode($job->tags,true);


                                    // }

                                @endphp

                                <article class="col-12 col-md-6 col-lg-4 mt-5">
                                    <div class="card shadow-sm" data-id="{{ $job->id }}">

                                    <a href="{{ route('galleryDetail', $job->id) }}">
                                        <img class="card-img-top" src="/{{$jobfilee->fileimgname}}"  alt="..." style="height: 267px;">
                                    </a>

                                        <div class="card-body" style="width:auto;">
                                            <div class="text-left position-absolute">
                                                <div class="row pl-3">
                                                    <a style="text-decoration:none;" href="{{route('startjob.show',$designerid->token)}}">

                                                        <p class="font-weight-bold over-wrap d-none d-md-block text-truncate wraptext-md">ออกแบบโดย
                                                            {{$designerid->name}}
                                                        </p>
                                                        <small class="font-weight-bold over-wrap d-md-none  text-truncate wraptext-md">ออกแบบโดย
                                                            {{$designerid->name}}
                                                        </small>
                                                        </a>
                                                </div>

                                            {{-- @foreach($job->tags as $tagn)


                                                <p>
                                                    {{$tagname}},
                                                </p>

                                            @endforeach --}}
                                            <div class="row pl-3">
                                                <span class="d-inline-block text-truncate wraptext-md">
                                            @foreach ($jobtags as $jobt)
                                                @php

                                                $tagname = \App\Tags::find($jobt)->tagName;

                                                @endphp
                                               
                                                    {{$tagname}},
                                               

                                            @endforeach 
                                                </span>
                                            </div>
                                
                                        <div class="row pl-3 color-grey">
                                                <span>
                                                    <i class="fas fa-heart"></i>
                                                    {{$job->favorite_to_users->count()}}
                                                </span>
                                                <span class="pl-3">
                                                    <i class="far fa-eye"></i>
                                                    {{$job->view_count}}
                                                </span>





                                        </div>



                                        </div>
                                        <h4><a href="#" title="Nature Portfolio">{{ $job->title }}</a></h4>
                                        <span class="pull-right">

                                                @guest

                                                <a href="javascript:void(0);" >
                                                <button onclick="toastr.info('คุณต้องทำการ สมัครสมาชิกหรือเข้าสู่ระบบก่อน จึงสามารถกดถูกใจได้.','ข้อมูล',{
                                                    closeButton:true,
                                                    progressBar: true,
                                                })" class="love btn btn-light text-center rounded float-right border">
                                                    <i class="fas fa-heart"></i>
                                                    {{-- {{$job->favorite_to_users->count()}}                                 --}}
                                                </button>
                                                </a>

                                                @else
                                                <a href="javascript:void(0);" >
                                                    <button onclick="document.getElementById('vote-form-{{$job->id}}').submit();" class="love text-center rounded float-right border {{ !Auth::user()->favorite_jobs->where('pivot.jobs_id',$job->id)->count() == 0 ?'favorite_jobs' : ''}}">
                                                        <i class="fas fa-heart"></i>

                                                        {{-- {{$job->favorite_to_users->count()}}   --}}
                                                    </button>
                                                </a>
                                                    <form id="vote-form-{{$job->id}}" method="POST" action="{{route('job.vote',$job->id)}}"
                                                        style="display:none;">
                                                    @csrf
                                                    </form>

                                                @endguest
                                                {{-- <i id="like{{$job->id}}" class="far fa-heart{{ auth()->user()->isFavorited($job) ? 'like-post' : '' }}"></i>
                                                <div id="like{{$job->id}}-bs3">{{ $job->favoritesCount }}</div> --}}
                                        </span>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    @endif
                </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="row">
            
            @if($jobbox->count() == 0)
                                <article class="col-12 mt-5">
                                    <div class="row">
                                        <p class="mx-auto text-secondary" style="opacity:0.5;"> ไม่มีผลงาน</p>
                                    </div>
                                </article>
            @elseif($jobbox->count())

                @foreach($jobbox as $jobboxs)

                    @php
                        $designerid = \App\Designer::find($jobboxs->designer_id);

                        $jobfilee = DB::table('jobfiles')->where('job_id',$jobboxs->id)->first();
                        // foreach ($jobbox as $jobbo){
                        $jobtagsjobbo = json_decode($jobboxs->tags,true);


                    // }

                    @endphp

                    <article class="col-12 col-md-4 mt-5">
                        <div class="card shadow-sm" data-id="{{ $jobboxs->id }}">

                        <a href="{{ route('galleryDetail', $jobboxs->id) }}">
                            <img class="card-img-top" src="/{{$jobfilee->fileimgname}}"  alt="..." style="height: 267px;">
                        </a>

                            <div class="card-body" style="width:auto;">
                                <div class="text-left position-absolute">
                                    <div class="row pl-3">
                                        <a style="text-decoration:none;" href="{{route('startjob.show',$designerid->token)}}">

                                            <p class="font-weight-bold">ออกแบบโดย
                                                {{$designerid->name}}
                                            </p>
                                            </a>
                                    </div>
                                    
                                {{-- @foreach($jobboxs->tags as $tagn)


                                    <p>
                                        {{$tagname}},
                                    </p>

                                @endforeach --}}
                                <div class="row pl-3">
                                @foreach ($jobtagsjobbo as $jobtagsjobbos)
                                    @php

                                    $tagname = \App\Tags::find($jobtagsjobbos)->tagName;

                                    @endphp
                                    <p>
                                        {{$tagname}},
                                    </p>

                                @endforeach 
                                </div>
                    
                            <div class="row pl-3 color-grey">
                                    <span>
                                        <i class="fas fa-heart"></i>
                                        {{$jobboxs->favorite_to_users->count()}}
                                    </span>
                                    <span class="pl-3">
                                        <i class="far fa-eye"></i>
                                        {{$jobboxs->view_count}}
                                    </span>





                            </div>



                            </div>
                            <h4><a href="#" title="Nature Portfolio">{{ $jobboxs->title }}</a></h4>
                            <span class="pull-right">

                                    @guest

                                    <a href="javascript:void(0);" >
                                    <button onclick="toastr.info('คุณต้องทำการ สมัครสมาชิกหรือเข้าสู่ระบบก่อน จึงสามารถกดถูกใจได้.','ข้อมูล',{
                                        closeButton:true,
                                        progressBar: true,
                                    })" class="love btn btn-light text-center rounded float-right border">
                                        <i class="fas fa-heart"></i>
                                        {{-- {{$jobboxs->favorite_to_users->count()}}                                 --}}
                                    </button>
                                    </a>

                                    @else
                                    <a href="javascript:void(0);" >
                                        <button onclick="document.getElementById('vote-form-{{$jobboxs->id}}').submit();" class="love text-center rounded float-right border {{ !Auth::user()->favorite_jobs->where('pivot.jobs_id',$jobboxs->id)->count() == 0 ?'favorite_jobs' : ''}}">
                                            <i class="fas fa-heart"></i>

                                            {{-- {{$jobboxs->favorite_to_users->count()}}   --}}
                                        </button>
                                    </a>
                                        <form id="vote-form-{{$jobboxs->id}}" method="POST" action="{{route('job.vote',$jobboxs->id)}}"
                                            style="display:none;">
                                        @csrf
                                        </form>

                                    @endguest
                                    {{-- <i id="like{{$job->id}}" class="far fa-heart{{ auth()->user()->isFavorited($job) ? 'like-post' : '' }}"></i>
                                    <div id="like{{$job->id}}-bs3">{{ $job->favoritesCount }}</div> --}}
                            </span>
                        </div>
                    </div>
                </article>
            @endforeach

        @endif
    </div>
</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
            
                @if($jobbottle->count() == 0)
                <article class="col-12 mt-5">
                    <div class="row">
                        <p class="mx-auto text-secondary" style="opacity:0.5;"> ไม่มีผลงาน</p>
                    </div>
                </article>
                @elseif($jobbottle->count())

                    @foreach($jobbottle as $jobbottles)

                        @php
                            $designerid = \App\Designer::find($jobbottles->designer_id);

                            $jobfilee = DB::table('jobfiles')->where('job_id',$jobbottles->id)->first();
                            // foreach ($jobbottle as $jobbot){
                                        $jobtagsjobbot = json_decode($jobbottles->tags,true);


                                    // }

                        @endphp

                        <article class="col-12 col-md-4 mt-5">
                            <div class="card shadow-sm" data-id="{{ $jobbottles->id }}">

                            <a href="{{ route('galleryDetail', $jobbottles->id) }}">
                                <img class="card-img-top" src="/{{$jobfilee->fileimgname}}"  alt="..." style="height: 267px;">
                            </a>

                                <div class="card-body" style="width:auto;">
                                    <div class="text-left position-absolute">
                                        <div class="row pl-3">
                                            <a style="text-decoration:none;" href="{{route('startjob.show',$designerid->token)}}">

                                                <p class="font-weight-bold">ออกแบบโดย
                                                    {{$designerid->name}}
                                                </p>
                                                </a>
                                        </div>

                                    {{-- @foreach($jobbottles->tags as $tagn)


                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach --}}
                                    <div class="row pl-3">
                                    @foreach ($jobtagsjobbot as $jobtagsjobbots)
                                        @php

                                        $tagname = \App\Tags::find($jobtagsjobbots)->tagName;

                                        @endphp
                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach 
                                    </div>
                        
                                <div class="row pl-3 color-grey">
                                        <span>
                                            <i class="fas fa-heart"></i>
                                            {{$jobbottles->favorite_to_users->count()}}
                                        </span>
                                        <span class="pl-3">
                                            <i class="far fa-eye"></i>
                                            {{$jobbottles->view_count}}
                                        </span>





                                </div>



                                </div>
                                <h4><a href="#" title="Nature Portfolio">{{ $jobbottles->title }}</a></h4>
                                <span class="pull-right">

                                        @guest

                                        <a href="javascript:void(0);" >
                                        <button onclick="toastr.info('คุณต้องทำการ สมัครสมาชิกหรือเข้าสู่ระบบก่อน จึงสามารถกดถูกใจได้.','ข้อมูล',{
                                            closeButton:true,
                                            progressBar: true,
                                        })" class="love btn btn-light text-center rounded float-right border">
                                            <i class="fas fa-heart"></i>
                                            {{-- {{$jobbottles->favorite_to_users->count()}}                                 --}}
                                        </button>
                                        </a>

                                        @else
                                        <a href="javascript:void(0);" >
                                            <button onclick="document.getElementById('vote-form-{{$jobbottles->id}}').submit();" class="love text-center rounded float-right border {{ !Auth::user()->favorite_jobs->where('pivot.jobs_id',$jobbottles->id)->count() == 0 ?'favorite_jobs' : ''}}">
                                                <i class="fas fa-heart"></i>

                                                {{-- {{$jobbottles->favorite_to_users->count()}}   --}}
                                            </button>
                                        </a>
                                            <form id="vote-form-{{$jobbottles->id}}" method="POST" action="{{route('job.vote',$jobbottles->id)}}"
                                                style="display:none;">
                                            @csrf
                                            </form>

                                        @endguest
                                        {{-- <i id="like{{$job->id}}" class="far fa-heart{{ auth()->user()->isFavorited($job) ? 'like-post' : '' }}"></i>
                                        <div id="like{{$job->id}}-bs3">{{ $job->favoritesCount }}</div> --}}
                                </span>
                            </div>
                        </div>
                    </article>
                @endforeach

            @endif
        </div>
        </div>
        <div class="tab-pane fade" id="pills-glass" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
            
                @if($jobcup->count() == 0)
                <article class="col-12 mt-5">
                    <div class="row">
                        <p class="mx-auto text-secondary" style="opacity:0.5;"> ไม่มีผลงาน</p>
                    </div>
                </article>
                @elseif($jobcup->count())

                    @foreach($jobcup as $jobcups)

                        @php
                            $designerid = \App\Designer::find($jobcups->designer_id);

                            $jobfilee = DB::table('jobfiles')->where('job_id',$jobcups->id)->first();
                            // foreach ($jobcup as $jobc){
                                $jobtagsjobc = json_decode($jobcups->tags,true);


                            // }

                        @endphp

                        <article class="col-12 col-md-4 mt-5">
                            <div class="card shadow-sm" data-id="{{ $jobcups->id }}">

                            <a href="{{ route('galleryDetail', $jobcups->id) }}">
                                <img class="card-img-top" src="/{{$jobfilee->fileimgname}}"  alt="..." style="height: 267px;">
                            </a>

                                <div class="card-body" style="width:auto;">
                                    <div class="text-left position-absolute">
                                        <div class="row pl-3">
                                            <a style="text-decoration:none;" href="{{route('startjob.show',$designerid->token)}}">

                                                <p class="font-weight-bold">ออกแบบโดย
                                                    {{$designerid->name}}
                                                </p>
                                                </a>
                                        </div>

                                    {{-- @foreach($jobcups->tags as $tagn)


                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach --}}
                                    <div class="row pl-3">
                                    @foreach ($jobtagsjobc as $jobt)
                                        @php

                                        $tagname = \App\Tags::find($jobt)->tagName;

                                        @endphp
                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach 
                                    </div>
                        
                                <div class="row pl-3 color-grey">
                                        <span>
                                            <i class="fas fa-heart"></i>
                                            {{$jobcups->favorite_to_users->count()}}
                                        </span>
                                        <span class="pl-3">
                                            <i class="far fa-eye"></i>
                                            {{$jobcups->view_count}}
                                        </span>





                                </div>



                                </div>
                                <h4><a href="#" title="Nature Portfolio">{{ $jobcups->title }}</a></h4>
                                <span class="pull-right">

                                        @guest

                                        <a href="javascript:void(0);" >
                                        <button onclick="toastr.info('คุณต้องทำการ สมัครสมาชิกหรือเข้าสู่ระบบก่อน จึงสามารถกดถูกใจได้.','ข้อมูล',{
                                            closeButton:true,
                                            progressBar: true,
                                        })" class="love btn btn-light text-center rounded float-right border">
                                            <i class="fas fa-heart"></i>
                                            {{-- {{$jobcups->favorite_to_users->count()}}                                 --}}
                                        </button>
                                        </a>

                                        @else
                                        <a href="javascript:void(0);" >
                                            <button onclick="document.getElementById('vote-form-{{$jobcups->id}}').submit();" class="love text-center rounded float-right border {{ !Auth::user()->favorite_jobs->where('pivot.jobs_id',$jobcups->id)->count() == 0 ?'favorite_jobs' : ''}}">
                                                <i class="fas fa-heart"></i>

                                                {{-- {{$jobcups->favorite_to_users->count()}}   --}}
                                            </button>
                                        </a>
                                            <form id="vote-form-{{$jobcups->id}}" method="POST" action="{{route('job.vote',$jobcups->id)}}"
                                                style="display:none;">
                                            @csrf
                                            </form>

                                        @endguest
                                        {{-- <i id="like{{$job->id}}" class="far fa-heart{{ auth()->user()->isFavorited($job) ? 'like-post' : '' }}"></i>
                                        <div id="like{{$job->id}}-bs3">{{ $job->favoritesCount }}</div> --}}
                                </span>
                            </div>
                        </div>
                    </article>
                @endforeach

            @endif
        </div>
        </div>
        <div class="tab-pane fade" id="pills-bag" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
            
                @if($jobbag->count() == 0)
                <article class="col-12 mt-5">
                    <div class="row">
                        <p class="mx-auto text-secondary" style="opacity:0.5;"> ไม่มีผลงาน</p>
                    </div>
                </article>
                @elseif($jobbag->count())

                    @foreach($jobbag as $jobbags)

                        @php
                            $designerid = \App\Designer::find($jobbags->designer_id);

                            $jobfilee = DB::table('jobfiles')->where('job_id',$jobbags->id)->first();

                            // foreach ($jobbag as $jobba){
            $jobtagsjobba = json_decode($jobbags->tags,true);


        // }
                        @endphp

                        <article class="col-12 col-md-4 mt-5">
                            <div class="card shadow-sm" data-id="{{ $jobbags->id }}">

                            <a href="{{ route('galleryDetail', $jobbags->id) }}">
                                <img class="card-img-top" src="/{{$jobfilee->fileimgname}}"  alt="..." style="height: 267px;">
                            </a>

                                <div class="card-body" style="width:auto;">
                                    <div class="text-left position-absolute">
                                        <div class="row pl-3">
                                            <a style="text-decoration:none;" href="{{route('startjob.show',$designerid->token)}}">

                                                <p class="font-weight-bold">ออกแบบโดย
                                                    {{$designerid->name}}
                                                </p>
                                                </a>
                                        </div>

                                    {{-- @foreach($jobbags->tags as $tagn)


                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach --}}
                                    <div class="row pl-3">
                                    @foreach ($jobtagsjobba as $jobtagsjobbas)
                                        @php

                                        $tagname = \App\Tags::find($jobtagsjobbas)->tagName;

                                        @endphp
                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach 
                                    </div>
                        
                                <div class="row pl-3 color-grey">
                                        <span>
                                            <i class="fas fa-heart"></i>
                                            {{$jobbags->favorite_to_users->count()}}
                                        </span>
                                        <span class="pl-3">
                                            <i class="far fa-eye"></i>
                                            {{$jobbags->view_count}}
                                        </span>





                                </div>



                                </div>
                                <h4><a href="#" title="Nature Portfolio">{{ $jobbags->title }}</a></h4>
                                <span class="pull-right">

                                        @guest

                                        <a href="javascript:void(0);" >
                                        <button onclick="toastr.info('คุณต้องทำการ สมัครสมาชิกหรือเข้าสู่ระบบก่อน จึงสามารถกดถูกใจได้.','ข้อมูล',{
                                            closeButton:true,
                                            progressBar: true,
                                        })" class="love btn btn-light text-center rounded float-right border">
                                            <i class="fas fa-heart"></i>
                                            {{-- {{$jobbags->favorite_to_users->count()}}                                 --}}
                                        </button>
                                        </a>

                                        @else
                                        <a href="javascript:void(0);" >
                                            <button onclick="document.getElementById('vote-form-{{$jobbags->id}}').submit();" class="love text-center rounded float-right border {{ !Auth::user()->favorite_jobs->where('pivot.jobs_id',$jobbags->id)->count() == 0 ?'favorite_jobs' : ''}}">
                                                <i class="fas fa-heart"></i>

                                                {{-- {{$jobbags->favorite_to_users->count()}}   --}}
                                            </button>
                                        </a>
                                            <form id="vote-form-{{$jobbags->id}}" method="POST" action="{{route('job.vote',$jobbags->id)}}"
                                                style="display:none;">
                                            @csrf
                                            </form>

                                        @endguest
                                        {{-- <i id="like{{$jobbags->id}}" class="far fa-heart{{ auth()->user()->isFavorited($job) ? 'like-post' : '' }}"></i>
                                        <div id="like{{$job->id}}-bs3">{{ $job->favoritesCount }}</div> --}}
                                </span>
                            </div>
                        </div>
                    </article>
                @endforeach

            @endif
        </div>
        </div>
        <div class="tab-pane fade" id="pills-can" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
            
                @if($jobcan->count() == 0)
                <article class="col-12 mt-5">
                    <div class="row">
                        <p class="mx-auto text-secondary" style="opacity:0.5;"> ไม่มีผลงาน</p>
                    </div>
                </article>
                @elseif($jobcan->count())

                    @foreach($jobcan as $jobcans)

                        @php
                            $designerid = \App\Designer::find($jobcans->designer_id);

                            $jobfilee = DB::table('jobfiles')->where('job_id',$jobcans->id)->first();
                            // foreach ($jobcan as $jobca){
            $jobtagsjobca = json_decode($jobcans->tags,true);


        // }

                        @endphp

                        <article class="col-12 col-md-4 mt-5">
                            <div class="card shadow-sm" data-id="{{ $jobcans->id }}">

                            <a href="{{ route('galleryDetail', $jobcans->id) }}">
                                <img class="card-img-top" src="/{{$jobfilee->fileimgname}}"  alt="..." style="height: 267px;">
                            </a>

                                <div class="card-body" style="width:auto;">
                                    <div class="text-left position-absolute">
                                        <div class="row pl-3">
                                            <a style="text-decoration:none;" href="{{route('startjob.show',$designerid->token)}}">

                                            <p class="font-weight-bold">ออกแบบโดย
                                                {{$designerid->name}}
                                            </p>
                                            </a>
                                        </div>

                                    {{-- @foreach($jobcans->tags as $tagn)


                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach --}}
                                    <div class="row pl-3">
                                    @foreach ($jobtagsjobca as $jobt)
                                        @php

                                        $tagname = \App\Tags::find($jobt)->tagName;

                                        @endphp
                                        <p>
                                            {{$tagname}},
                                        </p>

                                    @endforeach 
                                    </div>
                        
                                <div class="row pl-3 color-grey">
                                        <span>
                                            <i class="fas fa-heart"></i>
                                            {{$jobcans->favorite_to_users->count()}}
                                        </span>
                                        <span class="pl-3">
                                            <i class="far fa-eye"></i>
                                            {{$jobcans->view_count}}
                                        </span>





                                </div>



                                </div>
                                <h4><a href="#" title="Nature Portfolio">{{ $jobcans->title }}</a></h4>
                                <span class="pull-right">

                                        @guest

                                        <a href="javascript:void(0);" >
                                        <button onclick="toastr.info('คุณต้องทำการ สมัครสมาชิกหรือเข้าสู่ระบบก่อน จึงสามารถกดถูกใจได้.','ข้อมูล',{
                                            closeButton:true,
                                            progressBar: true,
                                        })" class="love btn btn-light text-center rounded float-right border">
                                            <i class="fas fa-heart"></i>
                                            {{-- {{$jobcans->favorite_to_users->count()}}                                 --}}
                                        </button>
                                        </a>

                                        @else
                                        <a href="javascript:void(0);" >
                                            <button onclick="document.getElementById('vote-form-{{$jobcans->id}}').submit();" class="love text-center rounded float-right border {{ !Auth::user()->favorite_jobs->where('pivot.jobs_id',$jobcans->id)->count() == 0 ?'favorite_jobs' : ''}}">
                                                <i class="fas fa-heart"></i>

                                                {{-- {{$jobcans->favorite_to_users->count()}}   --}}
                                            </button>
                                        </a>
                                            <form id="vote-form-{{$jobcans->id}}" method="POST" action="{{route('job.vote',$jobcans->id)}}"
                                                style="display:none;">
                                            @csrf
                                            </form>

                                        @endguest
                                        {{-- <i id="like{{$job->id}}" class="far fa-heart{{ auth()->user()->isFavorited($job) ? 'like-post' : '' }}"></i>
                                        <div id="like{{$job->id}}-bs3">{{ $job->favoritesCount }}</div> --}}
                                </span>
                            </div>
                        </div>
                    </article>
                @endforeach

            @endif
        </div>
        </div>

       
    </div>
    </div>
        
    </div>

   </div>
{{-- <style>
    .container-1 div {
      width: 280px;
      height: 500px;
      background-color: antiquewhite;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 8px;


    }
    .container-1 .hoverliked:hover{
        background-color:rgba(0, 0, 0, .15);
        transform: translateY(-20px,0px) 2ms all;
    }


    .container-1 .item1 { height: 200px; }
    .container-1 .item4 { height: 600px; }
    .container-1 .item2 { height: 600px; }
    .container-1 .item3 { height: 400px; }

    .container-1 .item5 { height: 200px; }
    .container-1 .item8 { height: 200px; }
    .container-1 .item6 { height: 600px; }
    .container-1 .item11 { height: 400px; }
  </style> --}}
  {{-- <script src="js/magic-grid.min.js"></script> --}}
{{-- <script>
let magicGrid = new MagicGrid({
  container: '.container-1',
  animate: true,
  gutter: 30,
  static: true,
  useMin: true
});
    magicGrid.listen();

</script> --}}



{{-- <script type="text/javascript">
    $(document).ready(function() {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('i.fa-heart, i.fa-heart').click(function(){
            var id = $(this).parents(".card").data('id');
            var c = $('#'+this.id+'-bs3').html();
            var cObjId = this.id;
            var cObj = $(this);


            $.ajax({
               type:'POST',
               url:'/ajaxRequest',
               data:{id:id},
               success:function(data){
                  if(jQuery.isEmptyObject(data.success.attached)){
                    $('#'+cObjId+'-bs3').html(parseInt(c)-1);
                    $(cObj).removeClass("like-post");
                  }else{
                    $('#'+cObjId+'-bs3').html(parseInt(c)+1);
                    $(cObj).addClass("like-post");
                  }
               }
            });


        });



    });
</script> --}}
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="public/js/isotope.pkgd.min.js"></script>
{{-- <script src="https://cdnjs.cloundflare.com/ajax/libs/select2/4.0.3/jquery.min.js"></script>
--}}
<script>


var $isotope_container = $('.isotope_container').isotope({ // กำหนด container ที่ครอบไอเทมทั้งหมดอยู่
  itemSelector: '.element-item' // กำหนด element class ที่จะให้สามารถ filter ได้
});

$('#isotope_category').on('change', function() { // จับ event change ของ select option
  var selected = $(this).find('option:selected'); // ตรวจสอบว่าเลือกไปที่หมวดหมู่อาหารอะไร
  var filterValue = selected.attr('data-filter'); // เก็บข้อมูล attribute data-filter
  $isotope_container.isotope({ filter: filterValue }); // ใช้คำสั่ง filter ของ isotope
});

</script>
