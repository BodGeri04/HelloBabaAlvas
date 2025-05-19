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
                <li><span class="icon fa fa-user"></span>27 already enrolled</li>
                <li class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <i>(12)</i>
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
                                <li data-tab="#prod-overview" class="tab-btn active-btn">Áttekintés</li>
                                <li data-tab="#prod-curriculum" class="tab-btn">Curriculum</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Vélemények</li>
                            </ul>
                            
                            <!--Tabs Container-->
                            <div class="tabs-content">
                                
                                <!-- Tab / Active Tab -->
                                <div class="tab active-tab" id="prod-overview">
                                    <div class="content">
                                       <p>{{$product->detailed_description}}</p>
                                        
                                        <!-- Requirement Box -->
                                        <div class="requirement">
                                            <h4>Requirements</h4>
                                            <div class="row clearfix">
                                                
                                                <!-- Required Column -->
                                                <div class="required-column col-lg-4 col-md-6 col-sm-12">
                                                    <div class="required-inner">
                                                        <div class="required-text">Computer/Laptop</div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                        <!-- End Requirement Box -->
                                        
                                        <!-- Target Box -->
                                        <div class="target-box">
                                            <h4>Target Audience</h4>
                                            <ul class="target-list">
                                                <li>Educators (teachers, lecturer, faculty)</li>
                                                <li>Corporate trainer</li>
                                            </ul>
                                        </div>
                                        <!-- End Target Box -->
                                        
                                    </div>
                                </div>
                                
                                <!-- Tab -->
                                <div class="tab" id="prod-curriculum">
                                    <div class="content">
                                        
                                        <!-- Curriculum Box -->
                                        <div class="curriculum-box">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <h4>Curriculum</h4>
                                                </div>
                                                <div class="pull-right">
                                                    <ul class="lessons">
                                                        <li><span class="icon fa fa-book"></span>5 Lessons</li>
                                                        <li><span class="icon fa fa-clock-o"></span>4h 55m</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Curriculum Box -->
                                        
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
                                                <h4>User Feedbacks</h4>
                                            </div>
                                            
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="author-thumb"><img src="assets/images/resource/author-3.jpg" alt=""></div>
                                                    <div class="comment-info clearfix">
                                                        <strong>Kevin Martin</strong>
                                                        <div class="comment-time">26 July, 2022</div>
                                                        <div class="rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum a quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabocopytyping mean refreshing que porro espanio.</div>
                                                    <a class="theme-btn reply-btn" href="#"><span class="fa fa-reply"></span> Reply</a>
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
                            <div class="price">{{$product->price}} Ft.</div>
                            @endif
                            <ul class="intro-list">
                                <li><span class="icon fa fa-link"></span><strong>Level</strong><i>All Levels</i></li>
                                <li><span class="icon fa fa-clock-o"></span><strong>Duration</strong><i>1 óra</i></li>
                                <li><span class="icon fa fa-video-camera"></span><strong>Lectures</strong><i>5 lectures</i></li>
                                <li><span class="icon fa fa-book"></span><strong>Subject</strong><i>Teacher Training</i></li>
                                <li><span class="icon fa fa-money"></span><strong>Nyelv</strong><i>Magyar</i></li>
                            </ul>
                            
                            <!-- Buttons Box -->
                            <div class="buttons-box">
                                <a href="/#contact-section" class="enroll-btn theme-btn">Jelentkezés <span class="icon fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- End Buttons Box -->
                            
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.behance.com/" class="fa fa-behance"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
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