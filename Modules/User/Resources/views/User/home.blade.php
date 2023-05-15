@extends('user.master')



@section('title')
    Onlanuage courses
    @endsection
@section('css')

@if (App::getLocale() == 'ar')
 <style>
    @media (min-width: 767px) and (max-width: 992px) {

    .mymainvideo .vjs-swarmify-theme.smartvideo-player .vjs-tech {
        position: absolute;
        top: 25px !important;
        left: 0;
        width: 700px !important;
        height: 400px !important;}
        .vjs-swarmify-theme .vjs-swarmify-play-button {
            font-size: 3em;
            display: block;
            z-index: 99;
            position: absolute;
            width: 4em;
            height: 2.6em;
            margin-left: -2em!important;
            margin-top: -1.3em!important;
            text-align: center!important;
            vertical-align: middle!important;
            cursor: pointer;
            opacity: 1;
            left: 50%;
            top: 38% !important;

        }

      .vjs-control-bar{
        width: 716px !important;
        margin-bottom: 100px !important;
      }
      .vjs-fullscreen-control{
        display: none !important;

      }
    }


    @media (max-width: 767px) {
       div.firstsection  {
        display: flex;
    align-items: center;
    justify-content: center;
       }
       .allcontentslider .row{

        display: flex;
        align-items: center;
        justify-content: center;
       }

    }

    </style>
    @endif

    @if (App::getLocale() == 'en')
    <style>
        @media (min-width: 767px) and (max-width: 992px) {

        .vjs-swarmify-theme .vjs-swarmify-play-button {
            font-size: 3em;
            display: block;
            z-index: 99;
            position: absolute;
            width: 4em;
            height: 2.6em;
            margin-left: -2em!important;
            margin-top: -1.3em!important;
            text-align: center!important;
            vertical-align: middle!important;
            cursor: pointer;
            opacity: 1;
            left: 35% !important;
            top: 38% !important;

        }
        .dimensions-video_228974.swarm-fluid.vjs-swarmify-theme:not(.vjs-fullscreen){
        display: none

        }


        }


    </style>

    @endif

@endsection

@section('content')
@php
$settings=cache()->get('settings') && isset(cache()->get('settings')['home'])?cache()->get('settings')['home']:config('front_settings.home');
@endphp

<main>


    <!-- Start Section One -->
    <section class="one" style="margin-top: 120px" >

        <div class="container-fluid">
            <div class="firstsection">
        <div class=" mymaincontent">
            <img class="hero-shape-1 shapeme" src="{{  asset('assets/user/img/shape/shape-03.png') }}" alt="shape">
            <div class="mytext col-lg-3 col-sm-12" >
                <div class="circle_1"></div>
                <div class="circle2"></div>
                <div class="circle2 circle-2"></div>
                <div id="carouselExampleSlidesOnly" class="carousel slide slide-me" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach ( $settings["first_section"][app()->getLocale()]['sliders'] as $item)
                        <div class="carousel-item {{$loop->iteration==1?'active':''}} ">
                            <h2><span>{{ Str::before($item, " ") }}</span>{{Str::after($item," ")}}</h2>
                        </div>
                       @endforeach

                    </div>

                    </div>
                    @guest

                    <div class="university-btn register-me">
                        @if (App::getLocale() == 'ar')

                        <a class="edu-five-btn btnme" href="{{ route('register') }}">سجل الآن</a>
                        @else
                        <a class="edu-five-btn btnme mt-2" href="{{ route('register') }}">Register Now</a>
                        @endif
                    </div>
                    @endguest

            </div>
            <div class="mymainvideo col-lg-8 col-sm-12" style="border: 5px dashed #AEE2FF;">
                <div class="mymainvideo1">
                    <smartvideo class="mymainvideo swarm-fluid" controls playsinline poster="{{ asset( $settings['first_section']['poster']) }}"
                    src="{{ $settings['first_section']['video'] }}">
        </smartvideo>                        </div>

                <div class="hero-shape-2 d-none d-xl-block absolute">
                    <img src="{{ asset('assets/user/img/shape/campus-shape-1.png') }}" alt="shape">
                </div>

            </div>

            <img class="hero-shape-6" src="{{  asset('assets/user/img/shape/shape-01.png') }}" alt="shape">

        </div>

    </div>
</div>

      </section>
<section class="two">
    <div class="container sec-two">
        <div class="difnite" style="margin:auto">
            <h2>{{ $settings['seconed_section'][app()->getLocale()]['title'] }}</h2>
       <p>     {!! $settings['seconed_section'][app()->getLocale()]['description'] !!} </p>
        </div>
        <div class="our-features ">

            <div class="one-feature recorded ">
                <a href="{{   $settings['seconed_section'][app()->getLocale()]['urls'][3]['url'] }}">
                    <img src="{{ asset('assets/user/img/animated/diagram.gif') }}" alt="">
                    <span>{{  $settings['seconed_section'][app()->getLocale()]['urls'][3]['text'] }}</span>
                </a>
            </div>
            <div class="one-feature article">
                <a href="{{   $settings['seconed_section'][app()->getLocale()]['urls'][2]['url'] }}">
                    <img src="{{ asset('assets/user/img/animated/document.gif') }}" alt="">
                    <span>{{  $settings['seconed_section'][app()->getLocale()]['urls'][2]['text'] }}</span>
                </a>
            </div>

                <div class="one-feature teacher">
                    <a href="{{   $settings['seconed_section'][app()->getLocale()]['urls'][1]['url'] }}">
                        <img src="{{ asset('assets/user/img/animated/mortarboard (1).gif') }}" alt="" width="70px">
                        <span>{{  $settings['seconed_section'][app()->getLocale()]['urls'][1]['text'] }}</span>
                    </a>
                </div>

            <div class="one-feature library">
                <a href="{{   $settings['seconed_section'][app()->getLocale()]['urls'][0]['url'] }}">
                    <img src="{{ asset('assets/user/img/animated/video.gif') }}" alt="">
                    <span>{{  $settings['seconed_section'][app()->getLocale()]['urls'][0]['text'] }}</span>
                </a>
            </div>

        </div>
    </div>

    <!-- <div class=" container secondsection">

        <img src="assets/img/shape/portfolio-shap-1.png" class="myshape3" alt="">

        <div class="col-lg-5 imglecture">
            <img src="assets/img/1/main-lecture.jpg" alt="">
        </div>
        <div class="col-lg-7" >
            <div class="row myfeatures">
                <div class="col-lg-4">
                    <div class="feature feature-after">
                        <a href="#">
                            <img src="assets/img/1/aa.png" width="80px" alt="">
                            <h6> Online Courses</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature feature-after">
                        <a href="#">
                            <img src="assets/img/1/bb.png" width="80px" alt="">
                            <h6> Recorded Lectures</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature feature-after">
                        <a href="#">
                            <img src="assets/img/1/dd.png" width="80px" alt="">
                            <h6> Various scientific articles</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <a href="#">
                            <img src="assets/img/1/cc.png" width="80px" alt="">
                            <h6> Continuous follow-up</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <a href="#">
                            <img src="assets/img/1/ee.png" width="80px" alt="">
                            <h6> Onlanguage’s affiliate marketing program</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <a href="#">
                            <img src="assets/img/1/ebook.png" width="80px" alt="">
                            <h6> Various educational videos</h6>
                        </a>
                    </div>
                </div>



            </div>
            <img src="assets/img/shape/feedback-02.img.png" alt="" class="myshape2">
        </div>
    </div> -->
</section>
<!-- End Section One -->
<section class="three">
    <div class="container-fluid">
        <div class="newshape"></div>
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ( $settings["third_section"][app()->getLocale()]['sliders'] as $item)

                <div class="carousel-item {{$loop->iteration==1?'active':''}} ">
                    <div class="allcontentslider aa">
                    <div class="row" >
                        <div class="textslider col-lg-6">
                            <h3>
                        {{        $item["title"]}}
                                           </h3>
                                           <p>
{!!            $item['description'] !!} </p>

                            <div class="university-btn register-me">
                                <a class="edu-five-btn show-btn" href="{{ $item['url'] }}">    {{   $item['url_text']}}
                                </a>
                            </div>
                        </div>
                        <div  style="border: 5px dashed #AEE2FF;"   class="mymainvideo1 col-lg-6 mymainvideo2023">
                            <smartvideo  poster="{{ asset($item['poster']) }}" class="swarm-fluid" controls playsinline

                            src="{{ $item['video'] }}">
                </smartvideo>                        </div>
                    </div>

                </div>
              </div>

@endforeach

<button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

    <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

          </div>
    </div>
</section>
<!-- End Section Three -->
<!-- Start Forth Section -->
<section class="forth">
    <div class="container-fluid">
        <div class="newshape2 rtlnew"></div>
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ( $settings["fourth_section"][app()->getLocale()]['sliders'] as $item)

                <div class="carousel-item {{$loop->iteration==1?'active':''}} ">
                    <div class="allcontentslider aa">
                    <div class="row">
                        <div class="mymainvideo1 col-lg-6 mymainvideo2023">
                            <smartvideo class="swarm-fluid" controls playsinline
                            poster="{{ $item['poster'] }}"
                        src="{{ $item['video'] }}">
                </smartvideo>                        </div>
                        <div class="textslider blue-text col-lg-5 textslider1">
                            <h3>
                                {{        $item["title"]}}
                            </h3>
                            <p>
                                {!!             $item['description'] !!}


                            </p>
                            <div class="university-btn register-me">
                                <a class="edu-five-btn show-btn" href="{{ $item['url'] }}">{{   $item['url_text']}}</a>
                            </div>
                        </div>


                    </div>

                </div>
              </div>
              @endforeach

                <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                    <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                  </div>




          </div>
          <div class="hero-shape-2 d-none d-xl-block absolute">
            <img src="assets/img/shape/campus-shape-1.png" alt="shape">
        </div>

    </div>
</section>
<!-- End Forth Section -->
<!-- Start Section  -->

<!-- End Section  -->

<!-- End Section Six -->


        <!-- End Forth Section -->
    <!-- Start Section  -->
    <section class="six">
        <div class="academic-courses-area p-relative pt-110 pb-120">
            <img class="academic-shape-2" src="{{ asset('assets/user/img/shape/acadenic-shape-2.png')}}" alt="shape">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4" style="
                    margin-top: 35px;
                    margin-bottom: 35px;
                ">
                        <div class="section-title mb-50">
                            @if (App::getLocale() == 'en')

                            <h2>Latest <span class="down-mark-line">Articles</span></h2>
                            @else
                            <h2>آخر  <span class="down-mark-line">مقالاتنا</span></h2>
@endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ( $articles as $article )

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="academic-box position-relative mb-30">
                            <img class="academic-shape" src="{{ asset('assets/user/img/shape/acadenic-shape-1.png')}}"
                                alt="image not found">
                            <div class="academic-thumb">
                                <a href="{{  route('user.showArticle' ,$article->slug)}}"><img height="200px" src="{{ asset( $article->image) }}">
                                </div>
                            <div class="academic-content Articles">
                                <div class="academic-content-header height-text">
                                    @if (App::getLocale() == 'ar')

                                    <div class="eduman-course-text">
                                       <h3><a href="{{  route('user.showArticle' ,$article->slug)}}">{{ $article->title_ar}} </a></h3>
                                    </div>
                                    @else
                                    <div class="eduman-course-text">
                                     <h3><a href="{{  route('user.showArticle' ,$article->slug)}}"> {{ $article->title_en }} </a></h3>
                                  </div>
                                   @endif
                                </div>

                                <div class="academic-footer">
                                    <div class="coursee-clock">
                                        <i class="flaticon-wall-clock"></i><span>{{ $article->created_at->diffForHumans() }}</span>
                                    </div>

                                    <a  class="edo-course-sec-btn" href="{{  route('user.showArticle' ,$article->slug)}}">{{ trans('article_trans.readMore') }}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 text-center" style="
                    margin-top: 55px;
                    margin-bottom: 55px;
                ">
                        <div class="academic-bottom-btn ">
                            <a class="edo-theme-btn mt-30" href="{{ route('user.allArticles') }}">{{ trans('article_trans.allarticles') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section  -->
    <!-- Start Section six -->
    <section class="fifth">
        <div class="container">
            <div class="fifth-me">
                <div class="testimonial-area pb-120">
                    <div class="container">
                       <div class="row">
                          <div class="col-lg-6 offset-lg-3" style="
                    margin-top: 15px;
                    margin-bottom: 35px;">
                             <div class="section-title text-center mb-55">
                                @if (App::getLocale() == 'en')

                                <h2>What Students<br>
                                   Think and Say About <span class="down-mark-line">Onlanguage Courses</span></h2>
@else
<h2>ماذا الطلاب <br>
    يقولون عن منصة  <span class="down-mark-line">Onlanguage Courses</span></h2>
@endif
                                </div>
                          </div>
                       </div>
                       <!-- Slider main container -->
                       <div class="swiper-container testimonial-active">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->

                        @foreach($Reviews as $Review)
                            <div class="swiper-slide">
                                <div class="testimonial-items position-relative">
                                    <div class="testimonial-header">
                                        <div class="testimonial-title">
                                       @if (App::getLocale() == 'en')
                                  <h4>{{  $Review->opinion_en }}</h4>
                                    @else
                                     <h4>{{  $Review->opinion_ar }}</h4>
                                    @endif                                        </div>
                                    </div>

                                    <div class="testimonial-body">
                                        <img width="380px" height="259px" src="{{ asset($Review->image) }}"  alt="image not found">
                                    </div>
                                    <div class="testimonial-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- If we need pagination -->
                        <div class="testimonial-pagination text-center"></div>
                    </div>
            </div>
            </div>
            </div>
        </div>
    </section>
    <!-- End Section Six -->
     <!--counter-area-start -->
     <div class="counter-area pt-75 pb-30"  style="padding:30px" data-background="{{asset('assets/user/img/bg/university-counter.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="49.484" height="56.553"
                                viewBox="0 0 49.484 56.553">
                                <g id="layer2" transform="translate(-1.058)">
                                    <path id="path2610"
                                        d="M25.807,0a.883.883,0,0,0-.437.11L1.51,13.427A.884.884,0,0,0,1.569,15l5.674,2.655v2.669h-.88a.884.884,0,0,0-.887.88v7.954a.886.886,0,0,0,.887.887H9.9a.884.884,0,0,0,.88-.887V21.2a.881.881,0,0,0-.88-.88H9.012v-1.84l6.6,3.086a6.425,6.425,0,0,0,1.16,1.87v.245a3.489,3.489,0,0,0,.326,6.934c.076,0,.133,0,.209-.01A9.1,9.1,0,0,0,20.5,34.832v1.92l-.26-.261a.875.875,0,0,0-1.246,0l-2.449,2.446a13.167,13.167,0,0,0-10.889,8.21A13.928,13.928,0,0,0,4.6,52.541v3.124a.884.884,0,0,0,.88.887H46.125a.884.884,0,0,0,.88-.887V52.541a13.94,13.94,0,0,0-1.1-5.479,13.211,13.211,0,0,0-10.846-8.129L32.61,36.491a.883.883,0,0,0-1.253,0l-.254.254V34.83A9.089,9.089,0,0,0,34.3,30.608c.076.007.136.01.212.01a3.487,3.487,0,0,0,.326-6.931l0-.263a6.374,6.374,0,0,0,1.153-1.852L50.032,15a.884.884,0,0,0,.059-1.573L26.232.111A.882.882,0,0,0,25.807,0ZM25.8,1.9,47.723,14.126,36.481,19.391a6.262,6.262,0,0,0-.074-1.536V12.715a1.576,1.576,0,0,0-.425-1.031,2.863,2.863,0,0,0-.8-.606,9.167,9.167,0,0,0-2.3-.791A33.157,33.157,0,0,0,25.8,9.617a33.156,33.156,0,0,0-7.077.671,9.165,9.165,0,0,0-2.3.791,2.863,2.863,0,0,0-.8.606,1.576,1.576,0,0,0-.423,1.031l0,5.125a6.565,6.565,0,0,0-.069,1.55L9.013,16.53V11.262Zm6.679,10.112a8.016,8.016,0,0,1,1.86.62,1.308,1.308,0,0,1,.3.209V16a10.326,10.326,0,0,0-1.762-.542A33.157,33.157,0,0,0,25.8,14.79a33.156,33.156,0,0,0-7.077.672,10.839,10.839,0,0,0-1.76.535V12.84a1.316,1.316,0,0,1,.3-.209,7.919,7.919,0,0,1,1.852-.62,31.8,31.8,0,0,1,6.686-.627,31.728,31.728,0,0,1,6.679.627Zm-25.236.238V15.7L3.878,14.126Zm25.236,4.935a7.962,7.962,0,0,1,1.86.627,1.919,1.919,0,0,1,.3.2.618.618,0,0,0,.023.121,5.16,5.16,0,0,1-1.1,4.065h-4.8A4.358,4.358,0,0,1,24.478,18.5a.882.882,0,0,0-1.755.124A3.6,3.6,0,0,1,19.13,22.2h-1.1a5.214,5.214,0,0,1-1.084-4.169,1.4,1.4,0,0,1,.314-.216,7.764,7.764,0,0,1,1.838-.62,31.886,31.886,0,0,1,6.7-.634,31.726,31.726,0,0,1,6.678.627Zm-8.736,4.131a6.047,6.047,0,0,0,5.018,2.648h4.306v3.549a7.266,7.266,0,0,1-14.533,0V23.963h.594a5.35,5.35,0,0,0,4.615-2.648Zm-16.5.775H9.012v6.185H7.244Zm9.524,3.389v2.033a9.307,9.307,0,0,0,.092,1.317,1.75,1.75,0,0,1-.091-3.351Zm18.067,0a1.673,1.673,0,0,1,1.2,1.662,1.651,1.651,0,0,1-1.294,1.685,9.015,9.015,0,0,0,.095-1.314ZM22.266,35.819a9.162,9.162,0,0,0,7.07,0v2.689L25.8,42.049l-3.534-3.534ZM19.61,38.363,24.555,43.3l-1.4,1.4-4.937-4.94Zm12.374,0,1.4,1.4L28.456,44.7,27.047,43.3ZM34.945,40.7a11.4,11.4,0,0,1,9.084,6.48,12.326,12.326,0,0,1,1.208,5.358v2.244H39.054v-2.65a.884.884,0,1,0-1.767,0v2.65H14.316v-2.65a.884.884,0,1,0-1.769,0v2.65H6.363V52.541A12.293,12.293,0,0,1,7.256,47.9a11.437,11.437,0,0,1,9.4-7.2l5.869,5.864a.883.883,0,0,0,1.246,0L25.8,44.547l2.03,2.023a.883.883,0,0,0,1.246,0Z"
                                        transform="translate(0 0)" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                        <div class="university-couner-text">
                            <span class="counter">68,806</span>
                              @if (App::getLocale() == 'en')

                            <p>Students Enrolled</p>
                            @else
                             <p> الطلبة المسجلين</p>
 
@endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="51.551" height="56.553"
                                viewBox="0 0 51.551 56.553">
                                <g id="online-course_1_" data-name="online-course (1)"
                                    transform="translate(-35.286 -13.876)">
                                    <path id="Path_7694" data-name="Path 7694"
                                        d="M82.967,18.756H71.254l-9.375-4.688a1.837,1.837,0,0,0-1.635,0l-9.375,4.688H39.156a3.874,3.874,0,0,0-3.87,3.87V55.6a3.874,3.874,0,0,0,3.87,3.87H54.567v8.628H50.409a1.168,1.168,0,1,0,0,2.336H71.714a1.168,1.168,0,1,0,0-2.336H67.556V59.465H82.968a3.874,3.874,0,0,0,3.87-3.87V22.625A3.874,3.874,0,0,0,82.967,18.756ZM84.5,55.6a1.536,1.536,0,0,1-1.534,1.534H39.156A1.536,1.536,0,0,1,37.622,55.6V53.983H84.5ZM65.22,68.093H56.9V59.465H65.22Zm-26.064-47H46.2l-1,.5a1.829,1.829,0,0,0,0,3.271l3.954,1.977v7.655a2.828,2.828,0,0,0,2.238,2.759,47.31,47.31,0,0,0,9.667,1,47.318,47.318,0,0,0,9.667-1,2.827,2.827,0,0,0,2.238-2.759V26.837l1.138-.569v7.519a1.168,1.168,0,0,0,2.336,0V25.1l.481-.24a1.829,1.829,0,0,0,0-3.271l-1-.5h7.042A1.536,1.536,0,0,1,84.5,22.625V51.647H37.622V22.625a1.536,1.536,0,0,1,1.534-1.534Zm35.814,2.133L61.062,30.178,47.154,23.224,61.062,16.27ZM51.492,28l8.752,4.376a1.837,1.837,0,0,0,1.635,0L70.631,28v6.488a.482.482,0,0,1-.379.473,44.778,44.778,0,0,1-18.382,0,.482.482,0,0,1-.379-.473V28Z"
                                        transform="translate(0)" fill="#fff" />
                                    <path id="Path_7695" data-name="Path 7695"
                                        d="M177.721,248.258H189.4a1.168,1.168,0,1,0,0-2.336H177.721a1.168,1.168,0,1,0,0,2.336Z"
                                        transform="translate(-124.769 -204.947)" fill="#fff" />
                                    <path id="Path_7696" data-name="Path 7696"
                                        d="M112.709,248.258h2.336a1.168,1.168,0,1,0,0-2.336h-2.336a1.168,1.168,0,1,0,0,2.336Z"
                                        transform="translate(-67.35 -204.947)" fill="#fff" />
                                    <path id="Path_7697" data-name="Path 7697"
                                        d="M177.721,296.388h23.813a1.168,1.168,0,0,0,0-2.336H177.721a1.168,1.168,0,1,0,0,2.336Z"
                                        transform="translate(-124.769 -247.456)" fill="#fff" />
                                    <path id="Path_7698" data-name="Path 7698"
                                        d="M112.709,296.388h2.336a1.168,1.168,0,1,0,0-2.336h-2.336a1.168,1.168,0,1,0,0,2.336Z"
                                        transform="translate(-67.35 -247.456)" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                        <div class="university-couner-text">
                            <span class="counter">5,740</span>
                                @if (App::getLocale() == 'en')

                  <p>Recorded Lecture</p>
                            @else
                             <p> المحاضرات المسجلة </p>
 
@endif
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56.553" height="56.553"
                                viewBox="0 0 56.553 56.553">
                                <g id="Outline" transform="translate(-16 -16)">
                                    <path id="Path_7699" data-name="Path 7699"
                                        d="M217.414,136a1.414,1.414,0,1,0,1.414,1.414A1.414,1.414,0,0,0,217.414,136Z"
                                        transform="translate(-176.436 -105.862)" fill="#fff" />
                                    <path id="Path_7700" data-name="Path 7700"
                                        d="M289.414,136a1.414,1.414,0,1,0,1.414,1.414A1.414,1.414,0,0,0,289.414,136Z"
                                        transform="translate(-239.953 -105.862)" fill="#fff" />
                                    <path id="Path_7701" data-name="Path 7701"
                                        d="M242.828,176.943a.944.944,0,0,1-.943-.943H240a2.828,2.828,0,1,0,5.655,0H243.77a.944.944,0,0,1-.943.943Z"
                                        transform="translate(-197.609 -141.149)" fill="#fff" />
                                    <path id="Path_7702" data-name="Path 7702"
                                        d="M72.22,50.156a.944.944,0,0,0-.764-.211l-8.521,1.42a4.289,4.289,0,0,0-1.579.6l-.65-1.64a6.278,6.278,0,0,0-1.082-1.806l.246-2.229a16.326,16.326,0,0,0,.1-1.71,15.383,15.383,0,0,0-1.254-6.073,13.614,13.614,0,0,1-1.075-6.021l.16-3.263c.01-.206.02-.418.02-.629a12.6,12.6,0,1,0-25.183.63l.16,3.252c.009.243.018.472.018.7a13.437,13.437,0,0,1-1.093,5.331,15.4,15.4,0,0,0-1.155,7.79l.245,2.2a6.4,6.4,0,0,0-.746,1.079L28.78,46.356a2.776,2.776,0,1,0-5.061,2.273l.181.361H22.048a4.736,4.736,0,0,1-2.108-.5L19,48.022a2.074,2.074,0,0,0-3,1.855v2.66a2.812,2.812,0,0,0,1.563,2.529l1.534.767a6.631,6.631,0,0,0,2.951.7h.55v2.791l-.677,8.8a4.115,4.115,0,0,0,4.1,4.43q.1,0,.208-.005c.06,0,.12.005.18.005a3.794,3.794,0,0,0,3.564-2.493l4.3-8a8.244,8.244,0,0,0,1.516,3.281v7.211h1.885v-7.54a.943.943,0,0,0-.218-.6,6.426,6.426,0,0,1,.822-9.041L37.075,53.92a8.308,8.308,0,0,0-1.171,1.2.97.97,0,0,0-.1.118h0l-.017.029-.012.021a8.253,8.253,0,0,0-1.225,2.291l-4.413,8.205V54.327l1.339-3.335a4.518,4.518,0,0,1,.992-1.521,4.77,4.77,0,0,1,3.381-1.424H39l5.387,9.877a.943.943,0,0,0,1.655,0l2-3.667V66.9a.943.943,0,0,0,.758.924l3.955.791v3.94h1.885V68.99l3.606.72c.024,0,.133.015.164.015H60.2l.181.337a3.818,3.818,0,0,0,3.578,2.49,3.547,3.547,0,0,0,.621-.051,3.82,3.82,0,0,0,2.95-2.461l2.507-.418h0a1.877,1.877,0,0,0,1.571-1.763l.189-.038a.943.943,0,0,0,.758-.924V50.874A.943.943,0,0,0,72.22,50.156Zm-31.175-2.3a2.264,2.264,0,0,0,1.347-2.067V42.9a9.43,9.43,0,0,0,5.655,0v2.885a2.264,2.264,0,0,0,1.346,2.067l-1.134,2.081H42.179Zm4.174-6.4a7.549,7.549,0,0,1-7.54-7.54v-4.22a13.769,13.769,0,0,0,4.079-4.67,24.415,24.415,0,0,0,11,4.981v3.909a7.549,7.549,0,0,1-7.54,7.54Zm12.738,8.038.017.018a4.368,4.368,0,0,1,.978,1.509l.4,1.022a4.287,4.287,0,0,0-1.692-.672l-7.372-1.229,1.14-2.09h3.145A4.67,4.67,0,0,1,57.957,49.487Zm.551,5.158-4.289-.858-4.289-.858v-.943l7.424,1.237a2.387,2.387,0,0,1,1.811,1.421Zm4.736-1.42,7.424-1.237v.943l-4.433.887-4.143.828h-.658a2.387,2.387,0,0,1,1.81-1.42Zm-43.3.923-1.534-.767a.938.938,0,0,1-.521-.843v-2.66a.188.188,0,0,1,.273-.169l.939.47a6.631,6.631,0,0,0,2.951.7h3.378a.943.943,0,0,0,.843-1.364l-.863-1.726a.891.891,0,0,1,.581-1.263h0a.894.894,0,0,1,1.043.533l1.223,3.058v4.531H22.048a4.736,4.736,0,0,1-2.108-.5Zm8.313,2.383v1.885h-3.77V56.53ZM23.8,68.267l.613-7.967h3.84v8.138a2.231,2.231,0,0,1-2.068,2.222.963.963,0,0,0-.106.005l-.055,0a2.229,2.229,0,0,1-2.223-2.4ZM35.808,55.235a.942.942,0,0,1,.06-.073l-.057.074Zm-3.259-8.183-.108-.969a13.514,13.514,0,0,1,1.013-6.836A15.311,15.311,0,0,0,34.7,33.173c0-.263-.01-.522-.02-.781l-.16-3.262a10.715,10.715,0,1,1,21.416-.538c0,.166-.009.347-.018.538l-.16,3.259a15.506,15.506,0,0,0,1.224,6.856,13.509,13.509,0,0,1,1.1,5.332A14.441,14.441,0,0,1,58,46.086l-.107.971a6.592,6.592,0,0,0-3.311-.9h-4.27a.382.382,0,0,1-.377-.377V42.066a9.429,9.429,0,0,0,4.713-8.157V29.2a.943.943,0,0,0-.809-.933,22.535,22.535,0,0,1-11.248-5l-.535-.446a.943.943,0,0,0-1.446.3l-.365.73a11.874,11.874,0,0,1-4.027,4.562.943.943,0,0,0-.42.784v4.713a9.429,9.429,0,0,0,4.713,8.157v3.719a.382.382,0,0,1-.377.377H35.85a6.64,6.64,0,0,0-3.3.89ZM45.219,55.5l-2.011-3.687H47.23Zm4.713-.652,7.54,1.508V67.633l-7.54-1.508Zm9.425,1.678h1.885V67.84H59.357Zm4.9,14.115a1.685,1.685,0,0,1-.3.024,1.931,1.931,0,0,1-1.661-.95l.053-.008.021,0h.008l1.938-.388a1.86,1.86,0,0,0,.949.826A1.965,1.965,0,0,1,64.255,70.644Zm5.471-2.881h0l-3.77.628v-3.5a.284.284,0,0,1,.238-.281l3.2-.534a.309.309,0,0,1,.048,0,.285.285,0,0,1,.283.285v3.408Zm-.641-5.548-3.2.533a2.163,2.163,0,0,0-1.813,2.14v2.557l-.943.189V56.36l7.54-1.508v7.715a2.163,2.163,0,0,0-1.584-.352Z"
                                        fill="#fff" />
                                </g>
                            </svg>

                        </div>
                        <div class="university-couner-text">
                            <span class="counter">470</span><span>+</span>
                                @if (App::getLocale() == 'en')

                            <p>Online Course</p>
                            @else
                             <p> كورسات اون لاين </p>
 
@endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.118" height="56.553"
                                viewBox="0 0 59.118 56.553">
                                <g id="reading" transform="translate(-17.25 -19.635)">
                                    <path id="Path_7710" data-name="Path 7710"
                                        d="M57.458,19.635a11.251,11.251,0,0,0-10.1,16.208,1.1,1.1,0,0,0,.658.565l9.1,2.89a1.1,1.1,0,0,0,.669,0l9.1-2.89a1.1,1.1,0,0,0,.658-.565,11.251,11.251,0,0,0-10.1-16.208Zm8.3,14.815-8.3,2.632-8.3-2.635a9.035,9.035,0,1,1,16.61,0Z"
                                        transform="translate(-10.649)" fill="#fff" />
                                    <path id="Path_7711" data-name="Path 7711"
                                        d="M49.361,42.825,24.721,35.01a1.107,1.107,0,0,0-1.441,1.055V50.506a1.106,1.106,0,0,0,1.106,1.106h.936a1.767,1.767,0,0,1,1.764,1.764v3.282a1.767,1.767,0,0,1-1.764,1.764h-.936a1.107,1.107,0,0,0-1.106,1.106V72.9a1.106,1.106,0,0,0,.771,1.053l24.64,7.815a1.106,1.106,0,0,0,1.441-1.055V43.878A1.107,1.107,0,0,0,49.361,42.825ZM47.92,79.2,25.493,72.089V60.63A3.983,3.983,0,0,0,29.3,56.656V53.375A3.983,3.983,0,0,0,25.493,49.4V37.577L47.92,44.69Z"
                                        transform="translate(-2.217 -5.635)" fill="#fff" />
                                    <path id="Path_7712" data-name="Path 7712"
                                        d="M88.648,35.169a1.1,1.1,0,0,0-.988-.162L63.022,42.824a1.107,1.107,0,0,0-.772,1.055V80.715a1.106,1.106,0,0,0,1.441,1.055l24.64-7.815A1.106,1.106,0,0,0,89.1,72.9V59.525A1.107,1.107,0,0,0,88,58.419h-.936A1.767,1.767,0,0,1,85.3,56.655V53.373a1.767,1.767,0,0,1,1.764-1.764H88A1.106,1.106,0,0,0,89.1,50.5V36.061a1.105,1.105,0,0,0-.455-.893ZM86.89,49.4a3.983,3.983,0,0,0-3.806,3.973v3.282a3.983,3.983,0,0,0,3.806,3.974v11.46L64.463,79.2V44.686L86.89,37.576Z"
                                        transform="translate(-16.547 -5.633)" fill="#fff" />
                                    <path id="Path_7713" data-name="Path 7713"
                                        d="M23.1,57.8H21.227a3.983,3.983,0,0,0-3.977,3.977v3.282a3.983,3.983,0,0,0,3.977,3.977H23.1a3.983,3.983,0,0,0,3.977-3.977V61.777A3.983,3.983,0,0,0,23.1,57.8Zm1.764,7.259A1.767,1.767,0,0,1,23.1,66.823H21.227a1.766,1.766,0,0,1-1.764-1.764V61.777a1.766,1.766,0,0,1,1.764-1.764H23.1a1.767,1.767,0,0,1,1.764,1.764Z"
                                        transform="translate(0 -14.034)" fill="#fff" />
                                    <path id="Path_7714" data-name="Path 7714"
                                        d="M101.055,57.8H99.177A3.983,3.983,0,0,0,95.2,61.777v3.282a3.983,3.983,0,0,0,3.977,3.977h1.878a3.983,3.983,0,0,0,3.977-3.977V61.777A3.983,3.983,0,0,0,101.055,57.8Zm1.764,7.259a1.766,1.766,0,0,1-1.764,1.764H99.177a1.767,1.767,0,0,1-1.764-1.764V61.777a1.767,1.767,0,0,1,1.764-1.764h1.878a1.766,1.766,0,0,1,1.764,1.764Z"
                                        transform="translate(-28.664 -14.034)" fill="#fff" />
                                    <g id="Group_2954" data-name="Group 2954" transform="translate(26.125 38.943)">
                                        <path id="Path_7715" data-name="Path 7715"
                                            d="M85.544,50.224l-14.514,4.6a1.106,1.106,0,1,0,.668,2.109l14.514-4.6a1.106,1.106,0,1,0-.668-2.109Z"
                                            transform="translate(-45.617 -50.172)" fill="#fff" />
                                        <path id="Path_7716" data-name="Path 7716"
                                            d="M81.228,62.395l-10.2,3.235a1.107,1.107,0,1,0,.67,2.109L81.9,64.5a1.107,1.107,0,1,0-.67-2.109Z"
                                            transform="translate(-45.617 -54.647)" fill="#fff" />
                                        <path id="Path_7717" data-name="Path 7717"
                                            d="M82.424,73.184,71.03,76.8a1.106,1.106,0,0,0,.334,2.161,1.12,1.12,0,0,0,.334-.052l11.394-3.613a1.106,1.106,0,1,0-.668-2.11Z"
                                            transform="translate(-45.618 -58.614)" fill="#fff" />
                                        <path id="Path_7718" data-name="Path 7718"
                                            d="M85.544,83.49l-14.514,4.6a1.106,1.106,0,0,0,.334,2.161A1.121,1.121,0,0,0,71.7,90.2l14.514-4.6a1.106,1.106,0,0,0-.668-2.109Z"
                                            transform="translate(-45.618 -62.404)" fill="#fff" />
                                        <path id="Path_7719" data-name="Path 7719"
                                            d="M47.242,54.827l-14.514-4.6a1.106,1.106,0,1,0-.668,2.109l14.514,4.6a1.106,1.106,0,1,0,.668-2.109Z"
                                            transform="translate(-31.287 -50.172)" fill="#fff" />
                                        <path id="Path_7720" data-name="Path 7720"
                                            d="M49.752,65.629l-10.2-3.235a1.106,1.106,0,1,0-.67,2.109l10.2,3.235a1.107,1.107,0,1,0,.67-2.109Z"
                                            transform="translate(-33.797 -54.647)" fill="#fff" />
                                        <path id="Path_7721" data-name="Path 7721"
                                            d="M49.056,76.8,37.662,73.184a1.106,1.106,0,1,0-.669,2.109l11.394,3.613a1.12,1.12,0,0,0,.334.052,1.106,1.106,0,0,0,.334-2.161Z"
                                            transform="translate(-33.101 -58.614)" fill="#fff" />
                                        <path id="Path_7722" data-name="Path 7722"
                                            d="M47.242,88.093l-14.514-4.6A1.106,1.106,0,1,0,32.06,85.6l14.514,4.6a1.12,1.12,0,0,0,.334.052,1.106,1.106,0,0,0,.334-2.161Z"
                                            transform="translate(-31.287 -62.404)" fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="university-couner-text">
                            <span class="counter">65</span>
    @if (App::getLocale() == 'en')

                            <p>Article</p>
                            @else
                             <p> عدد المقالات </p>
 
@endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--counter-area-end -->
      <!-- campus-area-start -->
      <div class="campus-area fix pt-120 pb-70 ">
        <div class="container">
            <div class="campus-wrapper position-relative">
                <div class="campus-shape-sticker">
                    <div class="shape-light">
                        <img src="{{ asset('assets/user/img/shape/shape-light.png')}}" alt="image not found">
                    </div>
                    <div class="campus-shape-content">
                        <h5>      {{ $settings["fifth_section"][app()->getLocale()]['text_photos'] }}
                        </h5>
                    </div>
                </div>
                <div class="campus-shape-1">
                    <img src="{{ asset('assets/user/img/shape/campus-shape-2.png')}}" alt="shape">
                </div>
                <div class="campus-shape-2">
                    <img src="{{ asset('assets/user/img/shape/student-shape-05.png')}}" alt="shape">
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="compus-content mb-30" style="
                        margin-top: 55px;
                        margin-bottom: 55px;
                    ">
                            <div class="section-title mb-30" >
                                <h2>{{ $settings['fifth_section'][app()->getLocale()]['title'] }}</h2>
                            </div>
                     <p>       {!! $settings['fifth_section'][app()->getLocale()]['description'] !!} </p>
                            <ul>
                                @foreach ( $settings["fifth_section"][app()->getLocale()]['feachers'] as $item)

                                <li><i class="far fa-check"></i>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="campus-img-wrapper position-relative">
                            <div class="campus-shape-3">
                                <img src="{{ asset('assets/user/img/shape/campus-shape-1.png')}}" alt="image not found">
                            </div>
                            @foreach ( $settings["fifth_section"][app()->getLocale()]['images'] as $item)

                            <div class="campus-img-{{$loop->iteration}}">
                                <img width="250px" src="{{ asset( $item) }}" alt="image not found">
                            </div>
                                @endforeach
                            {{--  <div class="campus-img-2">
                                <img src="{{ asset('assets/user/img/campus/campus-img-2.png')}}" alt="image not found">
                            </div>
                            <div class="campus-img-3">
                                <img src="{{ asset('assets/user/img/campus/campus-img-3.png')}}" alt="image not found">
                            </div>
                            <div class="campus-img-4">
                                <img src="{{ asset('assets/user/img/campus/campus-img-4.png')}}" alt="image not found">
                            </div>
                            <div class="campus-img-5">
                                <img src="{{ asset('assets/user/img/campus/campus-img-5.png')}}" alt="image not found">
                            </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- campus-area-end -->

        </main>
@endsection





@section('js')

<script data-cfasync="false">
    var swarmoptions = {
        swarmcdnkey: "d0474def-2c8e-4cc2-99bf-80504a2846d2",
        iframeReplacement: "iframe",
        autoreplace: {
            youtube: true
        }
    };
</script>
<script async data-cfasync="false" src="https://assets.swarmcdn.com/cross/swarmdetect.js"></script>
@endsection


