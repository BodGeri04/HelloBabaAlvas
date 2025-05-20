<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="keywords" content="baba, alvás, babaalvás, nyugodt éjszaka, altatás, babatippek">
    <meta name="author" content="Pihenj Baba Csapata">
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    <!--TINYMCE-->
    <script src="https://cdn.tiny.cloud/1/z3ivhoi87w7309hzr8a537h5xm156y3unisq93zp528w3jsq/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <!-- Header Style One -->
        <header class="main-header">

            <!-- Header Top -->
            <div class="header-top" style="background-color: rgba(0, 0, 0, 0.418)">
                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Left: Email -->
                        <div class="top-left">
                            <div class="text">
                                <i class="fa fa-envelope" style="margin-right: 5px;"></i>
                                <span>hello@pihenjbaba.hu</span>
                            </div>
                        </div>

                        <!-- Center: Phone -->
                        <div class="top-center text-center flex-grow-1">
                            <div class="text" style="color:white">
                                <i class="fa fa-phone" style="margin-right: 5px;"></i>
                                <span>+36 20 560 7609</span>
                            </div>
                        </div>

                        <!-- Right: Social Icons -->
                        <div class="top-right">
                            <ul class="social-box d-flex gap-2">
                                <li><a href="https://www.facebook.com/profile.php?id=61574071451804"
                                        class="fa fa-facebook-f" target="_blank"></a></li>
                                <li><a href="https://www.instagram.com/pihenjbaba" class="fa fa-instagram"
                                        target="_blank"></a></li>
                                <li><a href="https://www.tiktok.com/@pihenjbaba?_t=ZN-8w9Jl458plP&_r=1"
                                        class="fa fa-tiktok" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container clearfix">

                    <!-- Logo Box -->
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="/"><img src="assets/images/gallery/logo.png"
                                    style="max-width: 100px;max-height:100px;"alt="" title=""></a>
                        </div>
                    </div>

                    <!-- Nav Outer -->
                    <div class="nav-outer clearfix">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a href="/">Főoldal</a>
                                    </li>
                                    <li class=""><a href="/aboutMe">Rólam</a>
                                    </li>
                                    <li class=""><a href="/products">Szolgáltatások</a>
                                    </li>
                                    <li><a href="/#contact-section">Kapcsolat</a></li>
                                </ul>
                            </div>
                        </nav>

                        {{-- <!-- Main Menu End-->
                        <div class="outer-box clearfix">

                            <!-- Search Btn -->
                            <div class="search-box-btn transition-300ms"><span class="icon fa fa-search"></span></div>

                            <!-- Nav Btn -->
                            <div class="nav-btn navSidebar-button transition-300ms"><span
                                    class="icon flaticon-menu-1"></span></div>

                        </div> --}}
                    </div>

                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="/" title=""><img src="assets/images/logo-small.png" alt=""
                                title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">

                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-small.png"
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">

                        <!-- Sidebar Info Content -->
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo.png" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <p class="text">I am glad that you have made it here to send a distress signal,
                                        and
                                        inform the Senate that all on board killed. Dantooine. I’m not going to
                                        Alderaan. I really got to go. But that to me.</p>
                                    <a href="contact.html" class="theme-btn btn-style-one"><span
                                            class="txt">Consultation</span></a>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul class="list-style-one">
                                        <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City,
                                            USA</li>
                                        <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                        <li><span class="icon fa fa-envelope"></span>avarton@gmail.com</li>
                                        <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday:
                                            Closed</li>
                                    </ul>
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                    <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                    <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->
        @yield('content')
        @if (!request()->cookie('cookie_consent'))
            <div id="cookie-consent-banner" class="cookie-banner">
                <p>Ez az oldal sütiket használ a felhasználói élmény javítása érdekében.</p>
                <div>
                    <button id="cookie-accept" class="btn btn-success btn-sm">Elfogadom</button>
                    <button id="cookie-reject" class="btn btn-secondary btn-sm">Elutasítom</button>
                </div>
            </div>
        @endif
        <!-- Main Footer -->
        <footer class="main-footer" style="background-color: var(--dark-color)">
            <div class="auto-container">
                <!-- Widgets Section -->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="assets/images/footer-logo.png"
                                                    alt="" /></a>
                                        </div>
                                        <div class="text">Nyugodt alvás a babának és a családnak.<br>Személyre
                                            szabott megoldások a babád és a te igényeid összehangolásával.</div>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5>Oldalak</h5>
                                        <div class="row clearfix">
                                            <!-- Column -->
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <ul class="list-link">
                                                    <li><a href="/">Főoldal</a></li>
                                                    <li><a href="/aboutMe">Rólam</a></li>
                                                    <li><a href="/services">Szolgáltatások</a></li>
                                                    <li><a href="/#contact-section">Kapcsolat</a></li>
                                                </ul>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <ul class="list-link">
                                                    <li><a href="/adatvedelem">Adatvédelem</a></li>
                                                    <li><a href="/aboutMe">GYIK</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget info-widget">
                                        <h5>Lépj kapcsolatba <br>velem</h5>
                                        <ul class="contact-info-list">
                                            <li><span>Tanácsadó</span><a href="/#contact-section">Bod Orsolya<br>
                                                    +36 20 560 7609<br>hello@pihenjbaba.hu</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <h5>Hírlevél</h5>
                                        <!-- Newsletter Form -->
                                        <div class="newsletter-form">

                                            <div class="form-group">
                                                <span class="icon flaticon-email"></span>
                                                <input type="email" name="search-field" value=""
                                                    placeholder="Email cím" required>
                                                <button type="#" class="theme-btn submit-btn">Hamarosan<span
                                                        class="arrow flaticon-right-arrow-1"></span></button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="copyright">Minden jog fenntartva &copy; <strong> Bod Orsolya </strong> -
                                {{ date('Y') }}</div>
                        </div>
                        <div class="pull-right">
                            <div class="copyright">Az oldal fejlesztője: <a target="_blank"
                                    href="https://bodgergely.hu"><strong>Bod Gergely</strong></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/js/main-slider-script.js') }}"></script>

    <!-- JS Libraries -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validate.js') }}"></script>
    <script src="{{ asset('assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/cookie.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: 'textarea', // Az összes textarea elemet TinyMCE-re cseréli
                plugins: 'advlist autolink lists link image charmap print preview anchor',
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                menubar: 'file edit view insert format tools table help',
                setup: function(editor) {
                    editor.on('change', function() {
                        tinymce.triggerSave();
                    });
                }
            });
        });
    </script>
</body>

</html>
