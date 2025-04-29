@extends('website.main')
@section('content')
<!-- Page Title Section -->
<section class="page-title" style="background-image: url(assets/images/gallery/kapcsolatfelvetel.jpg)">
    <div class="auto-container">
        <div class="breadcrumb-outer">
            <ul class="page-breadcrumb">
                <li><a href="/">Főoldal</a></li>
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
                                <li><span class="icon fa fa-eye"></span> {{ $blog->views }} megtekintés</li>
                                <li><span class="icon fa fa-calendar"></span> {{ $blog->created_at->format('Y. F d.') }}
                                </li>
                            </ul>

                            <div class="main-image">
                                <img src="{{ asset('assets/images/gallery/blog/' . $blog->cover_image) }}"
                                    alt="{{ $blog->cover_image }}" />
                            </div>

                            <h3>{{ $blog->title }}</h3>

                            <div class="blog-content">
                                {!! $blog->content !!}
                            </div>

                            <div class="setting-box">
                                <h3>Setting the mood with incense</h3>
                                <div class="box-inner">
                                    <div class="small-image">
                                        <img src="assets/images/resource/news-6.jpg" alt="" />
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate Lorem ipsum
                                        dolor sit amet, co nsectetur adipisicing elit, sed do eiusmod</p>
                                </div>
                            </div>
                            <blockquote>
                                <span class="quote-icon flaticon-quote-2"></span>
                                <div class="quote-text">Choices to take a holiday and travelling out in this pandemic
                                    situation are limited. Why not take a staycation.</div>
                                <div class="designation">
                                    Rosalina D. William
                                    <span>Founder</span>
                                </div>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                                ut perspiciatis unde omnis iste natus error sit voluptatem. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua.</p>
                            <!-- Post Share Options-->
                            <div class="post-share-options">
                                <div class="post-share-inner clearfix">
                                    <div class="pull-left tags"><strong>Releted Tags</strong><a href="#">Popular</a>
                                        <a href="#">Desgin</a><a href="#">UX</a>
                                    </div>
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
                                    @if($pastBlog)
                                    <div class="prev pull-left"><a href="{{url($pastBlog->slug)}}">Korábbi blog <strong>{{$pastBlog->title}}</strong></a></div>
                                    @endif
                                    <span class="grid-icon flaticon-grid"></span>
                                    @if($latestBlog)
                                    <div class="next pull-right"><a href="{{url($latestBlog->slug)}}">Legújabb blog <strong>{{$latestBlog->title}}</strong></a></div>
                                    @endif
                                    </ul>
                                </div>
                            </div>

                            <!-- Blog Author Box -->
                            <div class="blog-author-box">
                                <div class="author-inner">
                                    <div class="thumb"><img src="assets/images/resource/author-5.jpg" alt=""></div>
                                    <div class="title">Írta</div>
                                    <h4 class="name">Bod Orsolya</h4>
                                    <div class="text">Baba és kisgyermek alvástanácsadó.
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Author Box -->

                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">


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
                                            <input type="search" name="search-field" value=""
                                                placeholder="Search your keyword..." required>
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
                                    <h5>Legnézettebb blogok</h5>
                                </div>
                                @foreach($popularBlogs as $popularblog)
                                <article class="post">
                                    <figure class="post-thumb"><img src="{{ asset('assets/images/gallery/blog/' . $popularblog->cover_image) }}"
                                            alt=""><a href="{{url($popularblog->slug)}}" class="overlay-box"><span
                                                class="icon fa fa-link"></span></a></figure>
                                    <div class="text"><a href="{{url($popularblog->slug)}}">{{$popularblog->title}}</a></div>
                                    <div class="post-info">{{$popularblog->created_at->format('Y. F d.')}}</div>
                                </article>
                                @endforeach
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

                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection
