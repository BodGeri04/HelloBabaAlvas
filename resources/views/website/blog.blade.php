<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<title>{{ $title ?? config('app.name') }}</title>
@extends('website.main')
@section('content')
    <!-- Page Title Section -->
    <section class="page-title" style="background-image: url(/assets/images/gallery/WebsiteHeader2.png)">
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

                            <h3>{{ $blog->title }}</h3>

                            <div class="blog-content blog-ulol">
                                {!! $blog->content !!}
                            </div>

                            <div class="main-image">
                                <img src="{{ asset('assets/images/gallery/blog/' . $blog->cover_image) }}"
                                    alt="{{ $blog->cover_image }}" />
                            </div>
                            @if ($blog->second_main_title)
                                <div class="setting-box">
                                    <h3>{{ $blog->second_main_title }}</h3>
                                    <div class="box-inner">
                                        <div class="small-image">
                                            <img src="{{ asset('assets/images/gallery/blog/' . $blog->second_cover_image) }}"
                                                alt="{{ $blog->second_cover_image }}" />
                                        </div>
                                        <p>{!! $blog->second_content !!}</p>
                                    </div>
                                </div>
                            @endif
                                @if ($blog->quote)
                                    <blockquote>
                                        <span class="quote-icon flaticon-quote-2"></span>
                                        <div class="quote-text">{!! $blog->quote !!}</div>
                                        <div class="designation">
                                            {{ $blog->quote_author }}
                                            @if ($blog->quote_title)
                                                <span>{{ $blog->quote_title }}</span>
                                            @endif
                                        </div>
                                    </blockquote>
                                @endif
                                <div class="blog-ulol">
                                    <p>{!! $blog->end_content !!}</p>
                                </div>
                                <!-- Post Share Options-->
                                <div class="post-share-options">
                                    <div class="post-share-inner clearfix">
                                        <div class="pull-left tags">
                                            <strong>Kapcsolódó témák</strong>
                                            @if (!empty($blog->tags))
                                                @foreach ($blog->tags as $tag)
                                                    <a href="#">{{ $tag }}</a>
                                                @endforeach
                                            @endif
                                        </div>
                                        <ul class="social-box pull-right">
                                            <li class="share">A cikk itt is elérhető</li>
                                            @if (!empty($blog->social_share_link['facebook']))
                                                <li>
                                                    <a href="{{ $blog->social_share_link['facebook'] }}"
                                                        target="_blank"><span class="fa fa-facebook-f"></span></a>
                                                </li>
                                            @endif
                                            @if (!empty($blog->social_share_link['instagram']))
                                                <li>
                                                    <a href="{{ $blog->social_share_link['instagram'] }}"
                                                        target="_blank"><span class="fa fa-instagram"></span></a>
                                                </li>
                                            @endif
                                            @if (!empty($blog->social_share_link['tiktok']))
                                                <li>
                                                    <a href="{{ $blog->social_share_link['tiktok'] }}"
                                                        target="_blank"><span class="fa fa-tiktok"></span></a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                                <!-- More Posts -->
                                <div class="more-posts">
                                    <div class="clearfix d-flex justify-content-between align-items-center flex-wrap"
                                        style="gap: 10px;">
                                        @if ($pastBlog)
                                            <div class="prev text-truncate" style="max-width: 45%;">
                                                <a href="{{ url('blog/' . $pastBlog->slug) }}">
                                                    Korábbi blog
                                                    <strong class="d-block text-truncate"
                                                        style="max-width: 100%;">{{ $pastBlog->title }}</strong>
                                                </a>
                                            </div>
                                        @endif
                                        <span class="grid-icon flaticon-grid"></span>
                                        @if ($latestBlog)
                                            <div class="next text-truncate text-end" style="max-width: 45%;">
                                                <a href="{{ url('blog/' . $latestBlog->slug) }}">
                                                    Legújabb blog
                                                    <strong class="d-block text-truncate"
                                                        style="max-width: 100%;">{{ $latestBlog->title }}</strong>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- <!-- Blog Author Box -->
                                <div class="blog-author-box">
                                    <div class="author-inner">
                                        <div class="thumb"><img src="assets/images/resource/author-5.jpg" alt="">
                                        </div>
                                        <div class="title">Írta</div>
                                        <h4 class="name">Bod Orsolya</h4>
                                        <div class="text">Baba és kisgyermek alvástanácsadó.
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Author Box --> --}}

                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">

                        <!-- Sidebar Widget / Popular Posts -->
                        <div class="sidebar-widget-two popular-posts">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title-two">
                                    <h5>Legnézettebb blogok</h5>
                                </div>
                                @foreach ($popularBlogs as $popularblog)
                                    <article class="post">
                                        <figure class="post-thumb"><img
                                                src="{{ asset('assets/images/gallery/blog/' . $popularblog->cover_image) }}"
                                                alt=""><a href="{{ url('blog/' . $popularblog->slug) }}"
                                                class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                        <div class="text"><a
                                                href="{{ url('blog/' . $popularblog->slug) }}">{{ $popularblog->title }}</a></div>
                                        <div class="post-info">{{ $popularblog->created_at->format('Y. F d.') }}</div>
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
                                    <h5>Népszerű kategóriák</h5>
                                </div>
                                <ul class="cat-list-two">
                                    @foreach ($limitedTags as $tag)
                                        <li><a href="#">{{ $tag }}</a>
                                            {{-- ezt kell bemásolni a href-be: {{ url('blog/tag/' . urlencode($tag)) }} --}}
                                        </li>
                                    @endforeach
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
