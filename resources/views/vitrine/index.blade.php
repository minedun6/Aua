@extends('vitrine.layouts.master')
 @section('content')
    <div class="tp-banner-container">
        <div class="tp-banner-slider">
            <ul>
                <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="../../assets/frontend/rs-plugin/assets/loader.gif" data-bgfit="cover" data-bgposition="center 70%" data-lazyload="{{ asset('assets/frontend/pic/slider/main/kampala_15_3.jpg') }}" alt="" data-bgparallax="10">
                    <div data-x="['left','left','center','center']" data-hoffset="0" data-y="center" data-voffset="-5%" data-width="['470px','350px','250px','200px']" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content align-left">
                        <div class="sl-title-top">Kampala Aug15</div>
                        <div class="sl-title">Assemblée <span>Générale</span></div>
                        <a href="#" class="cws-button gray">Learn more</a>
                    </div>
                </li>
                <li data-masterspeed="700" data-transition="fade" data-slotamount="7"><img src="../../assets/frontend/rs-plugin/assets/loader.gif" data-bgfit="cover" data-lazyload="{{ asset('assets/frontend/pic/slider/main/Monrovia1.jpg') }}" data-bgposition="center 45%" alt="" data-bgparallax="10">
                    <div data-x="['left','left','center','center']" data-hoffset="0" data-y="center" data-voffset="-5%" data-width="['470px','350px','250px','200px']" data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content align-center">
                        <div class="sl-title-top">Monrovia Nov16</div>
                        <div class="sl-title">Council <span>Meeting</span></div>
                       <a href="#" class="cws-button gray">Learn more</a>
                    </div>
                </li>
                <li data-masterspeed="700" data-transition="fade" data-slotamount="7"><img src="../../assets/frontend/rs-plugin/assets/loader.gif" data-lazyload="{{ asset('assets/frontend/pic/slider/main/UCLGA1.jpg') }}" data-bgposition="center 67%" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                    <div data-x="['left','left','center','center']" data-hoffset="0" data-y="center" data-voffset="-5%" data-width="['470px','350px','250px','200px']" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content align-right">
                        <div class="sl-title-top text-white">Partnership</div>
                        <div class="sl-title text-white">Partnership <span>UCLGA</span></div>
                        <a href="#" class="cws-button white">Learn more</a>
                    </div>
                </li>
                <li data-masterspeed="700" data-transition="fade" data-slotamount="7"><img src="../../assets/frontend/rs-plugin/assets/loader.gif" data-lazyload="{{ asset('assets/frontend/pic/slider/main/UCLGA1.jpg') }}" data-bgposition="center 67%" alt="" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                    <div data-x="['left','left','center','center']" data-hoffset="0" data-y="center" data-voffset="-5%" data-width="['470px','350px','250px','200px']" data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content align-right">
                        <div class="sl-title-top text-white">Membership</div>
                        <div class="sl-title text-white">Join <span>us</span></div>
                        <a href="register" class="cws-button blue">Subscribe</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- page section-->
    <section class="page-section pb-0" id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 mb-20">
                    <h2 class="title-section mb0 mt-0 text-center">We Are The Africa Union of Architects </h2>
                    <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
                    <p class="text-center mb-30">The Africa Union of Architects was inaugurated in Nigeria on May 23 1981 by his Excellency Alhaji Shehu Shagari, former President of Nigeria , to unite architects from all over the continent regardless of nationality, race, religion or doctrine, and to federate their national organizations.</p>
                </div>
                <!-- service item-->
                <div class="col-sm-4 mb-sm-40">
                    <div class="service-item icon-center"><i class="flaticon-screen cws-icon type-1 color-2"></i>
                        <h3>High-performence</h3>
                        {{--<p class="mb-0">Donec quam felis, ultricies nec, pellentesque eu, bulsi pretium quis, sem massa quis enim.  <a href="#" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>--}}
                    </div>
                </div>
                <!-- service item-->
                <!-- ! service item-->
                <div class="col-sm-4 mb-sm-40">
                    <div class="service-item icon-center"><i class="flaticon-interface-3 cws-icon type-1 color-2"></i>
                        <h3>efficacity</h3>
                        {{--<p class="mb-0">In enim justo, rhoncus ut, imperdiet a, venenatis vitae justo moest ransu quis lorem. <a href="#" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>--}}
                    </div>
                </div>
                <!-- service item-->
                <!-- ! service item-->
                <div class="col-sm-4">
                    <div class="service-item icon-center"><i class="flaticon-time cws-icon type-1 color-2"></i>
                        <h3>swiftness</h3>
                        {{--<p class="mb-0">Nullam dictum felis eu pede mollis pretium. Integer daser tincidunt. Cras dapibus.  <a href="#" class="color-1 mt-10">Read More<span class="cws_divider short color-1"></span></a></p>--}}
                    </div>
                </div>
                <!-- ! service item-->
            </div>
            <div class="cws_divider with-plus long color-line-1 mt-80"></div>
        </div>
    </section>
    <!-- ! page section -->
    <!-- page section services-->
    <section class="page-section pt-80 pb-0" id="activities">
        <div class="container">
            <div class="row pb-100">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title-section mb0 mt-0 text-center">Our Activities</h2>
                    <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
                    <p class="text-center mb-30">Every three years, the Aua congress brings together hundreds of architects and students of architecture from all over the continent.</p>
                </div>
            </div>
        </div>
        <div class="page-section pb-0 pt-0 bg-gray">
            <div class="container">
                <div class="row pt-100 pb-0">
                    <div class="col-md-4 mb-md-40">
                        <div class="service-item icon-left mb-60 alt"><i class="flaticon-mark cws-icon"></i>
                            <h3>1982 Harare, Zimbabwe</h3>
                            <p class="mb-0">Phasellus viverra nulla ut metus varius laoreet, ultricies nisi vel augue uisque rutrum.</p>
                        </div>
                        <div class="service-item icon-left alt"><i class="flaticon-mark cws-icon"></i>
                            <h3>1989 Dakar, Senegal</h3>
                            <p class="mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus, ecenas tempus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 flex-item-end mb-md-40"><img src="{{ asset('assets/frontend/pic/activities.png') }}" alt class="mt-minus-170 mt-md-0"></div>
                    <div class="col-md-4 mb-md-40">
                        <div class="service-item icon-right mb-60 alt"><i class="flaticon-mark cws-icon"></i>
                            <h3>1981 Lagos, Nigeria</h3>
                            <p class="mb-0">Donec vitae sapien ut libero venenatis fauc ibus. Nullam quis ante. </p>
                        </div>
                        <div class="service-item icon-right alt"><i class="flaticon-mark cws-icon"></i>
                            <h3>1994 Nairobi, Kenya</h3>
                            <p class="mb-0">Duis leo. Sed fringilla mauris sit amet nibh, amet orci eget eros faucibus tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page section about-->
    <!-- call out section-->
    {{--<section class="page-section pt-0 pb-0 bg-main cws_prlx_section"><img src="pic/callout-bg.jpg" alt class="cws_prlx_layer">--}}
        {{--<div class="container">--}}
            {{--<div class="call-out-box clearfix with-icon">--}}
                {{--<div class="callout-wrap"><i class="flaticon-fashion"></i>--}}
                    {{--<div class="callout-content">--}}
                        {{--<p>Proway is a powerfull Wordpress theme for your business project.</p>--}}
                    {{--</div><a href="#" class="cws-button white mt-20">purchase now</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- ! call out section-->
    <!-- page section about-->
    {{--<section style="background-image:url(../../assets/frontend/pic/back-1.jpg);'" class="page-section bt-gray bg-n-rep bg-x-50">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 mb-md-50"></div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<!-- section title-->--}}
                    {{--<h2 class="title-section mt-0 mb-0">About us</h2>--}}
                    {{--<!-- ! section title-->--}}
                    {{--<div class="cws_divider with-plus short-3 mb-20 mt-10"></div>--}}
                    {{--<p class="mb-30">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>--}}
                    {{--<!-- accordion-->--}}
                    {{--<div class="accordion style-1 mb-40">--}}
                        {{--<div class="content-title"> <span class="active"><i class="flaticon-shapes"></i>Maecenas tempus, tellus eget condimentum rhoncus, sem quam ?<i class="accordion_angle fa fa-angle-down"></i></span></div>--}}
                        {{--<div class="content">--}}
                            {{--<p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, aug ue velit cursus nunc, quis gravida magna mi a libero. </p>--}}
                        {{--</div>--}}
                        {{--<div class="content-title"> <span><i class="flaticon-technology-3"></i>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id lorem ?<i class="accordion_angle fa fa-angle-down"></i></span></div>--}}
                        {{--<div class="content">Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, aug ue velit cursus nunc, quis gravida magna mi a libero. </div>--}}
                        {{--<div class="content-title"> <span><i class="flaticon-favorite"></i>Donec vitae sapien ut libero venenatis faucibus, sit amet orci eget ? <i class="accordion_angle fa fa-angle-down"></i></span></div>--}}
                        {{--<div class="content">Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, aug ue velit cursus nunc, quis gravida magna mi a libero. </div>--}}
                    {{--</div>--}}
                    {{--<!-- ! accordion--><a href="#" class="cws-button alt with-icon mb-xs-20 mr-xs-10">Contact Us<i class="flaticon-note-1"></i></a><a href="#" class="cws-button alt with-icon color-3">Online support<i class="flaticon-social-5"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- list-->--}}
    {{--</section>--}}
    <!-- ! page section about-->
    <!-- section portfolio filter-->
    {{--<section class="page-section pb-0 bg-gray-2">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<!-- title section-->--}}
                    {{--<h2 class="title-section text-center mt-0 mb-0">Our Portfolio</h2>--}}
                    {{--<!-- ! title section-->--}}
                    {{--<div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>--}}
                    {{--<p class="text-center mb-30">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- filter-->--}}
        {{--<div class="isotop-container">--}}
            {{--<div class="work-filter"><a href="#" data-filter="*" class="filter active">All</a><a href="#" data-filter=".branding" class="filter">Branding</a><a href="#" data-filter=".design" class="filter">Design</a><a href="#" data-filter=".photo" class="filter">Photography</a><a href="#" data-filter=".office" class="filter">Office</a><a href="#" data-filter=".projects" class="filter">Projects</a><a href="#" data-filter=".other" class="filter">Other</a></div>--}}
            {{--<div id="filter-grid" class="row cws-multi-col portfolio-grid">--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all branding design other">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/1.jpg" data-at2x="pic/portfolio/405x360/1@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/1@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all design office projects">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/2.jpg" data-at2x="pic/portfolio/405x360/2@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/2@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all branding photo office other">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/3.jpg" data-at2x="pic/portfolio/405x360/3@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/3@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all photo office">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/4.jpg" data-at2x="pic/portfolio/405x360/4@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/4@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all design projects other">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/5.jpg" data-at2x="pic/portfolio/405x360/5@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/5@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all branding photo projects">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/6.jpg" data-at2x="pic/portfolio/405x360/6@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/6@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all design projects other">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/7.jpg" data-at2x="pic/portfolio/405x360/7@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/7@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-4 col-sm-6 all branding photo projects">--}}
                    {{--<!-- portfolio item-->--}}
                    {{--<div class="portfolio-item text-center">--}}
                        {{--<!-- media-->--}}
                        {{--<div class="pic"><img src="pic/portfolio/405x360/8.jpg" data-at2x="pic/portfolio/405x360/8@2x.jpg" alt>--}}
                            {{--<!-- item content -->--}}
                            {{--<div class="item-content">--}}
                                {{--<h3 class="portfolio-title">Vestibulum</h3>--}}
                                {{--<div class="categories"><a href="page-portfolio-single.html">Projects</a>, <a href="page-portfolio-single.html">Branding</a></div>--}}
                                {{--<div class="links"><a href="pic/portfolio/405x360/8@2x.jpg" class="link-icon flaticon-interface fancy"></a><a href="page-portfolio-single.html" class="link-icon flaticon-tool"></a></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! portfolio item-->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="button-center pb-40 mt-10"><a href="#" class="cws-button alt">Load More</a></div>--}}
        {{--<!-- ! filter-->--}}
    {{--</section>--}}
    <!-- ! section portfolio filter-->
    <!-- section team-->
    <section class="page-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- title section-->
                    <h2 class="title-section text-center mt-0 mb-0">Our Structure</h2>
                    <!-- ! title section-->
                    <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
                    <p class="text-center mb-30">In order to accomplish the mission it has set to itself, the AUA has established a structural hierarchy that allows
                        it to maintain permanent contact with
                        professionals and representatives, and manage their relations at an African level, in a democratic and collegial manner.</p>
                </div>
            </div>
            <div class="row cws-multi-col mb-50">
                <div class="col-md-3 col-sm-6 mb-md-30">
                    <!-- profile item-->
                    <div class="profile-item">
                        <div class="pic">
                            <div class="img_cont"><img src="{{ asset('assets/frontend/pic/team/kaisi.jpg') }}" data-at2x="{{ asset('assets/frontend/pic/team/Kaisi_Kalambo.jpg') }}" alt></div>
                            <div class="hover-effect"></div>
                            <div class="ourteam_content">
                                <div class="title_wrap">
                                    <h3 class="title">Kaisi Kalambo</h3>
                                    <div class="positions"><a href="#">[ President ]</a></div>
                                </div>
                                <div class="desc">
                                    <p>Architects Association of Tanzania </p>
                                </div>
                                <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- ! profile item-->
                </div>
                <div class="col-md-3 col-sm-6 mb-md-30">
                    <!-- profile item-->
                    <div class="profile-item">
                        <div class="pic">
                            <div class="img_cont"><img src="{{ asset('assets/frontend/pic/team/tukunbo.jpg') }}" data-at2x="{{ asset('assets/frontend/pic/team/tukunbo.jpg') }}" alt></div>
                            <div class="hover-effect"></div>
                            <div class="ourteam_content">
                                <div class="title_wrap">
                                    <h3 class="title">Chief Tokunbo Omisore</h3>
                                    <div class="positions"><a href="#">[ Immediate PP ]</a></div>
                                </div>
                                <div class="desc">
                                    <p>Nigeria Institute of Architects.</p>
                                </div>
                                <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- ! profile item-->
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <!-- profile item-->
                    <div class="profile-item">
                        <div class="pic">
                            <div class="img_cont"><img src="{{ asset('assets/frontend/pic/team/amine_turki.jpg') }}" data-at2x="{{ asset('assets/frontend/pic/team/amine_turki.jpg') }}" alt></div>
                            <div class="hover-effect"></div>
                            <div class="ourteam_content">
                                <div class="title_wrap">
                                    <h3 class="title">Amine Turki</h3>
                                    <div class="positions"><a href="#">[ Secretary General ]</a></div>
                                </div>
                                <div class="desc">
                                    <p>Ordre Des Architectes de Tunisie.</p>
                                </div>
                                <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- ! profile item-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- profile item-->
                    <div class="profile-item">
                        <div class="pic">
                            <div class="img_cont"><img src="{{ asset('assets/frontend/pic/team/tayo.jpg') }}" data-at2x="{{ asset('assets/frontend/pic/team/tayo.jpg') }}" alt></div>
                            <div class="hover-effect"></div>
                            <div class="ourteam_content">
                                <div class="title_wrap">
                                    <h3 class="title">Tayo Babalakin</h3>
                                    <div class="positions"><a href="#">[ Assistant Sec. Gen. ]</a></div>
                                </div>
                                <div class="desc">
                                    <p>Nigeria Institute of Architects.</p>
                                </div>
                                <div class="social_links"><a href="#" class="flaticon-social-4"></a><a href="#" class="flaticon-social"></a><a href="#" class="flaticon-social-network"></a><a href="#" class="flaticon-social-1"></a><a href="#" class="flaticon-social-3"></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- ! profile item-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <a class="cws-button small alt">Learn more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ! section team-->
    <!-- section testimonials-->
    {{--<section class="page-section pt-120 pb-70 pattern-1 relative bb-gray bt-gray">--}}
        {{--<div class="container">--}}
            {{--<div class="row mb-20">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<!-- title section-->--}}
                    {{--<h2 class="title-section text-center mt-0 mb-0">Testimonials</h2>--}}
                    {{--<!-- ! title section-->--}}
                    {{--<div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>--}}
                    {{--<p class="text-center mb-30">Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc ares lu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia varius tincidunt libero. </p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="carousel-container">--}}
                {{--<div class="row">--}}
                    {{--<div class="owl-two-pag pagiation-carousel mb-20">--}}
                        {{--<!-- comment list section-->--}}
                        {{--<div class="widget_wrapper">--}}
                            {{--<div class="testimonial">--}}
                                {{--<div class="quote">Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibur lum frin gilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posu ere, tortor sed cursus feugiat.</div>--}}
                                {{--<div class="author"> <img src="pic/blog/60x60/1.jpg" data-at2x="pic/blog/60x60/1@2x.jpg" alt>--}}
                                    {{--<figure>--}}
                                        {{--<figcaption>Juliana Doe<span>[ Business Manager ]</span>--}}
                                            {{--<div class="stars"></div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- ! comment list section-->--}}
                        {{--<!-- comment list section-->--}}
                        {{--<div class="widget_wrapper">--}}
                            {{--<div class="testimonial">--}}
                                {{--<div class="quote">Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibur lum frin gilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posu ere, tortor sed cursus feugiat.</div>--}}
                                {{--<div class="author"> <img src="pic/blog/60x60/2.jpg" data-at2x="pic/blog/60x60/2@2x.jpg" alt>--}}
                                    {{--<figure>--}}
                                        {{--<figcaption>Peter Doe<span>[ Web Designer ]</span>--}}
                                            {{--<div class="stars"></div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- ! comment list section-->--}}
                        {{--<!-- comment list section-->--}}
                        {{--<div class="widget_wrapper">--}}
                            {{--<div class="testimonial">--}}
                                {{--<div class="quote">Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibur lum frin gilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posu ere, tortor sed cursus feugiat.</div>--}}
                                {{--<div class="author"> <img src="pic/blog/60x60/1.jpg" data-at2x="pic/blog/60x60/1@2x.jpg" alt>--}}
                                    {{--<figure>--}}
                                        {{--<figcaption>Juliana Doe<span>[ Business Manager ]</span>--}}
                                            {{--<div class="stars"></div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- ! comment list section-->--}}
                        {{--<!-- comment list section-->--}}
                        {{--<div class="widget_wrapper">--}}
                            {{--<div class="testimonial">--}}
                                {{--<div class="quote">Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibur lum frin gilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posu ere, tortor sed cursus feugiat.</div>--}}
                                {{--<div class="author"> <img src="pic/blog/60x60/2.jpg" data-at2x="pic/blog/60x60/2@2x.jpg" alt>--}}
                                    {{--<figure>--}}
                                        {{--<figcaption>Peter Doe<span>[ Web Designer ]</span>--}}
                                            {{--<div class="stars"></div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- ! comment list section-->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- ! section testimonials-->
    <!-- section news-->
    {{--<section class="page-section pb-70 bb-gray">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<!-- title section-->--}}
                    {{--<h2 class="title-section text-center mt-0 mb-0">Latest news</h2>--}}
                    {{--<!-- ! title section-->--}}
                    {{--<div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>--}}
                    {{--<p class="text-center mb-30">Phasellus dolor, aecenas vestibulum mollis diam, ut neque. Pellentesque habitant morbi tristique senectus et netus et mal esuada fames ac turpis egestas. In dui magna, posuere eget, vestibulum et, tempor auctor, justo.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<!-- Blog Post -->--}}
                    {{--<div class="blog-item news">--}}
                        {{--<!-- Blog Image-->--}}
                        {{--<div class="blog-media">--}}
                            {{--<div class="pic"><img src="pic/blog/370x260/1.jpg" data-at2x="pic/blog/370x260/1@2x.jpg" alt><a href="blog-single.html" class="hover-effect alt"><span class="plus fa fa-plus"></span></a></div>--}}
                            {{--<div class="blog-date alt">--}}
                                {{--<div class="date">--}}
                                    {{--<div class="date-cont"><span class="day">15</span><span title="May" class="month"><span>May</span></span><span class="year">2016</span><i class="springs"></i></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- title, author...-->--}}
                        {{--<div class="blog-item-data clearfix">--}}
                            {{--<h4 class="blog-title">Newsletter</h4>--}}
                            {{--<p class="post-info">By <a href="#" class="post-category"><span class="posr-author">Admin</span></a><span>, </span>In <a href="#" class="post-category"> <span>Business</span></a><span>,</span></p>--}}
                        {{--</div>--}}
                        {{--<!-- Text Intro-->--}}
                        {{--<div class="blog-item-body">--}}
                            {{--<p>Click on the Newsletter Tab to access the AUA Newsletter...</p>--}}
                        {{--</div><a href="#" class="cws-button small alt">Read More</a>--}}
                    {{--</div>--}}
                    {{--<!-- ! Blog Post-->--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<!-- ! Blog Post -->--}}
                    {{--<div class="blog-item news">--}}
                        {{--<!-- Blog Image-->--}}
                        {{--<div class="blog-media">--}}
                            {{--<div class="pic"><img src="pic/blog/370x260/3.jpg" data-at2x="pic/blog/370x260/3@2x.jpg" alt><a href="blog-single.html" class="hover-effect alt"><span class="plus fa fa-plus"></span></a></div>--}}
                            {{--<div class="blog-date alt">--}}
                                {{--<div class="date">--}}
                                    {{--<div class="date-cont"><span class="day">14</span><span title="May" class="month"><span>May</span></span><span class="year">2016</span><i class="springs"></i></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- title, author...-->--}}
                        {{--<div class="blog-item-data clearfix">--}}
                            {{--<h4 class="blog-title">Newsletter</h4>--}}
                            {{--<p class="post-info">By <a href="#" class="post-category"><span class="posr-author">Admin</span></a><span>, </span>In <a href="#" class="post-category"> <span>Business</span></a><span>, </span></p>--}}
                        {{--</div>--}}
                        {{--<!-- Text Intro-->--}}
                        {{--<div class="blog-item-body">--}}
                            {{--<p>Click on the Newsletter Tab to access the AUA Newsletter...</p>--}}
                        {{--</div><a href="#" class="cws-button small alt">Read More</a>--}}
                    {{--</div>--}}
                    {{--<!-- ! Blog Post -->--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<!-- ! Blog Post image-->--}}
                    {{--<div class="blog-item news">--}}
                        {{--<!-- Blog Image-->--}}
                        {{--<div class="blog-media">--}}
                            {{--<div class="pic"><img src="pic/blog/370x260/2.jpg" data-at2x="pic/blog/370x260/2@2x.jpg" alt><a href="blog-single.html" class="hover-effect alt"><span class="plus fa fa-plus"></span></a></div>--}}
                            {{--<div class="blog-date alt">--}}
                                {{--<div class="date">--}}
                                    {{--<div class="date-cont"><span class="day">13</span><span title="May" class="month"><span>May</span></span><span class="year">2016</span><i class="springs"></i></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- title, author...-->--}}
                        {{--<div class="blog-item-data clearfix">--}}
                            {{--<h4 class="blog-title">Newsletter</h4>--}}
                            {{--<p class="post-info">By <a href="#" class="post-category"><span class="posr-author">Admin</span></a><span>, </span>In <a href="#" class="post-category"> <span>Business</span></a><span>, </span></p>--}}
                        {{--</div>--}}
                        {{--<!-- Text Intro-->--}}
                        {{--<div class="blog-item-body">--}}
                            {{--<p>Click on the Newsletter Tab to access the AUA Newsletter...</p>--}}
                        {{--</div><a href="#" class="cws-button small alt">Read More</a>--}}
                    {{--</div>--}}
                    {{--<!-- ! Blog Post image-->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- ! section news-->
    <!-- section parallax counter-->
    {{--<section class="page-section cws_prlx_section pt-70 pb-70 bb-gray"><img src="pic/counter-bg-1.jpg" alt class="cws_prlx_layer">--}}
        {{--<div class="container">--}}
            {{--<div class="row cws-multi-col">--}}
                {{--<div class="col-sm-3 col-xs-6 mb-sm-50">--}}
                    {{--<!-- counter block-->--}}
                    {{--<div class="counter-block style-2 st-color-2 full"><i class="counter-icon flaticon-people-2"></i>--}}
                        {{--<div class="counter-name-wrap">--}}
                            {{--<div data-count="5510" class="counter">0</div>--}}
                            {{--<div class="counter-name">Happy Clients</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! counter block-->--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 mb-sm-50">--}}
                    {{--<!-- counter block-->--}}
                    {{--<div class="counter-block style-2 st-color-2 full"><i class="counter-icon flaticon-fashion"></i>--}}
                        {{--<div class="counter-name-wrap">--}}
                            {{--<div data-count="180" class="counter">0</div>--}}
                            {{--<div class="counter-name">Awards Win</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- counter block-->--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6">--}}
                    {{--<!-- counter block-->--}}
                    {{--<div class="counter-block style-2 st-color-2 full"><i class="counter-icon flaticon-game"></i>--}}
                        {{--<div class="counter-name-wrap">--}}
                            {{--<div data-count="1360" class="counter">0</div>--}}
                            {{--<div class="counter-name">Finished Projects</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! counter block-->--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6">--}}
                    {{--<!-- counter block-->--}}
                    {{--<div class="counter-block style-2 st-color-2 full"><i class="counter-icon flaticon-sheet"></i>--}}
                        {{--<div class="counter-name-wrap">--}}
                            {{--<div data-count="9270" class="counter">0</div>--}}
                            {{--<div class="counter-name">Code Strokes</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ! counter block-->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- ! section parallax counter-->
    <!---->
    <section class="page-section pb-0" id="contact">
        <div class="container">
            <!-- section title-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- title section-->
                    <h2 class="title-section text-center mt-0 mb-0">Get in touch</h2>
                    <!-- ! title section-->
                    <div class="cws_divider with-plus short-3 center mb-20 mt-10"></div>
                    <p class="text-center mb-10">Feel free to contact us</p>
                </div>
            </div>
            <div class="row">
                <!-- form section-->
                <div class="col-md-8 mb-md-50">
                    <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <textarea name="message" cols="40" rows="4" placeholder="Message" aria-invalid="false" aria-required="true" style="height: 248px"></textarea>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                                <input type="text" name="email" value="" size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
                                <input type="text" name="subject" value="" size="40" placeholder="Subject" aria-required="true" class="form-row form-row-last">
                                <input type="submit" value="Submit now" class="cws-button alt full-width">
                            </div>
                        </div>
                    </form>
                    <div id="feedback-form-errors" role="alert" class="alert alert-danger alt alert-dismissible fade in">
                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button><i class="alert-icon border fa fa-exclamation-triangle"></i><strong>Error Message!</strong><br>
                        <div class="message"></div>
                    </div>
                    <div class="email_server_responce"></div>
                </div>
                <!-- contact address-->
                <div class="col-md-4">
                    <address class="contact-address">
                        <div class="contact-icon-wrap"><a href="#" class="contact-icon flaticon-technology-2"> <span>(+216) 26 285 095 </span></a></div>
                        <div class="contact-icon-wrap"><a href="#" class="contact-icon flaticon-note color-2"> <span>amine.turki@yahoo.com </span></a></div>
                        <div class="contact-icon-wrap"><a href="#" class="contact-icon flaticon-placeholder"> <span>R Du Lac Toba Immeuble Mezgheni TUNIS LES BERGES DU LAC</span></a></div>
                        <div class="contact-icon-wrap"><a href="#" class="contact-icon flaticon-time color-2"> <span>Mon. - Sat: 9:00 - 18:00</span></a></div>
                    </address>
                </div>
            </div>
        </div>
        <div class="map-full-width map-wrapper mt-60 border-t" >
            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCt5_dbXflSYBK7nCZvY3WThzpZBpu7YwE&q=36.8355735,10.2285002" allowfullscreen=""></iframe>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function () {
            $('.map-full-width.map-wrapper.mt-60.border-t')
                    .on('click',function(){
                        console.log('in')
                        $(this).find('iframe').addClass('clicked')})
                    .mouseleave(function(){
                        $(this).find('iframe').removeClass('clicked')});
        })
    </script>
@endsection
