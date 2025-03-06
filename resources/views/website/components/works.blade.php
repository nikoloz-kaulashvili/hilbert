@extends('website.index')
@section('content')
    <div class="container-fluid main-container work-page mt-5">
        <div class="row mt-5 works-row">
            <div class="col-md-12 d-flex text-container">
                <h6 class="">{{__('main.text_222')}}</h6>
                <div class="row work-items">
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/lale.png" data-toggle="modal" data-target=".modal-lale"
                            alt="test">
                            <p class="hidden-text">{{__('main.text_223')}}</p>

                        <div class="d-flex mt-3">
                            <span class="work-title">{{__('main.text_224')}} </span>
                            <div class="work-list">
                                <p>{{__('main.text_225')}}</p>
                                <p>{{__('main.text_226')}}</p>
                                <p>{{__('main.text_227')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/tanovani.png" data-toggle="modal" data-target=".modal-tanovani"
                            alt="test">
                            <p class="hidden-text">{{__('main.text_228')}}</p>

                        <div class="d-flex mt-3">
                            <span class="work-title">{{__('main.text_229')}}</span>
                            <div class="work-list">
                                <p>{{__('main.text_230')}}</p>
                                <p>{{__('main.text_231')}}</p>
                                <p> {{__('main.text_232')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/chitostan.png" data-toggle="modal" data-target=".modal-chitostan"
                            alt="test">
                        <p class="hidden-text"> {{__('main.text_233')}}</p>
                        <div class="d-flex mt-3">
                            <span class="work-title">{{__('main.text_234')}}</span>
                            <div class="work-list">
                                <p>{{__('main.text_235')}}</p>
                                <p>{{__('main.text_236')}}</p>
                                <p>{{__('main.text_237')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/askrioni.png" data-toggle="modal" data-target=".modal-askrioni"
                            alt="test">
                        <p class="hidden-text">{{__('main.text_238')}}</p>
                        <div class="d-flex mt-3">
                            <span class="work-title"> {{__('main.text_239')}}</span>
                            <div class="work-list">
                                <p>{{__('main.text_240')}}</p>
                                <p>{{__('main.text_241')}}</p>
                                <p>{{__('main.text_242')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('website.layouts.modals')
@stop

