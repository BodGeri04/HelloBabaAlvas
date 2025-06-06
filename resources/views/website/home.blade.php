<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<title>{{ $title ?? config('app.name') }}</title>
@extends('website.main')
@section('content')
    <!-- Main Slider -->

    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3 notification-alert" role="alert"
                    style="max-width: 700px; margin: 0 auto;">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Bezárás"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-3 notification-alert" role="alert"
                    style="max-width: 700px; margin: 0 auto;">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Bezárás"></button>
                </div>
            @endif
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                    <li data-transition="slidingoverlayhorizontal" data-description="Slide Description" data-index="rs-1688"
                        data-slotamount="default" data-thumb="assets/images/main-slider/image-1.jpg"
                        data-title="Slide Title">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="assets/images/gallery/kapcsolatfelvetel.jpg">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-150','-240','-210','-210']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
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
                            <div class="text">Nyugodt alvás a babának és a családnak.
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
                                <a href="#contact-section" class="theme-btn btn-style-two"><span class="txt">Segítek
                                        neked!
                                    </span></a>
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
                            <img src="assets/images/gallery/Orsi_Berci.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">Rólam</div>
                            <h2>Bod Orsolya vagyok, baba és kisgyermek alvástanácsadó</h2>
                            <div class="text">Célom, hogy a kisbabás és kisgyerekes családok számára tudományos alapú,
                                gyakorlatias tanácsokkal segítsek az alvás, altatás és napirend kialakításában, hogy
                                mindenki pihentetően aludhasson.
                                <br><br>
                                Segítek megérteni a babák alvásának természetét, eloszlatni a tévhiteket, és olyan rutint,
                                valamint környezetet kialakítani, amely támogatja mind a baba, mind a szülők igényeit.<br>
                                Olyan ötleteket és tippeket adok, amelyek megkönnyítik ezt a bizonytalansággal és
                                kihívásokkal teli időszakot mind a babák, mind a családok számára, miközben biztosítjuk a
                                biztonságos környezetet, ahol a baba igényeire érzékenyen reagálhatunk.
                                <br><br>
                                Egy olyan világot képzelek el, ahol a babák születésük pillanatától megkapják a válaszkész,
                                segítő gondoskodást, így érzelmileg érett, empatikus felnőttek formálódnak belőlük. Hiszem,
                                hogy a korai években kapott szeretet és válaszkész gondoskodás alapvetően formálhatja egy
                                ember érzelmi világát, és hozzájárulhat egy harmonikusabb, elfogadóbb társadalom
                                kialakulásához.
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

                    </div>

                </div>
            </div>
            <div class="marquee-container">
                <div class="marquee-content">
                    <span class="scrolling-text color-1">Nehezen megy az altatás?</span>
                    <span class="scrolling-text color-2">Sokszor ébred a babád éjszaka?</span>
                    <span class="scrolling-text color-3">Sokat sír?</span>
                    <span class="scrolling-text color-4">Fáradt vagy, nem tudsz pihenni?</span>
                    <span class="scrolling-text color-5">Bizonytalan vagy, hogy jól csinálod-e?</span>
                    <span class="scrolling-text color-6">Mindenki mást mond, te meg nem mersz hallgatni az ösztöneidre?
                    </span>
                    <span class="scrolling-text color-7">Segítek neked!</span>
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
                <h2>Hogyan segítek?</h2>
            </div>
            <div class="inner-container">
                <div class="services-carousel owl-carousel owl-theme">
                    @foreach ($products as $product)
                        <!-- Service Block -->
                        <div class="service-block translate-top{{ $product->price < 1 ? ' soon-available' : '' }}"
                            style="{{ $product->price < 1 ? 'opacity:0.6; filter: grayscale(60%); pointer-events: none;' : '' }}">
                            <div class="inner-box">
                                <div class="image">
                                    <a @if ($product->price > 0) href="/product/{{ $product->slug }}" @endif>
                                        <img class="transition-600ms"
                                            src="{{ asset('assets/images/gallery/product/' . $product->image) }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    @if ($product->price < 1)
                                        <div class="lessons">Hamarosan!</div>
                                    @else
                                        @if ($product->discountPrice)
                                            <div class="lessons">
                                                <span
                                                    style="text-decoration: line-through; color: grey;">{{ number_format($product->price, 0, '', '.') }}
                                                    Ft</span>
                                                <span
                                                    style="color: red; margin-left: 5px;">{{ number_format($product->discountPrice, 0, '', '.') }}
                                                    Ft</span>
                                            </div>
                                        @else
                                            <div class="lessons">{{ number_format($product->price, 0, '', '.') }} Ft</div>
                                        @endif
                                    @endif

                                    <div class="lower-box">
                                        @if ($product->price > 0)
                                            <h4><a href="/product/{{ $product->slug }}">{{ $product->name }}</a></h4>
                                        @else
                                            <h4>{{ $product->name }}</h4>
                                        @endif
                                    </div>
                                    <label>{!! $product->description !!}</label>
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
    <section class="process-section"
        style="background-image: url(assets/images/background/pattern-2.png); position: relative; overflow: hidden;">
        <div
            style="position: absolute; inset: 0; background: inherit; filter: blur(4px); z-index: 0; pointer-events: none;">
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light">
                <div class="title">Folyamat</div>
                <h2>Az online tanácsadás folyamata</h2>
            </div>
            <div class="row clearfix">

                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-notepad"></div>
                        <div class="step">1. lépés</div>
                        <h4><a href="#contact-section">Kapcsolatfelvétel</a></h4>
                        <div class="text">Töltsd ki az űrlapot, és írd le, miben tudok segíteni. Ezután e-mailben
                            egyeztetünk időpontot, és küldöm a további teendőket.
                        </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-email"></div>
                        <div class="step">2. lépés</div>
                        <h4><a href="#contact-section">Előkészületek</a></h4>
                        <div class="text"> A tanácsadás díjának rendezése után kitöltesz egy részletes kérdőívet, amely
                            alapján fel tudok készülni a beszélgetésre.
                        </div>
                    </div>
                </div>


                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-money-bag"></div>
                        <div class="step">3. lépés</div>
                        <h4><a href="#contact-section">Tanácsadás
                            </a></h4>
                        <div class="text">A megbeszélt időpontban megtartjuk az online konzultációt – személyre
                            szabottan, a problémádra fókuszálva.
                        </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box transition-300ms">
                        <div class="icon transition-500ms flaticon-finish-line"></div>
                        <div class="step">4. lépés</div>
                        <h4><a href="#contact-section">Utánkövetés
                            </a></h4>
                        <div class="text">A tanácsadás után is számíthatsz rám: írásban kérdezhetsz, visszajelezhetsz, és
                            további iránymutatást is kapsz, ha szükséged van rá.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Process Section -->

    <!-- Course Section Two -->
    <section id="blog-section" class="course-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title color-four">Blogok</div>
                <h2>Legújabb bejegyzések</h2>

                <!-- Keresőmező középre igazítva -->
                <div class="sidebar-widget search-box"
                    style="margin-top: 50px; max-width: 500px; margin-left: auto; margin-right: auto;">
                    {{-- <form method="POST" action="{{ route('blog.search') }}" id="search-form">
                        @csrf
                        <div class="form-group">
                            <input type="search" id="search-field" name="query"
                                placeholder="Írd be a keresni kívánt kulcsszót..."
                                value="{{ old('query', $query ?? '') }}" required>
                            <button type="submit" style="display: none;">Keresés</button>
                        </div>
                    </form> --}}
                </div>
            </div>
            <div class="row clearfix d-none d-md-flex">
                @foreach ($blogs as $blog)
                    <div class="course-block col-lg-3 col-md-6 col-sm-12" id="search-results">
                        <div class="inner-box" data-wow-delay="0ms" data-wow-duration="400ms">
                            <div class="image">
                                <a href="/blog/{{ $blog->slug }}">
                                    <img class="transition-500ms"
                                        src="{{ asset('assets/images/gallery/blog/' . $blog->cover_image) }}"
                                        alt="{{ $blog->cover_image }}" />
                                </a>
                            </div>
                            <div class="lower-content">
                                <h5><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="blog-carousel owl-carousel owl-theme d-md-none">
                @foreach ($blogs as $blog)
                    <div class="course-block">
                        <div class="inner-box" data-wow-delay="0ms" data-wow-duration="400ms">
                            <div class="image">
                                <a href="/blog/{{ $blog->slug }}">
                                    <img class="transition-500ms"
                                        src="{{ asset('assets/images/gallery/blog/' . $blog->cover_image) }}"
                                        alt="{{ $blog->cover_image }}" />
                                </a>
                            </div>
                            <div class="lower-content">
                                <h5><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- End Course Section Two -->
    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                {{-- <div class="title color-four">Referenciáim</div> --}}
                <h2>Rólam írták</h2><!-- Ezt a szöveget még itt meg kell változatatni valamire. -->
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
                            <div class="text">„Nagyon szépen köszönöm a tanácsaidat, tényleg sokat segítettek! A
                                megerősítésed is rengeteget számított, főleg amikor már teljesen el voltam keseredve a sok
                                ébredéstől. Bevezettem a hintát, és azóta szinte duplázódott az alvásidőnk – két nap alatt!
                                Megnyugtató volt látni, hogy nem vagyok egyedül, és van kiút ebből a helyzetből.”</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <h5>Dóra</h5>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="text">„Szuper tanácsokat kaptam – olyanokat, amiket azonnal tudtam alkalmazni.
                                Már attól megkönnyebbültem, hogy valaki megértette, milyen nehéz ez a nemalvós időszak. A
                                tippek segítettek rendszerezni a napunkat, és sokkal kiegyensúlyozottabb lett a babám is.
                                Most már nem félek levegőre vinni vagy több ingert adni neki – sőt, ez nyugtatta meg
                                igazán!”</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <h5>Szilvi</h5>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="text">“Nagyon szépen köszönöm a megerősítést, a biztató szavakat és a jó
                                tanácsokat is!”</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <h5>Kitti</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Testimonial Section -->

    <section class="contact-form-section" id="contact-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div
                    class="image-column col-lg-6 col-md-12 col-sm-12 d-none d-lg-flex align-items-center justify-content-center">
                    <div class="inner-column w-100 d-flex justify-content-center align-items-center"
                        style="min-height: 100%;">
                        <div class="image"
                            style="display: flex; justify-content: center; align-items: center; width: 100%;">
                            <img src="{{ asset('assets/images/gallery/kapcsolatfelvetel_telefon.jpg') }}" alt=""
                                style="max-width: 70%; width: 100%; height: auto; display: block; margin: 0 auto;" />
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title color-three">Kapcsolatfelvétel</div>
                            <h2>Szolgáltatás megrendelése</h2>
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
                                            @foreach ($availableProducts as $availableProduct)
                                                <option value="{{ $availableProduct->name }}"
                                                    {{ old('product') == $availableProduct->name ? 'selected' : '' }}>
                                                    {{ $availableProduct->name }}
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
                                        Töltsd ki az űrlapot és küldd el!
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                        </div>
                                        @error('g-recaptcha-response')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
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

    @if (session('scrollTo'))
        <script>
            window.addEventListener('load', function() {
                const element = document.getElementById('{{ session('scrollTo') }}');
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        </script>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const marqueeContainer = document.querySelector('.marquee-container');
            const marqueeContent = marqueeContainer.querySelector('.marquee-content');

            // Állítsd be a sebességet
            const speed = 0.9; // Mozgás sebessége pixel/frame-ben

            let animationFrameId = null;
            let position = 0; // Az aktuális vízszintes pozíció

            function startMarquee() {
                // 1️⃣ Ellenőrizzük és klónozzuk a tartalmat, ha szükséges.
                // Először győződjünk meg róla, hogy csak az eredeti tartalom van bent a méréshez.
                // Ha már voltak klónok a DOM-ban az előző futtatásból (pl. resize handler), szedjük ki őket.
                marqueeContainer.innerHTML =
                    ''; // Töröljük a belső tartalmat (kivéve az eredetit, azt majd visszarakjuk)
                const originalContent = document.createElement('div'); // Létrehozzuk az eredeti tartalom helyét
                originalContent.classList.add('marquee-content');
                // Másoljuk át az eredeti szövegeket az ideiglenes tárolóból
                marqueeContent.childNodes.forEach(node => {
                    // Csak element node-okat másoljunk át, ne üres whitespace text node-okat
                    if (node.nodeType === 1) {
                        originalContent.appendChild(node.cloneNode(true));
                    }
                });
                marqueeContainer.appendChild(
                    originalContent); // Visszahelyezzük az eredeti tartalom elemeit egy friss konténerbe


                // Biztosítjuk, hogy a megjelenítés készen áll a méréshez
                // Kisebb késleltetés, hogy a böngésző kiszámolhassa a méreteket
                requestAnimationFrame(() => { // Vagy setTimeout(..., 10);

                    // Kiszámoljuk az EGYETLEN eredeti tartalom blokk (originalContent) teljes szélességét
                    // Ez a távolság, amit egy ciklusban meg kell tenni.
                    const contentWidth = originalContent.offsetWidth;

                    // console.log("Calculated contentWidth:", contentWidth); // Ellenőrizd ezt a konzolban!

                    // Ellenőrizzük, hogy a szélesség érvényes-e
                    if (contentWidth <= 0) {
                        console.error(
                            "Content width is 0 or less. Cannot start marquee. Check CSS display and content."
                        );
                        return; // Megállunk, ha a szélesség 0
                    }

                    // 2️⃣ Klónozzuk a tartalmat annyiszor, ahányszor szükséges a hézagmentes megjelenítéshez
                    // Általában elég 1 klón, ha a konténer szélessége nem extrémen nagy a tartalomhoz képest
                    // De a biztonság kedvéért klónozhatunk többször is, amíg a teljes szélesség elég nagy lesz
                    let totalContentWidth = contentWidth;
                    while (totalContentWidth < marqueeContainer.offsetWidth *
                        2) { // Klónozunk, amíg legalább kétszerese a konténer szélességének
                        const clone = originalContent.cloneNode(true);
                        marqueeContainer.appendChild(clone);
                        totalContentWidth += contentWidth;
                    }

                    // Frissítjük a hivatkozást a már duplikált elemekre
                    const marqueeItems = marqueeContainer.querySelectorAll('.marquee-content');


                    // 3️⃣ Animációs ciklus
                    function animate() {
                        position -= speed; // Mozgás balra

                        // A KULCS a megszakítás nélküli hurokhoz:
                        // Ha az ELSŐ (.marquee-content) elem bal széle (position)
                        // kiment teljesen a bal oldalon (azaz position <= -contentWidth),
                        // akkor az ÖSSZES .marquee-content elem position értékét
                        // növeljük pontosan contentWidthnyit.
                        if (position <= -contentWidth) {
                            position += contentWidth; // Átugrás a másik blokk mögé
                            // console.log("Loop reset. New position:", position); // Ellenőrzéshez
                        }

                        // Alkalmazzuk az új pozíciót az ÖSSZES tartalom blokkra
                        marqueeItems.forEach(item => {
                            // Az offset alapján számoljuk ki az egyes elemek pozícióját
                            // Itt egyszerűbb a position-t direktben használni,
                            // mivel a hurok logic a position-t reseteli.
                            // VAGY, a duplikált elemek esetén:
                            // item.style.transform = `translateX(${position}px)`; // Ezt csináltuk az előző kódban
                            // Ha több mint 2 klón van, más logika kellhet, de 2-vel ez a módszer működik.

                            // Egyszerűbb, ha a position-t használjuk a _konténer_ eltolására,
                            // és a belső elemek a konténerhez képest maradnak.
                            // DE mivel a struktúra már a .marquee-content elemekkel van,
                            // maradjunk ennél: mindegyik .marquee-content elemet a közös 'position' alapján toljuk el.
                            // AZONBAN, ha több mint 2 klón van, akkor a modulo logikának van értelme,
                            // de másképp:
                            // const currentOffset = position % contentWidth; // Hol tart a hurok egy cikluson belül
                            // item.style.transform = `translateX(${currentOffset + index * contentWidth}px)`; // Minden elem a saját helyén, eltolva a ciklus offsettel.

                            // VISSZATÉRVE az egyszerű, 2 blokkos módszerre, ami megbízható:
                            item.style.transform = `translateX(${position}px)`;

                        });


                        // Kérünk egy újabb képkockát
                        animationFrameId = requestAnimationFrame(animate);
                    }

                    // Elindítjuk az animációt a szélesség mérése után
                    animate();
                }); // requestAnimationFrame a méréshez

            }

            // Reszponzív kezelés ablakméret váltáskor
            window.addEventListener('resize', () => {
                cancelAnimationFrame(animationFrameId); // Megállítjuk az aktuális animációt
                position = 0; // Visszaállítjuk a pozíciót
                // Eltávolítjuk a régi klónokat
                marqueeContainer.innerHTML = '';
                // Újraindítjuk az animációt az új méretekkel és klónokkal
                startMarquee();
            });

            // Elindítjuk az animációt az oldal betöltésekor
            startMarquee();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            if (window.innerWidth < 768) {
                $('.blog-carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: false,
                    dots: true,
                    items: 1
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                let alerts = document.querySelectorAll('.notification-alert');
                alerts.forEach(function(alert) {
                    // Bootstrap 5 fade out
                    alert.classList.remove('show');
                    setTimeout(function() {
                        alert.remove();
                    }, 500); // fade ki animáció után törlés
                });
            }, 4000); // 4 másodperc után eltűnik
        });
    </script>
@endsection
