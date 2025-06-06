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
                    <li>Szolgáltatások</li>
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
                        <div class="text">Az összes elérhető termék megjelenítve</div>
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
                @foreach ($products as $product)
                    <!-- Course Block -->
                    <div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="/product/{{$product->slug}}"><img class="transition-500ms"
                                        src="{{ asset('assets/images/gallery/product/' . $product->image) }}" alt="Termék képe" /></a>
                            </div>
                            <div class="lower-content">
                                <h5><a href="/product/{{$product->slug}}">{{$product->name}}</a></h5>
                                <label>{!!$product->description!!}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Courses Page Section -->
@endsection
