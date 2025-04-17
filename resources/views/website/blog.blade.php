@extends('website.main')
@section('content')
<!-- Page Title Section -->
<section class="page-title" style="background-image: url(assets/images/background/2.jpg)">
    <div class="auto-container">
        <div class="content">
            <div class="text">Welcome to our company</div>
            <h1>News Feeds</h1>
        </div>
        <div class="breadcrumb-outer">
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Section -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="inner-box">
                        <ul class="post-meta">
                            <li><span class="icon fa fa-eye"></span>{{$blog->views}} megtekintés</li>
                            <li><span class="icon fa fa-comments"></span>30 comments</li>
                            <li><span class="icon fa fa-calendar"></span>{{$blog->created_at->format('Y. F d.')}}</li>
                        </ul>
                        <div class="main-image">
                            <img src="assets/images/gallery/blog/{{$blog->cover_image}}" alt="{{$blog->cover_image}}" />
                        </div>
                        <h3>{{$blog->title}}</h3>
                        <p>{{$blog->content}}</p>
                        <div class="setting-box">
                            <h3>Setting the mood with incense</h3>
                            <div class="box-inner">
                                <div class="small-image">
                                    <img src="assets/images/resource/news-6.jpg" alt="" />
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate Lorem ipsum dolor sit amet, co nsectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                        <blockquote>
                            <span class="quote-icon flaticon-quote-2"></span>
                            <div class="quote-text">Choices to take a holiday and travelling out in this pandemic situation are limited. Why not take a staycation.</div>
                            <div class="designation">
                                Rosalina D. William
                                <span>Founder</span>
                            </div>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <!-- Post Share Options-->
                        <div class="post-share-options">
                            <div class="post-share-inner clearfix">
                                <div class="pull-left tags"><strong>Releted Tags</strong><a href="#">Popular</a> <a href="#">Desgin</a><a href="#">UX</a></div>
                                <ul class="social-box pull-right">
                                    <li class="share">Social Share</li>
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- More Posts -->
                        <div class="more-posts">
                            <div class="clearfix">
                                <div class="prev pull-left"><a href="#">Previous Post <strong>Tips On Minimalist</strong></a></div>
                                <span class="grid-icon flaticon-grid"></span>
                                <div class="next pull-right"><a href="#">Newer Post <strong>Less Is More</strong></a></div>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Blog Author Box -->
                        <div class="blog-author-box">
                            <div class="author-inner">
                                <div class="thumb"><img src="assets/images/resource/author-5.jpg" alt=""></div>
                                <div class="title">Written by</div>
                                <h4 class="name">Rosalina D. William</h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation is enougn for today.</div>
                            </div>
                        </div>
                        <!-- End Blog Author Box -->
                        
                        <!-- Comments Area -->
                        <div class="comments-area">
                            <div class="group-title">
                                <h4>03 Comments</h4>
                            </div>
                            
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="assets/images/resource/author-6.jpg" alt=""></div>
                                    <div class="comment-info clearfix"><strong>Rosalina Kelian</strong><div class="comment-time">24th March 2022</div></div>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                    <a class="theme-btn reply-btn" href="#"><span class="fa fa-reply"></span> Reply</a>
                                </div>
                            </div>
                            
                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb"><img src="assets/images/resource/author-7.jpg" alt=""></div>
                                    <div class="comment-info clearfix"><strong>Paul Molive </strong><div class="comment-time">Mar 01, 2022</div></div>
                                    <div class="text">The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</div>
                                    <a class="theme-btn reply-btn" href="#"><span class="fa fa-reply"></span> Reply</a>
                                </div>
                            </div>
                            
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="assets/images/resource/author-8.jpg" alt=""></div>
                                    <div class="comment-info clearfix"><strong>Mouna Sthesia </strong><div class="comment-time">Apr 28, 2022</div></div>
                                    <div class="text">The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</div>
                                    <a class="theme-btn reply-btn" href="#"><span class="fa fa-reply"></span> Reply</a>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title"><h4>Post Comment</h4></div>
                            
                            <!--Comment Form-->
                            <form method="post" action="blog.html">
                                
                                <div class="form-group">
                                    <span class="icon fa fa-pencil"></span>
                                    <textarea class="" name="message" placeholder="Type your comments...."></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <span class="icon fa fa-user"></span>
                                    <input type="text" name="username" placeholder="Type your name...." required>
                                </div>
                                
                                <div class="form-group">
                                    <span class="icon fa fa-envelope"></span>
                                    <input type="email" name="email" placeholder="Type your email...." required>
                                </div>
                                
                                <div class="form-group">
                                    <span class="icon fa fa-globe"></span>
                                    <input type="text" name="username" placeholder="Type your website...." required>
                                </div>
                                
                                <div class="form-group">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form"><span class="txt"><i class="fa fa-comment"></i>Post Comment</span></button>
                                </div>
                                
                            </form>
                                
                        </div>
                        <!--End Comment Form -->
                        
                    </div>
                </div>
            </div>
            
            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">
                    
                    <!-- Sidebar Widget / About Widget -->
                    <div class="sidebar-widget-two about-widget">
                        <div class="widget-content">
                            <!-- Sidebar Title -->
                            <div class="sidebar-title-two">
                                <h5>About Me</h5>
                            </div>
                            <div class="image">
                                <img src="assets/images/resource/about-widget.jpg" alt="" />
                            </div>
                            <div class="lower-content">
                                <h6>Rosalina D. Willaimson</h6>
                                <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
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
                    </div>
                    <!-- End Sidebar Widget / About Widget -->
                    
                    <!-- Sidebar Widget / Search Widget -->
                    <div class="sidebar-widget-two about-widget">
                        <div class="widget-content">
                            <!-- Sidebar Title -->
                            <div class="sidebar-title-two">
                                <h5>Search Here</h5>
                            </div>
                            
                            <!-- Search -->
                            <div class="sidebar-widget search-box">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search your keyword..." required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Sidebar Widget / Search Widget -->
                    
                    <!-- Sidebar Widget / Popular Posts -->
                    <div class="sidebar-widget-two popular-posts">
                        <div class="widget-content">
                            <!-- Sidebar Title -->
                            <div class="sidebar-title-two">
                                <h5>Popular Feeds</h5>
                            </div>
                            
                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/resource/post-thumb-1.jpg" alt=""><a href="blog-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="blog-detail.html">Lorem ipsum dolor sit cised do something.</a></div>
                                <div class="post-info">24th March 2022</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/resource/post-thumb-2.jpg" alt=""><a href="blog-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="blog-detail.html">Lorem ipsum dolor sit cised do something.</a></div>
                                <div class="post-info">24th March 2022</div>
                            </article>
                            
                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/resource/post-thumb-3.jpg" alt=""><a href="blog-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="blog-detail.html">Lorem ipsum dolor sit cised do something.</a></div>
                                <div class="post-info">24th March 2022</div>
                            </article>
                            
                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/resource/post-thumb-4.jpg" alt=""><a href="blog-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="blog-detail.html">Lorem ipsum dolor sit cised do something.</a></div>
                                <div class="post-info">24th March 2022</div>
                            </article>
                            
                        </div>
                    </div>
                    <!-- End Sidebar Widget / Popular Posts -->
                    
                    <!-- Sidebar Widget / Category Widget -->
                    <div class="sidebar-widget-two category-widget-two">
                        <div class="widget-content">
                            <!-- Sidebar Title -->
                            <div class="sidebar-title-two">
                                <h5>Categories</h5>
                            </div>
                            <ul class="cat-list-two">
                                <li><a href="#">Business<span>26</span></a></li>
                                <li><a href="#">Consultant<span>30</span></a></li>
                                <li><a href="#">Creative<span>71</span></a></li>
                                <li><a href="#">UI/UX<span>56</span></a></li>
                                <li><a href="#">Technology<span>60</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Sidebar Widget / Category Widget -->
                    
                    <!-- Sidebar Widget / Instagram Widget -->
                    <div class="sidebar-widget-two instagram-widget">
                        <div class="widget-content">
                            <!-- Sidebar Title -->
                            <div class="sidebar-title-two">
                                <h5>Categories</h5>
                            </div>
                            <a href="#">Popular</a>
                            <a href="#">Design</a>
                            <a href="#">ux</a>
                            <a href="#">Usability</a>
                            <a href="#">Develop</a>
                            <a href="#">Icon</a>
                            <a href="#">Business</a>
                            <a href="#">Consult</a>
                            <a href="#">Kit</a>
                            <a href="#">Keyboard</a>
                            <a href="#">Mouse</a>
                            <a href="#">Tech</a>
                        </div>
                    </div>
                    <!-- End Sidebar Widget / Instagram Widget -->
                    
                </aside>
            </div>
                                                                                
        </div>
    </div>
</div>
@endsection