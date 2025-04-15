@extends('website.main')
@section('content')
    <!-- Main Slider -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert"
            style="max-width: 700px; margin: 0 auto;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Bezárás"></button>
        </div>
    @endif
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                    <li data-transition="slidingoverlayhorizontal" data-description="Slide Description" data-index="rs-1688"
                        data-slotamount="default" data-thumb="assets/images/main-slider/image-1.jpg"
                        data-title="Slide Title">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="assets/images/DSC_8594.jpg">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-150','-240','-210','-210']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
                            <div class="title">Nyugodt alvás a babának és a családnak</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-30','-100','-100','-110']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            style="">
                            <h1>Pihenj Baba <br> ...és pihenj te is!</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['100','40','15','0']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"power3.out"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            style="">
                            <div class="text">Nyugodt alvás a babának és a családnak
                                <br>Nehezen megy az altatás? Sokszor ébred a babád éjszaka? Sokat sír?
                            </div>


                        </div>

                        <div class="tp-caption  tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','700','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['190','150','105','100']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
                            <div class="button-box">
                                <a href="services.html" class="theme-btn btn-style-two"><span class="txt">Segítek
                                        neked!
                                    </span></a>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','700','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['260','240','180','180']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
                            <div class="clients-image">
                                <img src="assets/images/main-slider/icons.png" alt="" />
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image" data-tilt data-tilt-max="3">
                            <img src="assets/images/hattertest.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">Rólam</div>
                            <h2>Bod Orsolya vagyok, baba és kisgyermek alvástanácsadó.</h2>
                            <div class="text">Egyedülálló anyaként, egy (akkor még) nagyon kis alvásigényű gyermekkel,
                                pontosan tudom, milyen fárasztó tud lenni, amikor az alvás, a pihenés elérhetetlennek tűnik,
                                és úgy érezzük, hogy örökké kimerültek leszünk.<br>
                                Szinte minden, amit a 'babázásról' gondoltam, a kisfiam születése után felülíródott és új
                                perspektívába helyeződött. Előtte más elképzelésem volt a kisbabás anyukák életéről: láttam,
                                olvastam, hallottam mások tapasztalatait, és én is elképzeltem, hogy mit hogyan fogok
                                csinálni, mit veszek meg, vagy mit semmiképpen sem.
                            </div>
                        </div>
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-5 col-md-5 col-sm-12">
                                <ul class="option-list">
                                    <li>
                                        <a href="/aboutMe" class="theme-btn btn-style-two"><span class="txt">Bővebben
                                            </span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Counter Box -->
                        <div class="counter-box">
                            <!-- Fact Counter -->
                            <div class="fact-counter">
                                <div class="row clearfix">

                                    <!-- Column -->
                                    <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="2500" data-stop="10">0</span>k
                                                </div>
                                                <div class="counter-title">Active students <br> worldwide</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Column -->
                                    <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="300ms"
                                            data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="2500" data-stop="10">0</span>k
                                                </div>
                                                <div class="counter-title">Basement <br> in New York</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Column -->
                                    <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="600ms"
                                            data-wow-duration="1500ms">
                                            <div class="content">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3000" data-stop="2">0</span>k
                                                </div>
                                                <div class="counter-title">Cup of tea & <br> coffee</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Counter Box -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="title color-two">Szolgáltatások</div>
                <h2>Hogyan segíthetek?</h2>
            </div>
            <div class="inner-container">
                <div class="services-carousel owl-carousel owl-theme">
                    @foreach ($products as $product)
                        <!-- Service Block -->
                        <div class="service-block translate-top">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="service-detail.html">
                                        <img class="transition-600ms"
                                            src="{{ asset('assets/images/gallery/' . $product->image) }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <div class="lessons">{{ $product->price }} Ft</div>
                                    <div class="lower-box">
                                        <h4><a href="service-detail.html">{{ $product->name }}</a></h4>
                                    </div>
                                    <label>{{ $product->description }}</label>

                                    <ul class="post-info mt-1">
                                        <li><span class="fa fa-clock"></span> 1 óra</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Process Section -->
    <section class="process-section" style="background-image: url(assets/images/background/pattern-2.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light">
                <div class="title">Folyamat</div>
                <h2>A tanácsadás folyamata</h2>
            </div>
            <div class="row clearfix">

                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-planning"></div>
                        <div class="step">I. lépés</div>
                        <h4><a href="service-detail.html">Kitöltöd az űrlapot</a></h4>
                        <div class="text">Az űrlap kitöltésével felveszed velem a kapcsolatot, és leírod a felmerült
                            alvási problémákat..</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-implement"></div>
                        <div class="step">II. lépés</div>
                        <h4><a href="service-detail.html">Válasz email-ben</a></h4>
                        <div class="text"> Miután megkaptam az űrlapot, email-ben megkereslek, és egyeztetünk egy
                            megfelelő időpontot a tanácsadásra.. </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-friend"></div>
                        <div class="step">III. lépés</div>
                        <h4><a href="service-detail.html">Tanácsadás díja</a></h4>
                        <div class="text">Az egyeztetett időpont után elutalod a tanácsadás díját..</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-finish-line"></div>
                        <div class="step">IV. lépés</div>
                        <h4><a href="service-detail.html">Kérdőív kitöltése</a></h4>
                        <div class="text">Ezt követően küldök egy kérdőívet, amely segít abban, hogy alaposan
                            felkészüljek a beszélgetésre..</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Process Section -->

    <!-- Course Section Two -->
    <section class="course-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title color-four">IDE KELL VALAMI SZÖVEG</div>
                <h2>Gyakra keresett kurzusaim</h2>
            </div>
            <div class="row clearfix">
                <!-- ITT MAJD EGY OLYAN RÉSZ LESZ, AMI DINAMIKUSAN FRISSÜL A GYAKRAN KERESETT KURZUSOK ALAPJÁN AZ ADATBÁZISBÓL -->
                <!-- Course Block -->
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="course-detail.html"><img class="transition-500ms"
                                    src="assets/images/resource/course-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="course-detail.html">How to success through market segmentation</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>3 Chapter</li>
                                <li><span class="icon flaticon-clock"></span>10 Lessons</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Course Section Two -->
    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title color-four">Referenciáim</div>
                <h2>Ezeket a véleményeket <br> írták rólam</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <span class="quote-icon flaticon-quote-3"></span>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="text">" It’s amazing how much easier it has been to meet new people and
                                create instant connection. I have the exact same personality, the only thing that
                                has changed is my mindset and a few behaviors. "</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <div class="author-image">
                                    <img src="assets/images/resource/author-1.jpg" alt="" />
                                </div>
                                <h5>Alaxis D. Dowson</h5>
                                <div class="designation">Head Of Idea, Kilix Co.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="assets/images/gallery/kapcsolatfelvetel.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title color-three">Kapcsolatfelvétel</div>
                            <h2>Írj nekem</h2>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="{{ route('contact.send') }}">
                                @csrf
                                <div class="row clearfix">

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-user-4"></span>
                                        <input type="text" name="username" placeholder="Teljes név *" required
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-envelope"></span>
                                        <input type="email" name="email" placeholder="E-Mail cím *" required
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <span class="icon flaticon-notebook"></span>
                                        <select name="product" required class="custom-select-box">
                                            <option value="">Válassz egy csomagot! *</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->name }}"
                                                    {{ old('product') == $product->name ? 'selected' : '' }}>
                                                    {{ $product->name }}, {{ $product->price }} Ft.
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('product')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <span class="icon flaticon-pen"></span>
                                        <textarea name="message" placeholder="Üzenet">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit-form">
                                            <span class="txt">Küldés</span>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- eND Contact Form -->


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->
@endsection
