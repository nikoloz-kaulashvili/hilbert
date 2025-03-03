@extends('website.index')
@section('content')
    <div class="container-fluid main-container mt-5">
        <div class="row work-row">
            <div class="col-md-6"></div>
            <div class="col-md-6 our-work">
                <div class="swiper-work">
                    <div class="swiper landingSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="work-card">
                                    <img src="/website/assets/img/askrioni.png" alt="test" data-toggle="modal" data-target=".modal-askrioni">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="work-card">
                                    <img src="/website/assets/img/chitostan.png" alt="test" data-toggle="modal" data-target=".modal-chitostan">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="work-card">
                                    <img src="/website/assets/img/lale.png" alt="test" data-toggle="modal" data-target=".modal-lale">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="work-card">
                                    <img src="/website/assets/img/tanovani.png" alt="test" data-toggle="modal" data-target=".modal-tanovani">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/works">
                    <div class="btn-main btn-brand mt-4">
                    our work
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-5 who-row">
            <div class="col-md-4"></div>
            <div class="col-md-8 d-flex text-container">
                <p class="who-text">
                    <span class="section-title">Who we are</span>
                    We are Hilbert, a marketing agency inspired by
                    the principles of Hilbert space. Just as every point in Hilbert
                    space is unique, we discover what makes your brand stand
                    out and transform it into your competitive advantage.
                </p>
            </div>
        </div>
        <div class="row mt-5 service-row">
            <div class="col-md-4"></div>
            <div class="col-md-8 d-flex text-container">
                <span class="section-title">Our Service</span>
                <div class="service-swiper">
                    <div class="swiper serviceSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">01</span>
                                        <span class="service-name">BRAND STRATEGY</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">Market Research</p>
                                        <p class="mt-2">Brand Positioning</p>
                                        <p class="mt-2">Naming & Taglines</p>
                                        <p class="mt-2">Brand Storytelling</p>
                                        <p class="mt-2">Brand Messaging & Communication Strategy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">02</span>
                                        <span class="service-name">VISUAL BRAND IDENTITY</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">Logo Design</p>
                                        <p class="mt-2">Typography</p>
                                        <p class="mt-2">Packaging & Marketing Material Design</p>
                                        <p class="mt-2">Color Palette</p>
                                        <p class="mt-2">Brand Guidelines</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">03</span>
                                        <span class="service-name">MARKETING & PROMOTION</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">Social Media Management</p>
                                        <p class="mt-2">Photo & Video Production</p>
                                        <p class="mt-2">Event Organization</p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">04</span>
                                        <span class="service-name">IT SOLUTIONS</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">UI / UX</p>
                                        <p class="mt-2">Web Development</p>
                                        <p class="mt-2">Software & App Development</p>
                                        <p class="mt-2">Domain & Server Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">05</span>
                                        <span class="service-name">PACKAGING & LABELING</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">Custom Printing & Packaging</p>
                                        <p class="mt-2">QR Code Integration </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">06</span>
                                        <span class="service-name">INTERNATIONAL BUSINESS DEVELOPMENT</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">International Exhibitions & Trade Shows</p>
                                        <p class="mt-2">B2B Networking & Meetings</p>
                                        <p class="mt-2">Product Sampling & Competitions </p>
                                        <p class="mt-2">Investment Attraction </p>
                                        <p class="mt-2">Importer & Distributor Engagement </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 works-row">
            <div class="col-md-4"></div>
            <div class="col-md-8 d-flex text-container">
                <h1>SELECTED WORKS</h1>
                <div class="row work-items">
                    <div class="col-12 col-sm-6 col-md-6 work-item">
                        <img src="/website/assets/img/lale.png" alt="test">
                        <p class="hidden-text">View Case</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">LALE</span>
                            <div class="work-list">
                                <p>Visual branding</p>
                                <p>Brand Strategy</p>
                                <p>Social Media Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 work-item">
                        <img src="/website/assets/img/tanovani.png" alt="test">
                        <p class="hidden-text">View Case</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">Tanovani</span>
                            <div class="work-list">
                                <p>Visual branding</p>
                                <p>Brand Strategy</p>
                                <p>Social Media Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 work-item">
                        <img src="/website/assets/img/chitostan.png" alt="test">
                        <p class="hidden-text">View Case</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">Chitostan</span>
                            <div class="work-list">
                                <p>Visual branding</p>
                                <p>Brand Strategy</p>
                                <p>Social Media Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 work-item">
                        <img src="/website/assets/img/askrioni.png" alt="test">
                        <p class="hidden-text">View Case</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">AskRioni</span>
                            <div class="work-list">
                                <p>Visual branding</p>
                                <p>Brand Strategy</p>
                                <p>Social Media Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 all-works-a work-item">
                        <a href="" class="all-works">
                            All Works >
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="partners">
        <div class="container-fluid">
            <div class="row mt-4 mb-4">
                <div class="col-md-4"></div>
                <div class="col-md-8 partners-col">
                    <h2>WE ARE TRUSTED</h2>
                    <div class="d-flex partner-logos">
                        <div class="swiper partnerSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/lalel.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/otaridl.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/askrionl.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/tanovanl.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/bimbilil.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/kaifriesl.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/avalianil.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/sagulel.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/website/assets/img/wineryl.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/contact">
        <div class="btn-contact">
            Contact
        </div>
    </a>
    <script>
        var swiper = new Swiper(".landingSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                440: {
                    slidesPerView: 1.3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1.2,
                    spaceBetween: 10,
                },
                1124: {
                    slidesPerView: 1.4,
                    spaceBetween: 10,
                },
                1524: {
                    slidesPerView: 1.7,
                    spaceBetween: 10,
                },
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".partnerSwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                440: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".serviceSwiper", {
            direction: "vertical",
            loop: true,
            slidesPerView: 3,
            initialSlide: 1,
            slidesPerGroup: 1,
            speed: 1000,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $(window).on("scroll", function() {
                var scrollPosition = $(window).scrollTop() + $(window).height();
                var footerPosition = $("footer").offset().top;
                if (scrollPosition >= footerPosition) {
                    $("body").css("background-color", "#fff");
                } else {
                    $("body").css("background-color", "#071021");
                }
            });
        });
    </script>    
@stop
