@extends('frontend.layouts.layout')


@section('beforefiles')

    <link rel="stylesheet" href="{{ asset('assets/profile-assets/css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/profile-assets/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/profile-assets/css/transition-animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/profile-assets/css/jquery.mCustomScrollbar.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/profile-assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/profile-assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/profile-assets/css/main-blue.css') }}" type="text/css">

    <!-- This styles needs for demo -->
    <link rel="stylesheet" href="{{ asset('assets/profile-assets/preview/lmpixels-demo-panel.css') }}" type="text/css">
    <script src="{{ asset('assets/profile-assets/js/modernizr.custom.js') }}"></script>
    <style>
        .subpages{
            height: 600px;
        }
    </style>
@endsection
@section('content')


            {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">{{ trans('navs.frontend.user.account') }}</div>--}}

            {{--<div class="panel-body">--}}

            {{--<div role="tabpanel">--}}

            {{--<!-- Nav tabs -->--}}
            {{--<ul class="nav nav-tabs" role="tablist">--}}
            {{--<li role="presentation" class="active">--}}
            {{--<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('navs.frontend.user.profile') }}</a>--}}
            {{--</li>--}}

            {{--<li role="presentation">--}}
            {{--<a href="#edit" aria-controls="edit" role="tab" data-toggle="tab">{{ trans('labels.frontend.user.profile.update_information') }}</a>--}}
            {{--</li>--}}

            {{--@if ($logged_in_user->canChangePassword())--}}
            {{--<li role="presentation">--}}
            {{--<a href="#password" aria-controls="password" role="tab" data-toggle="tab">{{ trans('navs.frontend.user.change_password') }}</a>--}}
            {{--</li>--}}
            {{--@endif--}}
            {{--</ul>--}}

            {{--<div class="tab-content">--}}

            {{--<div role="tabpanel" class="tab-pane mt-30 active" id="profile">--}}
            {{--@include('frontend.user.account.tabs.profile')--}}
            {{--</div><!--tab panel profile-->--}}

            {{--<div role="tabpanel" class="tab-pane mt-30" id="edit">--}}
            {{--@include('frontend.user.account.tabs.edit')--}}
            {{--</div><!--tab panel profile-->--}}

            {{--@if ($logged_in_user->canChangePassword())--}}
            {{--<div role="tabpanel" class="tab-pane mt-30" id="password">--}}
            {{--@include('frontend.user.account.tabs.change-password')--}}
            {{--</div><!--tab panel change password-->--}}
            {{--@endif--}}

            {{--</div><!--tab content-->--}}

            {{--</div><!--tab panel-->--}}

            {{--</div><!--panel body-->--}}

            {{--</div><!-- panel -->--}}
<div id="page">
            <div id="profilePage">
                <input type="hidden" value="{{$id}}" id="id">
                <input type="hidden" value="{{$authId}}" id="authId">
            <div class="preloader">
                <div class="preloader-animation">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
            <!-- /Loading animation -->

                <div  class="page">
                    <!-- Header -->
                    <header id="site_header" class="header mobile-menu-hide header-color-light">
                        <div class="my-photo tilt-effect">

                            <img v-if="resume.photo == ''" src="{{ asset('assets/profile-assets/images/zaineb.jpg')}}" alt="image" class="img">
                            <img v-if="resume.photo != ''" v-bind:src="resume.photo" alt="image" class="img">
                        </div>

                        <div class="site-title-block">
                            <h1 class="site-title">Zaineb Madyouni</h1>
                        </div>

                        <!-- Navigation -->
                        <div class="site-nav">
                            <!-- Main menu -->
                            <ul id="nav" class="site-main-menu">
                                <li>
                                    <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>Home</a><!-- href value = data-id without # of .pt-page. -->
                                </li>
                                <li>
                                    <a class="pt-trigger" href="#about_me" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-user"></i>About me</a>
                                </li>
                                <li>
                                    <a class="pt-trigger" href="#resume" data-animation="18"><i class="menu-icon pe-7s-icon pe-7s-id"></i>Resume</a>
                                </li>
                                <li>
                                    <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Projects</a>
                                </li>
                                <li>
                                    <a class="pt-trigger" href="#contact" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-mail"></i>Expertises</a>
                                </li>
                            </ul>
                            <!-- /Main menu -->
                        </div>
                        <!-- Navigation -->
                    </header>
                    <!-- /Header -->

                    <!-- Mobile Header -->
                    <div class="mobile-header mobile-visible">
                        <div class="mobile-logo-container">
                            <div class="mobile-site-title">Zaineb Madyouni</div>
                        </div>

                        <a class="menu-toggle mobile-visible">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <!-- /Mobile Header -->

                    <!-- Main Content -->
                    <div id="main" class="site-main">
                        <!-- Page changer wrapper -->
                        <div class="pt-wrapper" style="background-image: url({{ asset('assets/profile-assets/images/bg.png') }});">
                            <!-- Subpages -->
                            <div class="subpages">

                                <!-- Home Subpage -->
                                <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
                                    <div class="section-inner">
                                        <div class="home-page-block">
                                            <h2>Zaineb Madyouni</h2>

                                            <div class="owl-carousel text-rotation">
                                                <div class="item">
                                                    <p class="home-page-description">Architect</p>
                                                </div>
                                                <div class="item">
                                                    <p class="home-page-description">Urban planner</p>
                                                </div>
                                                <div class="item">
                                                    <p class="home-page-description">Researcher</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- End of Home Subpage -->

                                <!-- About Me Subpage -->
                                <section class="pt-page pt-page-2" data-id="about_me">
                                    <div class="border-block-top-110"></div>
                                    <div class="section-inner">
                                        <div class="section-title-block">
                                            <div class="section-title-wrapper clearfix">
                                                <h2 class="section-title">About Me</h2>
                                                <h5 class="section-description">Architect, urban planner and researcher</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                                <div class="my-photo-block tilt-effect">
                                                    <img src="{{ asset('assets/profile-assets/images/zaineb.jpg')}}" alt="" class="img">

                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-4">
                                                <h3>I am an Architect</h3>
                                                <ul class="info-list">
                                                <li><span class="title">Vision as architect :</span></li>
                                                    </ul>
                                                <p>@{{ resume.vision_architect }}</p>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                                                <ul class="info-list">
                                                    <li><span class="title">Country</span><span class="value">Tunisia</span></li>
                                                    <li><span class="title">Address</span><span class="value">Adresse</span></li>
                                                    <li><span class="title">e-mail</span><span class="value"><a href="mailto:email@example.com">@{{ resume.email }}</a></span></li>
                                                    <li><span class="title">Phone</span><span class="value">+216 00 000 000</span></li>
                                                    <li><span class="title">Skype</span><span class="value">zaineb</span></li>
                                                    <li><span class="title">Professional status</span><span class="value available">self-employed</span></li>
                                                </ul>

                                                <ul class="social-links">
                                                    <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                                                    <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                                    <li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                                                    <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
                                                </ul>
                                            </div>
                                        </div>

                                        {{--<!-- Services block -->--}}
                                        {{--<div class="block-title">--}}
                                            {{--<h3>Services</h3>--}}
                                        {{--</div>--}}

                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6 col-md-3 subpage-block">--}}
                                                {{--<div class="service-block">--}}
                                                    {{--<div class="service-info">--}}
                                                        {{--<img src="{{ asset('assets/profile-assets/images/service/web_design_icon.png') }}" alt="Responsive Design">--}}
                                                        {{--<h4>Web Design</h4>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6 col-md-3 subpage-block">--}}
                                                {{--<div class="service-block">--}}
                                                    {{--<div class="service-info">--}}
                                                        {{--<img src="{{ asset('assets/profile-assets/images/service/photography_icon.png')}}" alt="Photography">--}}
                                                        {{--<h4>Photography</h4>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6 col-md-3 subpage-block">--}}
                                                {{--<div class="service-block">--}}
                                                    {{--<div class="service-info">--}}
                                                        {{--<img src="{{ asset('assets/profile-assets/images/service/creativity_icon.png') }}" alt="Creativity">--}}
                                                        {{--<h4>Creativity</h4>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6 col-md-3 subpage-block">--}}
                                                {{--<div class="service-block">--}}
                                                    {{--<div class="service-info">--}}
                                                        {{--<img src="{{ asset('assets/profile-assets/images/service/advetising_icon.png') }}" alt="Advetising">--}}
                                                        {{--<h4>Advetising</h4>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End of Services block -->--}}

                                        {{--<!-- Clients block -->--}}
                                        {{--<div class="block-title">--}}
                                            {{--<h3>Clients</h3>--}}
                                        {{--</div>--}}

                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-4 col-md-2 subpage-block">--}}
                                                {{--<div class="client-block">--}}
                                                    {{--<a href="#" target="_blank"><img src="{{ asset('assets/profile-assets/images/clients/client_1.png') }}" alt="image"></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-4 col-md-2 subpage-block">--}}
                                                {{--<div class="client-block">--}}
                                                    {{--<a href="#" target="_blank"><img src="{{ asset('assets/profile-assets/images/clients/client_2.png') }}" alt="image"></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-4 col-md-2 subpage-block">--}}
                                                {{--<div class="client-block">--}}
                                                    {{--<a href="#" target="_blank"><img src="{{ asset('assets/profile-assets/images/clients/client_3.png') }}" alt="image"></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-4 col-md-2 subpage-block">--}}
                                                {{--<div class="client-block">--}}
                                                    {{--<a href="#" target="_blank"><img src="{{ asset('assets/profile-assets/images/clients/client_4.png') }}" alt="image"></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-4 col-md-2 subpage-block">--}}
                                                {{--<div class="client-block">--}}
                                                    {{--<a href="#" target="_blank"><img src="{{ asset('assets/profile-assets/images/clients/client_5.png') }}" alt="image"></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-4 col-md-2 subpage-block">--}}
                                                {{--<div class="client-block">--}}
                                                    {{--<a href="#" target="_blank"><img src="{{ asset('assets/profile-assets/images/clients/client_6.png') }}" alt="image"></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End of Clients block -->--}}

                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12 col-md-12 subpage-block">--}}
                                                {{--<div class="block-title">--}}
                                                    {{--<h3>Testimonials</h3>--}}
                                                {{--</div>--}}
                                                {{--<div class="testimonials owl-carousel">--}}
                                                    {{--<!-- Testimonial 1 -->--}}
                                                    {{--<div class="testimonial-item">--}}
                                                        {{--<!-- Testimonial Content -->--}}
                                                        {{--<div class="testimonial-content">--}}
                                                            {{--<div class="testimonial-text">--}}
                                                                {{--<p>"Phasellus eu nunc tincidunt, ultricies elit vitae, pretium eros. Sed sed ipsum sed massa."</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- /Testimonial Content -->--}}
                                                        {{--<!-- Testimonial Author -->--}}
                                                        {{--<div class="testimonial-credits">--}}
                                                            {{--<!-- Picture -->--}}
                                                            {{--<div class="testimonial-picture">--}}
                                                                {{--<img src="{{ asset('assets/profile-assets/images/testimonials/testimonial_photo_1.jpg') }}" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--<!-- /Picture -->--}}
                                                            {{--<!-- Testimonial author information -->--}}
                                                            {{--<div class="testimonial-author-info">--}}
                                                                {{--<p class="testimonial-author">Maria Richardson</p>--}}
                                                                {{--<p class="testimonial-firm">Lindsley's Lumber</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- /Testimonial author information -->--}}
                                                    {{--</div>--}}
                                                    {{--<!-- End of Testimonial 1 -->--}}

                                                    {{--<!-- Testimonial 2 -->--}}
                                                    {{--<div class="testimonial-item">--}}
                                                        {{--<!-- Testimonial Content -->--}}
                                                        {{--<div class="testimonial-content">--}}
                                                            {{--<div class="testimonial-text">--}}
                                                                {{--<p>"Vivamus porta dapibus tristique. Suspendisse et arcu eget nisi convallis eleifend nec ac lorem."</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- /Testimonial Content -->--}}
                                                        {{--<!-- Testimonial Author -->--}}
                                                        {{--<div class="testimonial-credits">--}}
                                                            {{--<!-- Picture -->--}}
                                                            {{--<div class="testimonial-picture">--}}
                                                                {{--<img src="{{ asset('assets/profile-assets/images/testimonials/testimonial_photo_2.jpg') }}" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--<!-- /Picture -->--}}
                                                            {{--<!-- Testimonial author information -->--}}
                                                            {{--<div class="testimonial-author-info">--}}
                                                                {{--<p class="testimonial-author">John Doe</p>--}}
                                                                {{--<p class="testimonial-firm">Apple Inc.</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- /Testimonial author information -->--}}
                                                    {{--</div>--}}
                                                    {{--<!-- End of Testimonial 2 -->--}}

                                                    {{--<!-- Testimonial 3 -->--}}
                                                    {{--<div class="testimonial-item">--}}
                                                        {{--<!-- Testimonial Content -->--}}
                                                        {{--<div class="testimonial-content">--}}
                                                            {{--<div class="testimonial-text">--}}
                                                                {{--<p>"Aliquam congue auctor lectus sed fermentum. Nulla ultricies tellus quis sapien lacinia egestas."</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- /Testimonial Content -->--}}
                                                        {{--<!-- Testimonial Author -->--}}
                                                        {{--<div class="testimonial-credits">--}}
                                                            {{--<!-- Picture -->--}}
                                                            {{--<div class="testimonial-picture">--}}
                                                                {{--<img src="{{ asset('assets/profile-assets/images/testimonials/testimonial_photo_3.jpg')}}" alt="">--}}
                                                            {{--</div>--}}
                                                            {{--<!-- /Picture -->--}}
                                                            {{--<!-- Testimonial author information -->--}}
                                                            {{--<div class="testimonial-author-info">--}}
                                                                {{--<p class="testimonial-author">George McQueen</p>--}}
                                                                {{--<p class="testimonial-firm">Harmony House</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- /Testimonial author information -->--}}
                                                    {{--</div>--}}
                                                    {{--<!-- End of Testimonial 3 -->--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<!-- Fun facts block -->--}}
                                        {{--<div class="block-title">--}}
                                            {{--<h3>Fun Facts</h3>--}}
                                        {{--</div>--}}

                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6 col-md-3 subpage-block">--}}
                                                {{--<div class="fun-fact-block gray-bg tilt-effect">--}}
                                                    {{--<i class="pe-7s-icon pe-7s-smile"></i>--}}
                                                    {{--<h4>Happy Clients</h4>--}}
                                                    {{--<span class="fun-value">1,024</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6 col-md-3 subpage-block tilt-effect">--}}
                                                {{--<div class="fun-fact-block">--}}
                                                    {{--<i class="pe-7s-icon pe-7s-alarm"></i>--}}
                                                    {{--<h4>Working Hours</h4>--}}
                                                    {{--<span class="fun-value">6,256</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6 col-md-3 subpage-block tilt-effect">--}}
                                                {{--<div class="fun-fact-block gray-bg">--}}
                                                    {{--<i class="pe-7s-icon pe-7s-medal"></i>--}}
                                                    {{--<h4>Awards Won</h4>--}}
                                                    {{--<span class="fun-value">21</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6 col-md-3 subpage-block tilt-effect">--}}
                                                {{--<div class="fun-fact-block">--}}
                                                    {{--<i class="pe-7s-icon pe-7s-coffee"></i>--}}
                                                    {{--<h4>Coffee Consumed</h4>--}}
                                                    {{--<span class="fun-value">20,000</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- End of Fun fucts block -->--}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button v-if="id == authId" type="button" class="btn btn-info btn-xs" style="float: right;" data-toggle="modal" data-target="#resumeModal"><i class="fa fa-edit"></i> Update profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- End of About Me Subpage -->

                                <!-- Resume Subpage -->
                                <section class="pt-page pt-page-3" data-id="resume">
                                    <div class="border-block-top-110"></div>
                                    <div class="section-inner">
                                        <div class="section-title-block">
                                            <div class="section-title-wrapper">
                                                <h2 class="section-title">Resume</h2>
                                                <h5 class="section-description">Years of Experience</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 subpage-block">
                                                <div class="block-title">
                                                    <h3>Education <button v-if="id == authId" class="btn btn-xs btn-info" data-toggle="modal" data-target="#educationModal"><i class="fa fa-edit"></i> Update</button></h3>
                                                </div>
                                                <div class="timeline">
                                                    <!-- Single event -->
                                                    {{--<div class="timeline-event te-primary" v-for="(education, index) in educations">--}}
                                                        {{--<h5 class="event-date">@{{ education.start_date }} - @{{ education.end_date }}</h5>--}}
                                                        {{--<h4 class="event-name">@{{ education.diploma }}</h4>--}}
                                                        {{--<span class="event-description">@{{ education.university }}</span>--}}
                                                        {{--<!--<p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->--}}
                                                    {{--</div>--}}
                                                    <div class="timeline-event te-primary" >
                                                        <h5 class="event-date">2004 - 2010</h5>
                                                        <h4 class="event-name">Diplôme national d'Architecte - Ingénierie architecturale</h4>
                                                        <span class="event-description">Ecole Nationale d'architecture et d'urbanisme</span>
                                                        <!--<p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                                                    </div>
                                                    <div class="timeline-event te-primary" >
                                                        <h5 class="event-date">2011 - 2013</h5>
                                                        <h4 class="event-name">Master of Science (M.Sc.) - Integrated Urbanism and Sustainable Design</h4>
                                                        <span class="event-description">Universität Stuttgart</span>
                                                        <!--<p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                                                    </div>
                                                    <div class="timeline-event te-primary" >
                                                        <h5 class="event-date">2015 - 2018</h5>
                                                        <h4 class="event-name">Doctor of Philosophy (PhD) - Ingénierie architecturale</h4>
                                                        <span class="event-description">Ecole Doctorale Sciences et Ingénierie Architecturales ENAU Tunis</span>
                                                        <!--<p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                                                    </div>
                                                    <!-- Single event -->

                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-8 subpage-block">
                                                <div class="block-title">
                                                    <h3>Experience <button v-if="id == authId" class="btn btn-xs btn-info" data-toggle="modal" data-target="#experienceModal"><i class="fa fa-edit"></i> Update</button></h3>
                                                </div>
                                                <div class="timeline">
                                                    <!-- Single event -->
                                                    {{--<div class="timeline-event te-primary" v-for="experience in experiences">--}}
                                                        {{--<h5 class="event-date">@{{ experience.date }}</h5>--}}
                                                        {{--<h4 class="event-name">@{{ experience.position }}</h4>--}}
                                                        {{--<span class="event-description">@{{ experience.employer }}</span>--}}
                                                        {{--<p>@{{ experience.responsabilities }}</p>--}}
                                                    {{--</div>--}}
                                                    <div class="timeline-event te-primary" >
                                                        <h5 class="event-date">oct.2016 - today</h5>
                                                        <h4 class="event-name">Administrative Coordinator</h4>
                                                        <span class="event-description">Africa Union of Architects (AUA)</span>
                                                        <p> • Managing Union projects and coordinating research,
                                                            • Managing the day-to-day operations of the AUA General Secretariat,
                                                            • Managing union’s website and publications,
                                                            • Developing and maintaining an efficient filing system,
                                                            • Organizing and maintaining archives, files and records,
                                                            • Maintaining contact lists (Member sections, Council members, etc…),
                                                            • Planning and scheduling meetings,
                                                            • Providing general support to Union’s staff and host countries for meeting organization,
                                                            • Preparing and editing reports, and presentations. </p>
                                                    </div>
                                                    <div class="timeline-event te-primary" >
                                                        <h5 class="event-date">sept.2015 - today</h5>
                                                        <h4 class="event-name">Co-founder Project Coordinator, Editorial Manager</h4>
                                                        <span class="event-description">Projet Journal de la Medina</span>
                                                        <p> Journal de la Medina" is a participatory journal created by the community for the community of the Medina (Old Town). It aims to shed light on neglected parts of the old town of Tunis and to weave together a community of people who share a common objective: to raise awareness of their particular cultural heritage and advocate its preservation. The journal tries to capture moments of current daily life of the Medina's community to show another image of this town within a town instead of its common "postcard-image</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="col-sm-6 col-md-4 subpage-block">
                                                <div class="block-title">
                                                    <h3>Skills</h3>
                                                </div>
                                                <div class="skills-info">
                                                    <h4>Urban Design</h4>
                                                    <div class="skill-container">
                                                        <div class="skill-percentage skill-1"></div>
                                                    </div>

                                                    <h4>Architectural Design</h4>
                                                    <div class="skill-container">
                                                        <div class="skill-percentage skill-2"></div>
                                                    </div>

                                                    <h4>Sustainable Design</h4>
                                                    <div class="skill-container">
                                                        <div class="skill-percentage skill-2"></div>
                                                    </div>
                                                </div>-->

                                                {{--<div class="block-title">--}}
                                                    {{--<h3>Coding Skills</h3>--}}
                                                {{--</div>--}}
                                                {{--<div class="skills-info">--}}
                                                    {{--<h4>HML5</h4>--}}
                                                    {{--<div class="skill-container">--}}
                                                        {{--<div class="skill-percentage skill-4"></div>--}}
                                                    {{--</div>--}}

                                                    {{--<h4>CSS3</h4>--}}
                                                    {{--<div class="skill-container">--}}
                                                        {{--<div class="skill-percentage skill-5"></div>--}}
                                                    {{--</div>--}}

                                                    {{--<h4>jQuery</h4>--}}
                                                    {{--<div class="skill-container">--}}
                                                        {{--<div class="skill-percentage skill-6"></div>--}}
                                                    {{--</div>--}}

                                                    {{--<h4>Wordpress</h4>--}}
                                                    {{--<div class="skill-container">--}}
                                                        {{--<div class="skill-percentage skill-7"></div>--}}
                                                    {{--</div>--}}

                                                    {{--<h4>PHP</h4>--}}
                                                    {{--<div class="skill-container">--}}
                                                        {{--<div class="skill-percentage skill-8"></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            <!--</div>-->
                                        </div>
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-12 col-md-12">--}}
                                                {{--<div class="download-cv-block">--}}
                                                    {{--<a class="button" data-target="#skillsModal" data-toggle="modal">Download CV</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </section>
                                <!-- End Resume Subpage -->


                                <!-- Portfolio Subpage -->
                                <section class="pt-page pt-page-4" data-id="portfolio">
                                    <div class="border-block-top-110"></div>
                                    <div class="section-inner">
                                        <div class="section-title-block">
                                            <div class="section-title-wrapper">
                                                <h2 class="section-title">Projects</h2>
                                                <h5 class="section-description">My Best Works</h5>
                                            </div>
                                        </div>

                                        <!-- Portfolio Content -->
                                        <div class="portfolio-content">



                                            <!-- Portfolio Grid -->
                                            <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                                                <!-- Portfolio Item 1 -->
                                                <figure class="item" data-groups='["all", "media"]'>
                                                    <a class="ajax-page-load" href="portfolio-1.html">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/1.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Media</small>
                                                            <i class="pe-7s-icon pe-7s-display2"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 1 -->

                                                <!-- Portfolio Item 2 -->
                                                <figure class="item" data-groups='["all", "video"]'>
                                                    <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Praesent Dolor Ex" class="lightbox mfp-iframe">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/2.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Video</small>
                                                            <i class="pe-7s-icon pe-7s-video"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 2 -->

                                                <!-- Portfolio Item 3 -->
                                                <figure class="item" data-groups='["all","illustration"]'>
                                                    <a href="{{ asset('assets/profile-assets/images/portfolio/3.jpg') }}" class="lightbox" title="Duis Eu Eros Viverra">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/3.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Illustration</small>
                                                            <i class="pe-7s-icon pe-7s-photo"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 3 -->

                                                <!-- Portfolio Item 4 -->
                                                <figure class="item" data-groups='["all", "media"]'>
                                                    <a class="ajax-page-load" href="portfolio-2.html">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/4.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Media</small>
                                                            <i class="pe-7s-icon pe-7s-display2"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 4 -->

                                                <!-- Portfolio Item 5 -->
                                                <figure class="item" data-groups='["all", "illustration"]'>
                                                    <a href="{{ asset('assets/profile-assets/images/portfolio/5.jpg') }}" class="lightbox" title="Aliquam Condimentum Magna Rhoncus">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/5.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Illustration</small>
                                                            <i class="pe-7s-icon pe-7s-photo"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 5 -->

                                                <!-- Portfolio Item 6 -->
                                                <figure class="item" data-groups='["all", "media"]'>
                                                    <a class="ajax-page-load" href="portfolio-3.html">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/6.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Media</small>
                                                            <i class="pe-7s-icon pe-7s-display2"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 6 -->

                                                <!-- Portfolio Item 7 -->
                                                <figure class="item" data-groups='["all", "video"]'>
                                                    <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Nulla Facilisi" class="lightbox mfp-iframe">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/7.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Video</small>
                                                            <i class="pe-7s-icon pe-7s-video"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 7 -->

                                                <!-- Portfolio Item 8 -->
                                                <figure class="item" data-groups='["all",  "media"]'>
                                                    <a class="ajax-page-load" href="portfolio-4.html">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/8.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Media</small>
                                                            <i class="pe-7s-icon pe-7s-display2"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 8 -->

                                                <!-- Portfolio Item 9 -->
                                                <figure class="item" data-groups='["all","illustration"]'>
                                                    <a href="images/portfolio/full/9.jpg" class="lightbox" title="Mauris Neque Dolor">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/9.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Illustration</small>
                                                            <i class="pe-7s-icon pe-7s-photo"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 9 -->

                                                <!-- Portfolio Item 10 -->
                                                <figure class="item" data-groups='["all", "video"]'>
                                                    <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/10.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Video</small>
                                                            <i class="pe-7s-icon pe-7s-video"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 10 -->

                                                <!-- Portfolio Item 11 -->
                                                <figure class="item" data-groups='["all","illustration"]'>
                                                    <a href="images/portfolio/full/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/11.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Illustration</small>
                                                            <i class="pe-7s-icon pe-7s-photo"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 11 -->

                                                <!-- Portfolio Item 12 -->
                                                <figure class="item" data-groups='["all","media"]'>
                                                    <a class="ajax-page-load" href="portfolio-5.html">
                                                        <img src="{{ asset('assets/profile-assets/images/portfolio/12.jpg') }}" alt="">
                                                        <div>
                                                            <h5 class="name">Project Name</h5>
                                                            <small>Media</small>
                                                            <i class="pe-7s-icon pe-7s-display2"></i>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <!-- /Portfolio Item 12 -->
                                            </div>
                                            <!-- /Portfolio Grid -->

                                        </div>
                                        <!-- /Portfolio Content -->
                                    </div>
                                </section>
                                <!-- /Portfolio Subpage -->

                                <!-- Contact Subpage -->
                                <section class="pt-page pt-page-5" data-id="contact">
                                    <div class="border-block-top-110"></div>
                                    <div class="section-inner">
                                        <div class="section-title-block">
                                            <div class="section-title-wrapper">
                                                <h2 class="section-title">Expertises</h2>
                                                <h5 class="section-description">My specialties</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-sm-6 col-md-3 subpage-block">
                                        <div class="service-block">
                                        <div class="service-info">
                                        <img src="{{ asset('assets/profile-assets/images/service/icon-tourism.png') }}" alt="Responsive Design" class="img">
                                        <h4>Tourism</h4>
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}

                                        </div>
                                        </div>
                                        </div>

                                            <div class="col-sm-6 col-md-3 subpage-block">
                                                <div class="service-block">
                                                    <div class="service-info">
                                                        <img src="{{ asset('assets/profile-assets/images/service/icon-school.png') }}" alt="Responsive Design" class="img">
                                                        <h4>Education</h4>
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-3 subpage-block">
                                                <div class="service-block">
                                                    <div class="service-info">
                                                        <img src="{{ asset('assets/profile-assets/images/service/healthcare-icon.jpg') }}" alt="Responsive Design" class="img">
                                                        <h4>Healthcare</h4>
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-3 subpage-block">
                                                <div class="service-block">
                                                    <div class="service-info">
                                                        <img src="{{ asset('assets/profile-assets/images/service/icon-housing.png') }}" alt="Responsive Design" class="img">
                                                        <h4>Housing</h4>
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </section>
                                <!-- End Contact Subpage -->

                            </div>
                        </div>
                        <!-- /Page changer wrapper -->
                    </div>
                    <!-- /Main Content -->
                </div>

                @include('frontend.userfeatures.parts.resume-modal')
                @include('frontend.userfeatures.parts.education-modal')
                @include('frontend.userfeatures.parts.experience-modal')
            </div>

            <a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right"><i class="fa fa-gear"></i></a>
            <div id="lm_demo_panel" class="lm-demo-panel right panel-color-red active">
                <div class="demo-panel-title">Template Style</div>
                <div id="t_style" class="demo-panel-options">
                    <a class="current-t-style t-style-switcher" data-id="template-style-light"><div class="preview w-border t-style t-style-light">Light</div></a>
                    <a class="t-style-switcher" data-id="template-style-dark"><div class="preview t-style t-style-dark">Dark</div></a>
                </div>

                <div class="demo-panel-title">Main Color</div>
                <div id="main_color" class="demo-panel-options">
                    <a data-id="red" class="current-main-color"><div class="preview color-1">&nbsp;</div></a>
                    <a data-id="blue"><div class="preview color-2">&nbsp;</div></a>
                    <a data-id="green"><div class="preview color-3">&nbsp;</div></a>
                    <a data-id="orange"><div class="preview color-4">&nbsp;</div></a>
                    <a data-id="yellow"><div class="preview color-5">&nbsp;</div></a>
                    <a data-id="violet"><div class="preview color-6">&nbsp;</div></a>
                </div>

                <div class="demo-panel-title">Nav Color</div>
                <div id="header_color" class="demo-panel-options">
                    <a class="current-h-color inverse h-color-switcher" data-id="header-color-light"><div class="preview h-color h-color-1 w-border">&nbsp;</div></a>
                    <a class="h-color-switcher" data-id="header-color-main"><div class="preview h-color h-color-2">&nbsp;</div></a>
                    <a class="h-color-switcher" data-id="header-color-dark"><div class="preview h-color h-color-3">&nbsp;</div></a>
                </div>


            </div>

    <!-- Modals -->
            <div class="modal fade" tabindex="-1" role="dialog" id="detailProjectModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Project Détails</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


    <!-- END MODALS-->


</div>
@endsection

@section('afterfiles')
    <script src="{{ asset('assets/profile-assets/js/pages-switcher.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/validator.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/profile-assets/js/profile.js') }}"></script>
    <!-- Demo Color changer Script -->
    <script src="{{ asset('assets/profile-assets/preview/lmpixels-demo-panel.js') }}"></script>
    <!-- /Demo Color changer Script -->

    <script>
        var profile = new Vue({
            el: '#profilePage',
            data(){
                return{
                    id : '',
                    authId: '',
                    resume : {
                        name: '',
                        surname: '',
                        vision_architect: '',
                        country: '',
                        email: '',
                        photo: '',
                    },
                    educations: [
                        {start_date : '', end_date: '', university: '', diploma: '', desription: ''},
                    ],
                    experiences: [
                        {date: '', employer: '', position: '', responsabilities: ''}
                    ]
                }
            },
            mounted(){
                var self = this;
                self.id = $('#id').val();
                self.authId = $('#authId').val();
                $.ajax({
                    url: '/api/userData',
                    method : 'get',
                    data: 'id = ' + self.id
                }).done(function (response) {
                    console.log(response.resume)
                    if(response){
                        self.resume.surname = response.resume.surname;
                        self.resume.name = response.resume.name;
                        self.resume.vision_architect = response.resume.vision_architect;
                        self.resume.country = response.resume.country;
                        self.resume.email = response.resume.email;
                        self.resume.photo = response.resume.photo?response.resume.photo.path : '';
                    }
                })

                if(self.id != self.authId){
                    $('#lm_demo_panel_switcher').hide()
                }else{
                    $('#lm_demo_panel_switcher').show()
                }
            },
            methods: {
                addExp(){
                    var self = this;
                    self.experiences.push({date: '', employer: '', position: '', responsabilities: ''})
                },
                addEduc(){
                    var self = this;
                    self.educations.push({start_date : '', end_date: '', university: '', diploma: '', desription: ''})
                }
            }
        })

    </script>
@endsection