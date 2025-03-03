@extends('website.index')
@section('content')
<div class="container main page-wrapper">
    <!-- Contact Section Start -->
    <div class="conact-section ptb-60">
        <div class="container">
            <div class="section-title mb-5" data-aos="fade-up" data-aos-duration="1200">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12" data-aos="fade-up"
                    data-aos-duration="1600">
                    <div class="contact-form">
                        <form class="" action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="mb-20 col-9">
                                    <input name="name" type="text" placeholder="David" required>
                                </div>
                                <div class="mb-20 col-9">
                                    <input name="email" type="email" placeholder="Hilbert" required>
                                </div>
                                <div class="mb-20 col-9">
                                    <input name="subject" type="text" placeholder="Email" required>
                                </div>
                                <p>Let us know how we can help</p>
                                <div class="mb-20 col-12">
                                    <textarea name="text" placeholder="text" required></textarea>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="contact-2-btn" type="submit">Send</div>
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