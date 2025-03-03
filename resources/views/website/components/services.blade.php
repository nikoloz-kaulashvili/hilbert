@extends('website.index')
@section('content')
    <div class="container-fluid main-container mt-5 service-lg">
        <div class="row mt-5 service-row">
            <div class="col-md-12 d-flex text-container">
                <span class="section-title service-page-title">Our Service</span>
                <div class="service-swiper">
                    <div class="swiper-slide service_swiper_1">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">01</span>
                                <span class="service-name">BRAND STRATEGY</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service1">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>
                                                We define a brand's identity, positioning,
                                                and messaging to connect with its audience and stand out in the market.
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Market Research</h3>
                                                <p>gathering and analyzing data about the
                                                    target audience, competitors, and market
                                                    trends to inform strategic decisions.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Brand Positioning</h3>
                                                <p>Defining a brand’s unique place in the
                                                    market by identifying its value proposition
                                                    and differentiating it from competitors.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Naming & Taglines</h3>
                                                <p>Creating compelling and memorable names
                                                    for the brand along with impactful taglines
                                                    that communicate the brand's core message</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Brand Storytelling</h3>
                                                <p>Crafting a narrative that conveys the
                                                    brand’s mission, values, and journey,
                                                    helping customers connect emotionally
                                                    with the brand.</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>Brand Messaging & Communication Strategy</h3>
                                                <p>Developing consistent, clear messages across all platforms to ensure the
                                                    brand
                                                    communicates effectively with its audience.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="collapse-span service1-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service1"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-option service1-desc">
                                <p class="mt-2">Market Research</p>
                                <p class="mt-2">Brand Positioning</p>
                                <p class="mt-2">Naming & Taglines</p>
                                <p class="mt-2">Brand Storytelling</p>
                                <p class="mt-2">Brand Messaging & Communication Strategy</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_2">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">02</span>
                                <span class="service-name">VISUAL BRAND IDENTITY</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service2">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>
                                                We design the key visual elements of a
                                                brand, including logos, colors, and
                                                typography, for a unique and consistent
                                                brand presence
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Logo Design</h3>
                                                <p>Creating a unique and memorable logo
                                                    that represents the brand’s identity and
                                                    values.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Color Palette</h3>
                                                <p>Developing a set of colors that align with
                                                    the brand’s personality and evoke the
                                                    desired emotional response</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Typography</h3>
                                                <p>Choosing fonts and typography styles that
                                                    complement the brand’s image and enhance
                                                    readability</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Brand Guidelines</h3>
                                                <p>Creating a document that outlines how
                                                    to use visual elements consistently
                                                    across all platforms and materials.</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>Packaging & Marketing Material Design</h3>
                                                <p>Creating product packaging and marketing material designs that reflect
                                                    the brand’s
                                                    identity while being functional, attractive, and on-brand</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="collapse-span service2-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service2"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-option service2-desc">
                                <p class="mt-2">Logo Design</p>
                                <p class="mt-2">Typography</p>
                                <p class="mt-2">Packaging & Marketing Material Design</p>
                                <p class="mt-2">Color Palette</p>
                                <p class="mt-2">Brand Guidelines</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_3">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">03</span>
                                <span class="service-name">MARKETING & PROMOTION</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service3">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>
                                                We create and execute powerful
                                                marketing strategies to maximize
                                                reach and engagement
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Photo & Video
                                                    Production</h3>
                                                <p>High-quality promotional content creation</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Event Organization</h3>
                                                <p>Brand activations, corporate events, and
                                                    networking initiatives</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>Social Media Management</h3>
                                                <p>Create and manage content across social media platforms, engaging with
                                                    the audience,
                                                    and analyzing performance to build a strong online presence and drive
                                                    brand awareness</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="collapse-span service3-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service3"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-option service3-desc">
                                <p class="mt-2">Social Media Management</p>
                                <p class="mt-2">Photo & Video Production</p>
                                <p class="mt-2">Event Organization</p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_4">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">04</span>
                                <span class="service-name">IT SOLUTIONS</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service4">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>
                                                We develop digital solutions to optimize
                                                operations and enhance brand visibility
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>UI / UX</h3>
                                                <p>Creating intuitive and visually appealing
                                                    user interfaces and experiences to
                                                    enhance user satisfaction and interaction
                                                    with digital products.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Web Development</h3>
                                                <p>Building and maintaining websites and
                                                    web applications, ensuring they are
                                                    functional, responsive, and optimized for a
                                                    seamless user experience</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Software & App
                                                    Development</h3>
                                                <p>Designing and developing custom software
                                                    solutions and mobile applications tailored to
                                                    meet specific business needs and enhance
                                                    functionality.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Domain & Server
                                                    Management</h3>
                                                <p>Managing and maintaining domain names
                                                    and server infrastructure, ensuring
                                                    secure, reliable, and high-performance
                                                    hosting for websites and applications.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="collapse-span service4-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service4"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-option service4-desc">
                                <p class="mt-2">UI / UX</p>
                                <p class="mt-2">Web Development</p>
                                <p class="mt-2">Software & App Development</p>
                                <p class="mt-2">Domain & Server Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_5">
                        <div class="swiper-item">
                            <div class="service-title d-flex" id="service5">
                                <span class="service-number">05</span>
                                <span class="service-name">PACKAGING & LABELING</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service5">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>
                                                We provide innovative packaging and
                                                labeling solutions to enhance product
                                                appeal
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Custom Printing &
                                                    Packaging</h3>
                                                <p>High-quality labels, bottles, and branded
                                                    materials.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>QR Code Integration</h3>
                                                <p>Adding digital functionality to product
                                                    packaging for enhanced customer
                                                    engagement</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="collapse-span service5-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service5"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-option service5-desc">
                                <p class="mt-2">Custom Printing & Packaging</p>
                                <p class="mt-2">QR Code Integration </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_6">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">06</span>
                                <span class="service-name">INTERNATIONAL BUSINESS DEVELOPMENT</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service6">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>
                                                We help businesses expand into global
                                                markets with strategic consulting and
                                                execution
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>International Exhibitions
                                                    & Trade Shows</h3>
                                                <p>Booth design, setup, and brand
                                                    representation</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>B2B Networking &
                                                    Meetings</h3>
                                                <p>Connecting businesses with key industry
                                                    partners.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Product Sampling &
                                                    Competitions</h3>
                                                <p>Organizing tastings and competitive entries.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Importer & Distributor
                                                    Engagement</h3>
                                                <p>Facilitating introductions to international
                                                    buyers.</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>Investment Attraction</h3>
                                                <p>Connecting businesses with potential investors
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span class="collapse-span service6-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service6"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                            </div>
                            <div class="service-option service6-desc">
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

    <div class="container-fluid main-container mt-5 service-sm">
        <div class="row mt-5 service-row">
            <div class="col-md-12 d-flex text-container">
                <span class="section-title service-page-title">Our Service mobile</span>
                <div class="service-swiper">
                    <div class="swiper-slide service_swiper_1">
                        <div class="swiper-item">
                            <div class="service-title">
                                <div class="collapse collapse-container service-collapse mt-2 " id="service1">
                                    <div class="row">
                                        <div class="description">
                                            <p>
                                                We define a brand's identity, positioning,
                                                and messaging to connect with its audience and stand out in the market.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Market Research</h3>
                                            <p>gathering and analyzing data about the
                                                target audience, competitors, and market
                                                trends to inform strategic decisions.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Brand Positioning</h3>
                                            <p>Defining a brand’s unique place in the
                                                market by identifying its value proposition
                                                and differentiating it from competitors.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Naming & Taglines</h3>
                                            <p>Creating compelling and memorable names
                                                for the brand along with impactful taglines
                                                that communicate the brand's core message</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Brand Storytelling</h3>
                                            <p>Crafting a narrative that conveys the
                                                brand’s mission, values, and journey,
                                                helping customers connect emotionally
                                                with the brand.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Brand Messaging & Communication Strategy</h3>
                                            <p>Developing consistent, clear messages across all platforms to ensure the
                                                brand
                                                communicates effectively with its audience.</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">
                                    <span class="service-number">01</span>
                                    <span class="service-name">BRAND STRATEGY</span>

                                    <span class="collapse-span service1-arrow" data-bs-toggle="collapse"
                                        data-bs-target="#service1"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                            height="28" fill="currentColor" class="bi bi-caret-up"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                        </svg>
                                    </span>
                                </div>

                            </div>
                            {{-- <div class="service-option service1-desc" >
                                <p class="mt-2">Market Research</p>
                                <p class="mt-2">Brand Positioning</p>
                                <p class="mt-2">Naming & Taglines</p>
                                <p class="mt-2">Brand Storytelling</p>
                                <p class="mt-2">Brand Messaging & Communication Strategy</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_2">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <div class="collapse collapse-container service-collapse mt-2 " id="service2">

                                    <div class="row">
                                        <div class="description">
                                            <p>
                                                We design the key visual elements of a
                                                brand, including logos, colors, and
                                                typography, for a unique and consistent
                                                brand presence
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Logo Design</h3>
                                            <p>Creating a unique and memorable logo
                                                that represents the brand’s identity and
                                                values.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Color Palette</h3>
                                            <p>Developing a set of colors that align with
                                                the brand’s personality and evoke the
                                                desired emotional response</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Typography</h3>
                                            <p>Choosing fonts and typography styles that
                                                complement the brand’s image and enhance
                                                readability</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Brand Guidelines</h3>
                                            <p>Creating a document that outlines how
                                                to use visual elements consistently
                                                across all platforms and materials.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Packaging & Marketing Material Design</h3>
                                            <p>Creating product packaging and marketing material designs that reflect
                                                the brand’s
                                                identity while being functional, attractive, and on-brand</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">
                                <span class="service-number">02</span>
                                <span class="service-name">VISUAL BRAND IDENTITY</span>

                                <span class="collapse-span service2-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service2"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                            </div>
                            </div>
                            {{-- <div class="service-option service2-desc" >
                                <p class="mt-2">Logo Design</p>
                                <p class="mt-2">Typography</p>
                                <p class="mt-2">Packaging & Marketing Material Design</p>
                                <p class="mt-2">Color Palette</p>
                                <p class="mt-2">Brand Guidelines</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_3">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <div class="collapse collapse-container service-collapse mt-2 " id="service3">

                                    <div class="row">
                                        <div class="description">
                                            <p>
                                                We create and execute powerful
                                                marketing strategies to maximize
                                                reach and engagement
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Photo & Video
                                                Production</h3>
                                            <p>High-quality promotional content creation</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Event Organization</h3>
                                            <p>Brand activations, corporate events, and
                                                networking initiatives</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Social Media Management</h3>
                                            <p>Create and manage content across social media platforms, engaging with
                                                the audience,
                                                and analyzing performance to build a strong online presence and drive
                                                brand awareness</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">

                                <span class="service-number">03</span>
                                <span class="service-name">MARKETING & PROMOTION</span>

                                <span class="collapse-span service3-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service3"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                                </div>
                            </div>
                            {{-- <div class="service-option service3-desc">
                                <p class="mt-2">Social Media Management</p>
                                <p class="mt-2">Photo & Video Production</p>
                                <p class="mt-2">Event Organization</p>
                            </div> --}}

                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_4">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <div class="collapse collapse-container service-collapse mt-2 " id="service4">
                                    <div class="d-flex">
                                        <div class="row">
                                            <div class="description">
                                                <p>
                                                    We develop digital solutions to optimize
                                                    operations and enhance brand visibility
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>UI / UX</h3>
                                                <p>Creating intuitive and visually appealing
                                                    user interfaces and experiences to
                                                    enhance user satisfaction and interaction
                                                    with digital products.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Web Development</h3>
                                                <p>Building and maintaining websites and
                                                    web applications, ensuring they are
                                                    functional, responsive, and optimized for a
                                                    seamless user experience</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Software & App
                                                    Development</h3>
                                                <p>Designing and developing custom software
                                                    solutions and mobile applications tailored to
                                                    meet specific business needs and enhance
                                                    functionality.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Domain & Server
                                                    Management</h3>
                                                <p>Managing and maintaining domain names
                                                    and server infrastructure, ensuring
                                                    secure, reliable, and high-performance
                                                    hosting for websites and applications.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">

                                <span class="service-number">04</span>
                                <span class="service-name">IT SOLUTIONS</span>

                                <span class="collapse-span service4-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service4"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                                </div>
                            </div>
                            {{-- <div class="service-option service4-desc">
                                <p class="mt-2">UI / UX</p>
                                <p class="mt-2">Web Development</p>
                                <p class="mt-2">Software & App Development</p>
                                <p class="mt-2">Domain & Server Management</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_5">
                        <div class="swiper-item">
                            <div class="service-title d-flex" id="service5">
                                <div class="collapse collapse-container service-collapse mt-2 " id="service5">

                                    <div class="row">
                                        <div class="description">
                                            <p>
                                                We provide innovative packaging and
                                                labeling solutions to enhance product
                                                appeal
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Custom Printing &
                                                Packaging</h3>
                                            <p>High-quality labels, bottles, and branded
                                                materials.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>QR Code Integration</h3>
                                            <p>Adding digital functionality to product
                                                packaging for enhanced customer
                                                engagement</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">
                                <span class="service-number">05</span>
                                <span class="service-name">PACKAGING & LABELING</span>

                                <span class="collapse-span service5-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service5"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                                </div>
                            </div>
                            {{-- <div class="service-option service5-desc">
                                <p class="mt-2">Custom Printing & Packaging</p>
                                <p class="mt-2">QR Code Integration </p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_6">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <div class="collapse collapse-container service-collapse mt-2 " id="service6">
                                    <div class="row">
                                        <div class="description">
                                            <p>
                                                We help businesses expand into global
                                                markets with strategic consulting and
                                                execution
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>International Exhibitions
                                                & Trade Shows</h3>
                                            <p>Booth design, setup, and brand
                                                representation</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>B2B Networking &
                                                Meetings</h3>
                                            <p>Connecting businesses with key industry
                                                partners.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Product Sampling &
                                                Competitions</h3>
                                            <p>Organizing tastings and competitive entries.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Importer & Distributor
                                                Engagement</h3>
                                            <p>Facilitating introductions to international
                                                buyers.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Investment Attraction</h3>
                                            <p>Connecting businesses with potential investors
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">

                                <span class="service-number">06</span>
                                <span class="service-name">INTERNATIONAL BUSINESS DEVELOPMENT</span>

                                <span class="collapse-span service6-arrow" data-bs-toggle="collapse"
                                    data-bs-target="#service6"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                                        <path
                                            d="M3.204 11h9.592L8 5.519zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659" />
                                    </svg>
                                </span>
                                </div>
                            </div>
                            {{-- <div class="service-option service6-desc">
                                <p class="mt-2">International Exhibitions & Trade Shows</p>
                                <p class="mt-2">B2B Networking & Meetings</p>
                                <p class="mt-2">Product Sampling & Competitions </p>
                                <p class="mt-2">Investment Attraction </p>
                                <p class="mt-2">Importer & Distributor Engagement </p>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".collapse-span").click(function() {
                $('.collapse-span').css("margin-left", "auto");
                $(".service-option").show();
                $(".collapse").collapse('hide');
            });

            function toggleSwiper(buttonId, swiperId, descId) {
                let swiper = $(swiperId);
                let desc = $(descId);
                let isActive = swiper.hasClass("is-active");
                if (isActive) {
                    $(".swiper-slide").removeClass("is-active").css("opacity", "1");
                    desc.toggle();
                    $(buttonId).css("margin-left", "auto");
                } else {
                    $(".swiper-slide").removeClass("is-active").css("opacity", "0.4");
                    swiper.addClass("is-active").css("opacity", "1");
                    desc.toggle();

                }
            }

            // თითოეულ ღილაკზე ვამატებთ event-ს
            $(".service1-arrow").click(function() {
                $(this).css("margin-left", "0px");
                toggleSwiper(".service1-arrow", ".service_swiper_1", ".service21-desc");
            });

            $(".service2-arrow").click(function() {
                $(this).css("margin-left", "0px");
                toggleSwiper(".service2-arrow", ".service_swiper_2", ".service1-desc");
            });

            $(".service3-arrow").click(function() {
                $(this).css("margin-left", "0px");
                toggleSwiper(".service3-arrow", ".service_swiper_3", ".service2-desc");
            });

            $(".service4-arrow").click(function() {
                $(this).css("margin-left", "0px");
                toggleSwiper(".service4-arrow", ".service_swiper_4", ".service3-desc");
            });

            $(".service5-arrow").click(function() {
                $(this).css("margin-left", "0px");
                toggleSwiper(".service5-arrow", ".service_swiper_5", ".service4-desc");
            });

            $(".service6-arrow").click(function() {
                $(this).css("margin-left", "0px");
                toggleSwiper(".service6-arrow", ".service_swiper_6", ".service5-desc");
            });

        });
    </script>



@stop
