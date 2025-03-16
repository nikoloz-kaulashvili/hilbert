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
                                    <img src="/website/assets/img/askrioni.png" alt="test" data-toggle="modal"
                                        data-target=".modal-askrioni">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="work-card">
                                    <img src="/website/assets/img/chitostan.png" alt="test" data-toggle="modal"
                                        data-target=".modal-chitostan">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="work-card">
                                    <img src="/website/assets/img/lale.png" alt="test" data-toggle="modal"
                                        data-target=".modal-lale">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="work-card">
                                    <img src="/website/assets/img/tanovani.png" alt="test" data-toggle="modal"
                                        data-target=".modal-tanovani">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/works">
                    <div class="btn-main btn-brand mt-4">
                        {{ __('main.text_22') }}
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-5 who-row">
            <div class="col-md-4"></div>
            <div class="col-md-8 d-flex text-container">
                <p class="who-text">
                    <span class="section-title">{{ __('main.text_23') }}</span> {{ __('main.text_24') }}

                </p>
            </div>
        </div>
        <div class="row mt-5 service-row  main-service">
            <div class="col-md-4"></div>
            <div class="col-md-8 d-flex text-container">
                <span class="section-title">{{ __('main.text_25') }}</span>
                <div class="service-swiper">
                    <div class="swiper serviceSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">01</span>
                                        <span class="service-name"> {{ __('main.text_26') }}</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">{{ __('main.text_27') }}</p>
                                        <p class="mt-2">{{ __('main.text_28') }}</p>
                                        <p class="mt-2">{{ __('main.text_29') }}</p>
                                        <p class="mt-2">{{ __('main.text_30') }}</p>
                                        <p class="mt-2">{{ __('main.text_31') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">02</span>
                                        <span class="service-name">{{ __('main.text_32') }}</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">{{ __('main.text_33') }}</p>
                                        <p class="mt-2">{{ __('main.text_34') }}</p>
                                        <p class="mt-2">{{ __('main.text_35') }}</p>
                                        <p class="mt-2">{{ __('main.text_36') }}</p>
                                        <p class="mt-2">{{ __('main.text_37') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">03</span>
                                        <span class="service-name">{{ __('main.text_38') }}</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">{{ __('main.text_39') }}</p>
                                        <p class="mt-2">{{ __('main.text_40') }}</p>
                                        <p class="mt-2">{{ __('main.text_41') }}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">04</span>
                                        <span class="service-name">{{ __('main.text_42') }}</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">UI / UX</p>
                                        <p class="mt-2">{{ __('main.text_43') }}</p>
                                        <p class="mt-2">{{ __('main.text_44') }}</p>
                                        <p class="mt-2">{{ __('main.text_45') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">05</span>
                                        <span class="service-name">{{ __('main.text_46') }}</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">{{ __('main.text_47') }}</p>
                                        <p class="mt-2">{{ __('main.text_48') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-item">
                                    <div class="service-title d-flex">
                                        <span class="service-number">06</span>
                                        <span class="service-name">{{ __('main.text_49') }}</span>
                                    </div>
                                    <div class="d-flex service-option">
                                        <p class="mt-2">{{ __('main.text_50') }}</p>
                                        <p class="mt-2">{{ __('main.text_51') }}</p>
                                        <p class="mt-2">{{ __('main.text_52') }}</p>
                                        <p class="mt-2">{{ __('main.text_53') }}</p>
                                        <p class="mt-2">{{ __('main.text_54') }}</p>
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
                <h1>{{ __('main.text_55') }}</h1>
                <div class="row work-items">
                    <div class="col-12 col-sm-6 col-md-6 work-item"  data-toggle="modal"
                    data-target=".modal-lale">
                        <img src="/website/assets/img/lale.png" alt="test">
                        <p class="hidden-text">{{ __('main.text_56') }}</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">{{ __('main.text_57') }}</span>
                            <div class="work-list">
                                <p>{{ __('main.text_58') }}</p>
                                <p>{{ __('main.text_59') }}</p>
                                <p>{{ __('main.text_60') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 work-item" data-toggle="modal"
                    data-target=".modal-tanovani">
                        <img src="/website/assets/img/tanovani.png" alt="test">
                        <p class="hidden-text">{{ __('main.text_61') }}</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">{{ __('main.text_62') }}</span>
                            <div class="work-list">
                                <p>{{ __('main.text_63') }}</p>
                                <p>{{ __('main.text_64') }}</p>
                                <p>{{ __('main.text_65') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 work-item" data-toggle="modal"
                    data-target=".modal-chitostan">
                        <img src="/website/assets/img/chitostan.png" alt="test">
                        <p class="hidden-text">{{ __('main.text_66') }}</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">{{ __('main.text_67') }}</span>
                            <div class="work-list">
                                <p>{{ __('main.text_68') }}</p>
                                <p>{{ __('main.text_69') }}</p>
                                <p>{{ __('main.text_70') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 work-item" data-toggle="modal"
                    data-target=".modal-askrioni">
                        <img src="/website/assets/img/askrioni.png" alt="test">
                        <p class="hidden-text">{{ __('main.text_61') }}</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">{{ __('main.text_71') }}</span>
                            <div class="work-list">
                                <p>{{ __('main.text_72') }}</p>
                                <p>{{ __('main.text_73') }}</p>
                                <p>{{ __('main.text_74') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 all-works-a work-item">
                        <a href="/works" class="all-works">
                            {{ __('main.text_75') }} >
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
                    <h2>{{ __('main.text_76') }}</h2>
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
            <div class="contact-span">{{ __('main.text_77') }}</div>
        </div>
    </a>
    <script>
        var swiper = new Swiper(".landingSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            speed: 2000,
            allowTouchMove: true,
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
            slidesPerView: 'auto',
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            speed: 5000,
            allowTouchMove: true,
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
                delay: 2500,
                disableOnInteraction: false
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            let header = document.querySelector(".header-logo");
            let lastScrollTop = 0;

            window.addEventListener("scroll", function() {
                let scrollTop = window.scrollY || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Scroll Down → Hide Logo
                    header.classList.add("hide-logo");
                    header.classList.remove("show-logo");
                } else {
                    // Scroll Up → Show Logo
                    header.classList.add("show-logo");
                    header.classList.remove("hide-logo");
                }

                lastScrollTop = scrollTop;
            });
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
