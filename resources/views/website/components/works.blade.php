@extends('website.index')
@section('content')
    <div class="container-fluid main-container work-page mt-5">
        <div class="row mt-5 works-row">
            <div class="col-md-12 d-flex text-container">
                <h6 class="">All Work</h6>
                <div class="row work-items">
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/lale.png" data-toggle="modal" data-target=".modal-lale"
                            alt="test">
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
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/tanovani.png" data-toggle="modal" data-target=".modal-tanovani"
                            alt="test">
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
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/chitostan.png" data-toggle="modal" data-target=".modal-chitostan"
                            alt="test">
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
                    <div class="col-12 col-sm-6 work-item">
                        <img src="/website/assets/img/askrioni.png" data-toggle="modal" data-target=".modal-askrioni"
                            alt="test">
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
                </div>
            </div>
        </div>
    </div>
    @include('website.layouts.modals')
@stop
