@extends('website.index')
@section('content')
<div class="container main page-wrapper">
    <!-- Contact Section Start -->
    <div class="conact-section ptb-60">
        <div class="container">
            <div class="section-title mb-5" data-aos="fade-up" data-aos-duration="1200">
                <h2>{{__('main.text_16')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12" data-aos="fade-up"
                    data-aos-duration="1600">
                    <div class="contact-form">
                        <form class="" action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="mb-20 col-9">
                                    <input name="name" type="text" placeholder="David {{__('main.text_17')}}" required>
                                </div>
                                <div class="mb-20 col-9">
                                    <input name="email" type="email" placeholder="Hilbert {{__('main.text_18')}}" required>
                                </div>
                                <div class="mb-20 col-9">
                                    <input name="subject" type="text" placeholder="Email {{__('main.text_19')}}" required>
                                </div>
                                <p>{{__('main.text_20')}}</p>
                                <div class="mb-20 col-12">
                                    <textarea name="text" placeholder="text" required></textarea>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="contact-2-btn" type="submit">{{__('main.text_21')}}</div>
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