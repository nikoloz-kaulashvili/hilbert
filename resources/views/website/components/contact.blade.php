@extends('website.index')
@section('content')
    <div class="container main page-wrapper">
        <!-- Contact Section Start -->
        <div class="conact-section ptb-60">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-12" data-aos="fade-up" data-aos-duration="1600">
                        <div class="contact-form">
                            <form class="" action="{{ route('contact.send') }}" method="post">
                                @csrf
                                <div class="row contact-row">
                                    <div class="row col-md-4 cb">
                                        <div class="contact-about">
                                            <h5>Visit us</h5>
                                            <p>I.Abashidze 36, Tbilisi Georgia</p>
                                            <p>Office Hours:</p>
                                            <p>Monday-Friday</p>
                                            <p>10:00-18:00</p>
                                            <h6>(+995) 579 045 045</h6>
                                            <h6>info@hilbert.ge</h6>
                                        </div>
                                    </div>
                                    <div class="row col-md-8">
                                        <div class="col-md-6">
                                            <div class="section-title mb-3" data-aos="fade-up" data-aos-duration="1200">
                                                <h2>{{ __('main.text_16') }}</h2>
                                            </div>
                                            <div class="mb-20 col-12">
                                                <input name="name" type="text"
                                                    placeholder="David {{ __('main.text_17') }}" required>
                                            </div>
                                            <div class="mb-20 col-12">
                                                <input name="name" type="text"
                                                    placeholder="David {{ __('main.text_17') }}" required>
                                            </div>
                                            <div class="mb-20 col-12">
                                                <input name="email" type="email"
                                                    placeholder="Hilbert {{ __('main.text_18') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="contact-p">{{ __('main.text_20') }}</p>
                                            <div class="mb-20 col-12">
                                                <textarea class="contct-textarea" name="text" placeholder="text" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-5">
                                            <div class="contact-2-btn" type="submit">{{ __('main.text_21') }}</div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
