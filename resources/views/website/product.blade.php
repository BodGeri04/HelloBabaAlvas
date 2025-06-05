<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<title>{{ $title ?? config('app.name') }}</title>
@extends('website.main')
@section('content')
<!-- Cource Detail Banner Section -->
<section class="cource-detail-banner-section" style="background-image: url('{{ asset('assets/images/gallery/WebsiteHeader2.png') }}')">
    <div class="auto-container">
        <div class="content-box">
            <h1>{{$product->name}}</h1>
            <ul class="course-info">
                <li>Utolsó frissítés {{ $product->created_at->format('Y. F d.') }}</li>
                <li><span class="icon fa fa-user"></span>Korábbi előfizetők száma: 2</li>
                <li class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <i>(1)</i>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Cource Detail Banner Section -->

<!-- Course Detail Section -->
<section class="course-detail-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    
                    <!-- Course Info Tabs-->
                    <div class="course-info-tabs">
                        <!-- Course Tabs-->
                        <div class="course-tabs tabs-box">
                        
                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#prod-overview" class="tab-btn">Áttekintés</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Vélemények</li>
                            </ul>
                            
                            <!--Tabs Container-->
                            <div class="tabs-content">
                                
                                <!-- Tab / Active Tab -->
                                <div class="tab active-tab" id="prod-overview">
                                    <div class="content">
                                       <p>{!! $product->detailed_description !!}</p>
                                        
                                        <!-- Requirement Box -->
                                        <div class="requirement">
                                            <h4>Amire szükséged lehet</h4>
                                            <div class="row clearfix">
                                                
                                                <!-- Required Column -->
                                                <div class="required-column col-lg-4 col-md-6 col-sm-12">
                                                    <div class="required-inner">
                                                        <div class="required-text">Telefon/Számítógép</div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                        <!-- End Requirement Box -->                                        
                                    </div>
                                </div>
                                
                                <!-- Tab -->
                                <div class="tab" id="prod-curriculum">
                                    <div class="content">
                                        
                                        <!-- Accordian Box -->
                                        <ul class="accordion-box">
                                            
                                            <!-- Block -->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Some Fundamental Physics</div>
                                                <div class="acc-content">
                                                    <div class="content">
                                                        <ul class="accordion-list">
                                                            <li>Magnetism <a class="lightbox-image list-icon fa fa-play" href="https://www.youtube.com/watch?v=kxPCFljwJws"></a></li>
                                                            <li>Charge <span class="list-icon fa fa-lock"></span></li>
                                                            <li>The Structure of Matter <span class="list-icon fa fa-lock"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                        <!-- End Accordian Box -->
                                        
                                        <!-- Skill Box -->
                                        <div class="skill-box">
                                            <div class="box-inner">
                                                <div class="rating-box">
                                                    <div class="total-rating">4.6</div>
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="total-reviews">30 reviews</div>
                                                </div>
                                                
                                                <!-- Skills / Style Two -->
                                                <div class="skills style-two">

                                                    <!-- Skill Item -->
                                                    <div class="skill-item">
                                                        <div class="skill-header clearfix">
                                                            <div class="skill-title">Excellent</div>
                                                        </div>
                                                        <div class="skill-bar">
                                                            <div class="bar-inner">
                                                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
                                                                <div class="bar progress-line" data-width="80"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                        
                                            </div>
                                        </div>
                                        <!-- End Skill Box -->
                                        
                                    </div>
                                </div>
                                
                                <!-- Tab -->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        
                                        <!-- Comments Area -->
                                        <div class="comments-area">
                                            <div class="group-title">
                                                <h4>Felhasználói visszajelzések</h4>
                                            </div>
                                            
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="comment-info clearfix">
                                                        <strong>Szilvi</strong>
                                                        <div class="comment-time">2025. 05. 10</div>
                                                        <div class="rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="text"></div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                
                    <!-- Video Intro Widget -->
                    <div class="video-intro-widget">
                        <!-- Video Box -->
                        {{-- <div class="intro-video" style="background-image: url(assets/images/resource/video-image-1.jpg)">
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image intro-video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
                        </div> --}}
                        <div class="lower-content">
                            @if($product->discountPrice)
                            <div class="price">{{ number_format($product->discountPrice,0,'','.' )}} Ft<span>{{ number_format($product->price,0,'','.' )}} Ft</span></div>
                            @else
                            <div class="price">{{ number_format($product->price,0,'','.' )}} Ft</div>
                            @endif
                            <ul class="intro-list">
                                <li><span class="icon fa fa-clock-o"></span><strong>Hossz</strong><i>1 óra</i></li>
                                <li><span class="icon fa fa-book"></span><strong>Nyelv</strong><i>Magyar</i></li>
                            </ul>
                            
                            <!-- Buttons Box -->
                            <div class="buttons-box">
                                <a href="/#contact-section" class="enroll-btn theme-btn">Jelentkezés <span class="icon fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- End Buttons Box -->
                            
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/profile.php?id=61574071451804" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.instagram.com/pihenjbaba" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.tiktok.com/@pihenjbaba" class="fa fa-tiktok"></a></li>
                            </ul>
                            
                        </div>
                    </div>
                    <!-- End Video Intro Widget -->
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End Course Detail Section -->
@endsection