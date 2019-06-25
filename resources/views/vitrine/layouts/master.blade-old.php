<!DOCTYPE html>
<html>
<head>
    <title>The Africa Union of Architects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/fi/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/indent.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/rs-plugin/css/navigation.css') }}">

    @yield('beforefiles')

</head>
<body>
<!-- header page-->
<header>
    <!-- site top panel-->
    <div class="site-top-panel">
        <div class="container p-relative">
            <div class="row">
                <div class="col-sm-6">
                    <!-- lang select wrapper-->
                    <div class="top-left-wrap">
                    </div>
                    <!-- ! lang select wrapper-->
                </div>
                <div class="col-sm-6 text-right">
                    <div class="top-right-wrap">
                        <div class="top-login"><i class="flaticon-people-2"></i>Login</div>
                      <span>|</span>
                        <div class="top-search"><i class="flaticon-interface"></i>Search</div>
                    </div>
                </div>
                <div class="search_menu_cont">
                    <form role="search" method="get" class="form">
                        <div class="search-wrap">
                            <input type="text" placeholder="Search . . ." class="form-control search-field">
                        </div>
                    </form>
                    <div class="search_back_button"><i class="fa fa-close"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ! site top panel-->
    <!-- Navigation panel-->
    <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
            <!-- Logo ( * your text or image into link tag *)-->
            <div class="nav-logo-wrap local-scroll"><a href="index.html" class="logo"><img src="{{ asset('assets/frontend/img/7bitri.png') }}" data-at2x="img/logo@2x.png" alt><img src="{{ asset('assets/frontend/img/7bitri.png') }}" alt class="sticky-logo"></a></div>
            <!-- Main Menu-->
            <div class="inner-nav desktop-nav switch-menu">
                <ul class="clearlist">
                    <!-- Item With Sub-->
                    <li><a href="{{ url('/') }}" class="mn-has-sub active">Home</a>

                    </li>
                    <!-- End Item With Sub-->
                    <!-- Item With Sub-->
                    <li class="megamenu"><a href="#" class="mn-has-sub">About</a>
                    </li>
                    <!-- End Item With Sub-->
                    <!-- Item With Sub-->
                    <li><a href="#" class="mn-has-sub">Our members <i class="fa fa-angle-down button_open"></i></a>
                        <!-- Sub-->
                        <ul class="mn-sub">
                            <li><a href="{{ url('/members/centralAfrica') }}">Central africa</a></li>
                            <li><a href="{{ url('/members/eastAfrica') }}">East Africa</a></li>
                            <li><a href="{{ url('/members/northAfrica') }}">North Africa</a></li>
                        </ul>
                        <!-- End Sub-->
                    </li>
                    <!-- End Item With Sub-->
                    <!-- Item With Sub-->
                    <li><a href="#" class="mn-has-sub">Activities</a>

                    </li>
                    <!-- End Item With Sub-->
                    <!-- Item With Sub-->
                    <li><a href="#" class="mn-has-sub">Contact</a>

                    </li>
                    <!-- End Item With Sub-->
                    <!-- Item-->
                    <li><a href="#">AUA Archive</a></li>
                    <!-- End Item-->
                </ul>
                <div class="menu-contacts">
                    <div class="menu-contacts-item"><i class="flaticon-technology-2 cws-icon"></i>
                        <p class="mb-0">(+216) 26 285 095</p>
                        <p class="mb-0">Fax: (123) 456-7891</p>
                    </div>
                    <div class="menu-contacts-item"><i class="flaticon-placeholder cws-icon"></i>
                        <p class="mb-0">R Du Lac Toba Immeuble Mezgheni </p>
                        <p class="mb-0">LES BERGES DU LAC, TUNIS</p>
                    </div>
                    <div class="menu-contacts-item"><i class="flaticon-time cws-icon"></i>
                        <p class="mb-0">Mon - Sat: 9:00 - 18:00 </p>
                        <p class="mb-0">Sunday: Closed</p>
                    </div>
                </div><a href="#" class="menu-bar"><span class="ham"></span></a>
            </div>
            <!-- End Main Menu-->
        </div>
    </nav>
    <!-- End Navigation panel-->
    @yield('second-header')
</header>
<!-- ! header page-->
<div class="content-body @yield('page-class')">
   @include('includes.partials.messages')
    @yield('content')
</div>
<!-- footer-->
<footer style="background-image: url({{ asset('assets/frontend/pic/members/banner31.jpg') }})" class="footer footer-fixed">
    <div class="container">
        <div class="row cws-multi-col">
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6 mb-md-50">
                <div class="widget-footer text">
                    <h3>Africa Union of Architects</h3>
                    <div class="cws_divider with-plus short-2 mb-5 mt-10"></div>
                    <p>was inaugurated in Nigeria on May 23 1981 by his Excellency Alhaji Shehu Shagari, former President of Nigeria. </p>
                    <div class="footer-cws-social mt-25"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
                </div>
            </div>
            <!-- end widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6 mb-md-50">
                <div class="widget-footer">
                    <h3>Useful Links</h3>
                    <div class="cws_divider with-plus short-2 mb-5 mt-10"></div>
                    <ul>
                        <li><a href="#">About Us</a> <a href="#">Sitemap</a></li>
                        <li><a href="#">Contacts</a> <a href="#">FAQ</a></li>
                        <li><a href="#">Services</a> <a href="#">Awards</a></li>
                        <li><a href="#">Shop</a> <a href="#">Testimonials</a></li>
                        <li><a href="#">News</a> <a href="#">Careers</a>		</li>
                    </ul>
                </div>
            </div>
            <!-- end widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6 mb-sm-50">
                <div class="widget-footer">
                    <h3>Latest News</h3>
                    <div class="cws_divider with-plus short-2 mb-5 mt-10"></div>
                    <div class="recent-item clearfix"><a href="blog-single.html"><img src="pic/footer/1.jpg" data-at2x="pic/footer/1@2x.jpg" alt></a>
                        <h4 class="recent-title"><a href="blog-single.html">Dusce risus nisl, viverra et</a></h4>
                        <p>15 may &nbsp;/&nbsp; By Admin &nbsp;/&nbsp; 5 comments</p>
                    </div>
                    <div class="recent-item clearfix"><a href="blog-single.html"><img src="pic/footer/2.jpg" data-at2x="pic/footer/2@2x.jpg" alt></a>
                        <h4 class="recent-title"><a href="blog-single.html">Maecenas ullamcorper, dui</a></h4>
                        <p>14 may &nbsp;/&nbsp; By Admin &nbsp;/&nbsp; 3 comments</p>
                    </div>
                </div>
            </div>
            <!-- end widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6">
                <div class="widget-footer">
                    <h3>Newsletter</h3>
                    <div class="cws_divider with-plus short-2 mb-5 mt-10"></div>
                    <address>
                        <p>Donec interdum, metus et hendrerit aliquei  dolor diam sagittis ligula, eget egestas deru libero turpis vel mi. </p>
                    </address>
                    <div class="footer-form-wrap">
                        <form method="get" action="#" class="newsletter contact-form">
                            <div class="newsletter-footer-wrap">
                                <input type="text" placeholder="Enter Your Email" value="" name="email" class="newsletter-field">
                                <button type="submit" class="newsletter-submit cws-button alt">Send</button>
                            </div>
                        </form>
                        <div id="footer-form" role="alert" class="alert alert-danger alt alert-dismissible fade in">
                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button><i class="alert-icon border fa fa-exclamation-triangle"></i><strong>Error Message!</strong><br>
                            <div class="message"></div>
                        </div>
                        <div class="email_server_responce"></div>
                    </div>
                </div>
            </div>
            <!-- end widget footer-->
        </div>
    </div>
    <!-- copyright-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>© Copyright 2017 <span>AFRICA UNION OF ARCHITECTS</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
                </div>
                <div class="col-sm-6 text-right"><a href="index.html" class="footer-nav">Home</a><a href="page-about-us.html" class="footer-nav">Pages</a><a href="portfolio-single.html" class="footer-nav">Portfolio</a><a href="blog-single.html" class="footer-nav">Blog</a><a href="shop-single.html" class="footer-nav">Shop</a><a href="page-contact.html" class="footer-nav">Contact</a></div>
            </div>
        </div>
    </div>
    <!-- end copyright-->
    <!-- scroll top-->
</footer>
<div id="scroll-top"><i class="fa fa-angle-up"></i></div>
<!-- ! footer-->
<!-- login popup-->
<div class="login-popup">
    <div class="login-popup-wrap">
        <div class="title-wrap">
            <h2>Login</h2><i class="close-button flaticon-cross"></i>
        </div>
        <div class="login-content">
            <form class="form">
                <input type="text" name="email" value="" size="40" placeholder="Enter Your Email ..." aria-required="true" class="form-row form-row-first">
                <input type="text" name="password" value="" size="40" placeholder="Enter Your Password ..." aria-required="true" class="form-row form-row-last">
            </form>
            <div class="remember">
                <div class="checkbox">
                    <input id="checkbox3" type="checkbox" value="None" name="check">
                    <label for="checkbox3">Remember Me</label>
                </div><a href="#">Forgot Password ?</a>
            </div><a href="accueil" class="cws-button gray alt full-width mt-20">Login now</a>
        </div>


        <div class="login-bot">

          <a href="register" class="cws-button gray alt full-width mt-20"  >No account yet ? Register now </a>

        </div>

    </div>
</div>



<!-- news popup-->
<div class="news-popup">
    <div class="news-popup-wrap"> <i class="close-button flaticon-cross"></i>
        <div class="row">
            <div class="col-sm-6"><img src="pic/news-popup.jpg" data-at2x="pic/news-popup@2x.jpg" alt></div>
            <div class="col-sm-6">
                <div class="news-content">
                    <div class="news-title">
                        <h2>Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                    </div>
                    <div class="contact-form-wrap">
                        <form method="get" action="#" class="newsletter contact-form">
                            <div class="newsletter-wrap mb-0">
                                <input type="text" placeholder="Enter Your Email ..." value="" name="email" class="newsletter-field mb-0">
                                <button type="submit" class="newsletter-submit cws-button alt">Submit</button>
                            </div>
                        </form>
                        <div id="news-form" role="alert" class="alert alert-danger alt alert-dismissible fade in">
                            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button><i class="alert-icon border fa fa-exclamation-triangle"></i>
                            <div class="message"></div>
                        </div>
                        <div class="email_server_responce"></div>
                    </div>
                    <div class="checkbox-wrap">
                        <div class="checkbox">
                            <input id="checkbox4" type="checkbox" value="None" name="check">
                            <label for="checkbox4">Dont Show This Message Again</label>
                        </div>
                    </div>
                    <div class="social-wrap"><a href="#" class="cws-social flaticon-social-4"></a><a href="#" class="cws-social flaticon-social"></a><a href="#" class="cws-social flaticon-social-3"></a><a href="#" class="cws-social flaticon-social-1"></a><a href="#" class="cws-social flaticon-social-network"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/TweenMax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/cws_parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.fancybox-media.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bg-video/cws_self_vimeo_bg.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bg-video/jquery.vimeo.api.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/bg-video/cws_YT_bg.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.tweet.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/js/retina.min.js') }}"></script>

@yield('script')
@yield('afterfiles')

</body>
</html>
