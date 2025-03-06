@extends('website.index')
@section('content')
    <div class="container-fluid main-container mt-5 service-lg">
        <div class="row mt-5 service-row">
            <div class="col-md-12 d-flex text-container">
                <span class="section-title service-page-title"> {{__('main.text_78')}}</span>
                <div class="service-swiper">
                    <div class="swiper-slide service_swiper_1">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">01</span>
                                <span class="service-name">{{__('main.text_79')}}</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service1">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>{{__('main.text_80')}}
                                               
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_81')}}</h3>
                                                <p> {{__('main.text_82')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_83')}}</h3>
                                                <p>{{__('main.text_84')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_85')}}</h3>
                                                <p>{{__('main.text_86')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_87')}}</h3>
                                                <p>{{__('main.text_88')}}</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>{{__('main.text_89')}}</h3>
                                                <p>{{__('main.text_90')}}</p>
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
                                <p class="mt-2">{{__('main.text_91')}}</p>
                                <p class="mt-2">{{__('main.text_92')}}</p>
                                <p class="mt-2">{{__('main.text_93')}}</p>
                                <p class="mt-2">{{__('main.text_94')}}</p>
                                <p class="mt-2">{{__('main.text_95')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_2">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">02</span>
                                <span class="service-name">{{__('main.text_96')}}</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service2">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p>{{__('main.text_97')}}
                                                
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_98')}}</h3>
                                                <p>{{__('main.text_99')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_200')}}</h3>
                                                <p>{{__('main.text_101')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_102')}}</h3>
                                                <p>{{__('main.text_103')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_104')}}</h3>
                                                <p> {{__('main.text_105')}}</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>{{__('main.text_106')}}</h3>
                                                <p>{{__('main.text_107')}}</p>
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
                                <p class="mt-2">{{__('main.text_108')}}</p>
                                <p class="mt-2">{{__('main.text_109')}}</p>
                                <p class="mt-2">{{__('main.text_110')}}</p>
                                <p class="mt-2">{{__('main.text_111')}}</p>
                                <p class="mt-2">{{__('main.text_112')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_3">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">03</span>
                                <span class="service-name">{{__('main.text_113')}}</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service3">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p> {{__('main.text_114')}}
                                                
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_115')}}</h3>
                                                <p>{{__('main.text_116')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_117')}}</h3>
                                                <p>{{__('main.text_118')}}</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>{{__('main.text_119')}}</h3>
                                                <p>{{__('main.text_120')}}</p>
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
                                <p class="mt-2">{{__('main.text_121')}}</p>
                                <p class="mt-2">{{__('main.text_122')}}</p>
                                <p class="mt-2">{{__('main.text_123')}}</p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_4">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">04</span>
                                <span class="service-name">{{__('main.text_124')}}</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service4">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p> {{__('main.text_125')}}
                                                
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>UI / UX</h3>
                                                <p>{{__('main.text_126')}} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_127')}}</h3>
                                                <p>{{__('main.text_128')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_129')}}</h3>
                                                <p>{{__('main.text_130')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_131')}}</h3>
                                                <p>{{__('main.text_132')}}</p>
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
                                <p class="mt-2">{{__('main.text_133')}}</p>
                                <p class="mt-2"> {{__('main.text_134')}}</p>
                                <p class="mt-2">{{__('main.text_135')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_5">
                        <div class="swiper-item">
                            <div class="service-title d-flex" id="service5">
                                <span class="service-number">05</span>
                                <span class="service-name">{{__('main.text_136')}}</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service5">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p> {{__('main.text_137')}}
                                                
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_138')}}</h3>
                                                <p> {{__('main.text_139')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_140')}}</h3>
                                                <p>{{__('main.text_141')}}</p>
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
                                <p class="mt-2">{{__('main.text_142')}}</p>
                                <p class="mt-2">{{__('main.text_143')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide service_swiper_6">
                        <div class="swiper-item">
                            <div class="service-title d-flex">
                                <span class="service-number">06</span>
                                <span class="service-name">{{__('main.text_144')}}</span>
                                <div class="collapse collapse-container service-collapse mt-2 " id="service6">
                                    <div class="d-flex">
                                        <div class="description">
                                            <p> {{__('main.text_145')}}
                                                
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_146')}}</h3>
                                                <p>{{__('main.text_147')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_148')}}</h3>
                                                <p>{{__('main.text_149')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_150')}}</h3>
                                                <p>{{__('main.text_151')}}
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_152')}}</h3>
                                                <p>{{__('main.text_153')}}</p>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>{{__('main.text_154')}}</h3>
                                                <p>{{__('main.text_155')}}
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
                                <p class="mt-2">{{__('main.text_156')}}</p>
                                <p class="mt-2"> {{__('main.text_157')}}</p>
                                <p class="mt-2"> {{__('main.text_158')}}</p>
                                <p class="mt-2">{{__('main.text_159')}}</p>
                                <p class="mt-2">{{__('main.text_160')}}</p>
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
                <span class="section-title service-page-title">{{__('main.text_161')}}</span>
                <div class="service-swiper">
                    <div class="swiper-slide service_swiper_1">
                        <div class="swiper-item">
                            <div class="service-title">
                                <div class="collapse collapse-container service-collapse mt-2 " id="service1">
                                    <div class="row">
                                        <div class="description">
                                            <p>
                                                {{__('main.text_162')}}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_163')}}</h3>
                                            <p>{{__('main.text_164')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_165')}}</h3>
                                            <p>{{__('main.text_166')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_167')}}</h3>
                                            <p>{{__('main.text_168')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_169')}}</h3>
                                            <p>{{__('main.text_170')}}</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>{{__('main.text_171')}}</h3>
                                            <p>{{__('main.text_172')}}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">
                                    <span class="service-number">01</span>
                                    <span class="service-name">{{__('main.text_173')}}</span>

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
                                                {{__('main.text_174')}}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_175')}}</h3>
                                            <p>{{__('main.text_176')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_177')}}</h3>
                                            <p>{{__('main.text_178')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3> {{__('main.text_179')}}</h3>
                                            <p>{{__('main.text_180')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_181')}}</h3>
                                            <p> {{__('main.text_182')}}</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>{{__('main.text_183')}}</h3>
                                            <p>{{__('main.text_184')}}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">
                                <span class="service-number">02</span>
                                <span class="service-name">{{__('main.text_185')}}</span>

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
                                                {{__('main.text_186')}}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_187')}}</h3>
                                            <p>{{__('main.text_188')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3> {{__('main.text_189')}}</h3>
                                            <p>{{__('main.text_190')}}</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>{{__('main.text_191')}}</h3>
                                            <p>{{__('main.text_192')}}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">

                                <span class="service-number">03</span>
                                <span class="service-name">{{__('main.text_193')}}</span>

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
                                                    {{__('main.text_194')}}
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>UI / UX</h3>
                                                <p>{{__('main.text_195')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_221')}}</h3>
                                                <p>{{__('main.text_196')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_197')}}</h3>
                                                <p>{{__('main.text_198')}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{__('main.text_199')}}</h3>
                                                <p>{{__('main.text_200')}}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">

                                <span class="service-number">04</span>
                                <span class="service-name">{{__('main.text_201')}}</span>

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
                                                {{__('main.text_202')}}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_203')}}</h3>
                                            <p>{{__('main.text_204')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_205')}}</h3>
                                            <p>{{__('main.text_206')}}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">
                                <span class="service-number">05</span>
                                <span class="service-name">{{__('main.text_207')}}</span>

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
                                                {{__('main.text_208')}}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_209')}}</h3>
                                            <p>{{__('main.text_210')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_212')}}</h3>
                                            <p> {{__('main.text_213')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_214')}}</h3>
                                            <p>{{__('main.text_215')}}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{__('main.text_216')}}</h3>
                                            <p> {{__('main.text_217')}}</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h3> {{__('main.text_218')}}</h3>
                                            <p>{{__('main.text_219')}}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex">

                                <span class="service-number">06</span>
                                <span class="service-name">INTERNATIONAL BUSINESS DEVELOPMENT {{__('main.text_220')}}</span>

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
