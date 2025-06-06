<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<title>{{ $title ?? config('app.name') }}</title>
@extends('website.main')
@section('content')
    <!-- Page Title Section -->
    <section class="page-title" style="background-image: url(assets/images/gallery/WebsiteHeader2.png)">
        <div class="auto-container">
            <div class="breadcrumb-outer">
                <ul class="page-breadcrumb">
                    <li><a href="/">Főoldal</a></li>
                    <li>Blogok</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title Section -->
    <!-- Courses Page Section -->
    <section class="courses-page-section">
        <div class="auto-container">

            <!-- Order Box -->
            <div class="order-box">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="text">Az összes elérhető blog megjelenítve</div>
                    </div>
                    {{-- <div class="pull-right clearfix">

                        <!-- Search -->
                        <div class="order-search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search here..."
                                        required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Search Dropdown -->
                        <div class="search-dropdown form-group">
                            <select name="country" class="custom-select-box">
                                <option>Select Order</option>
                                <option>Order 01</option>
                                <option>Order 02</option>
                                <option>Order 03</option>
                                <option>Order 04</option>
                            </select>
                        </div>

                    </div> --}}
                </div>
            </div>
            <!-- End Order Box -->

            <div class="row clearfix">
                @foreach ($blogs as $blog)
                    <!-- Course Block -->
                    <div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="/blog/{{ $blog->slug }}"><img class="transition-500ms"
                                        src="{{ asset('assets/images/gallery/blog/' . $blog->cover_image) }}"
                                        alt="Blog képe" /></a>
                            </div>
                            <div class="lower-content">
                                <h5><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h5>
                                <!-- Social media ikonok -->
                                <div class="blog-social-icons mt-2">
                                    @if ($blog->social_share_link && is_array($blog->social_share_link))
                                        @if (isset($blog->social_share_link['facebook']))
                                            <a href="{{ $blog->social_share_link['facebook'] }}" target="_blank"
                                                class="me-2" title="Facebook">
                                                <i class="fa fa-facebook-f"></i>
                                            </a>
                                        @endif
                                        @if (isset($blog->social_share_link['instagram']))
                                            <a href="{{ $blog->social_share_link['instagram'] }}" target="_blank"
                                                class="me-2" title="Instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        @endif
                                        @if (isset($blog->social_share_link['tiktok']))
                                            <a href="{{ $blog->social_share_link['tiktok'] }}" target="_blank"
                                                class="me-2" title="TikTok">
                                                <i class="fa fa-tiktok"></i>
                                            </a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Courses Page Section -->
@endsection
