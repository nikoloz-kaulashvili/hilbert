<header>
    <div class="d-flex header-logo">
        <a class="d-flex " href="{{ route('website.main') }}"> 
            <img class="logo" src="/website/assets/img/logo.svg" alt="logo">
            <h1 class="logo-sec">H</h1>
            <h1 class="logo-sec">I</h1>
            <h1 class="logo-sec">L</h1>
            <h1 class="logo-sec">B</h1>
            <h1 class="logo-sec">E</h1>
            <h1 class="logo-sec">R</h1>
            <h1 class="logo-sec">T</h1>
            {{-- <img class="logo-sec" src="/website/assets/img/h.svg" alt="">
            <img class="logo-sec" src="/website/assets/img/i.svg" alt="">
            <img class="logo-sec" src="/website/assets/img/l.svg" alt="">
            <img class="logo-sec" src="/website/assets/img/b.svg" alt="">
            <img class="logo-sec" src="/website/assets/img/e.svg" alt="">
            <img class="logo-sec" src="/website/assets/img/r.svg" alt="">
            <img class="logo-sec" src="/website/assets/img/t.svg" alt=""> --}}
        </a>
    </div>

    <div class="d-flex sidebar-icon burger">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
        <span>{{__('main.text_1')}}</span>
    </div>
</header>

<div class="nav" style="display: none">
    <div class="cover"></div>
    <div class="navigation">
        <div class="navbar-header d-flex">
            <h6 class="menu">{{__('main.text_1')}}</h6>
            <h6 class="close">{{__('main.text_2')}}</h6>
        </div>
        <ul class="mt-5">
            <li><a href="{{ route('website.main') }}">{{__('main.text_3')}}</a></li>
            <li><a href="{{ route('website.services') }}">{{__('main.text_4')}}</a></li>
            <li><a href="{{ route('website.works') }}">{{__('main.text_5')}}</a></li>
            <li><a href="{{ route('website.contact') }}">{{__('main.text_6')}}</a></li>
        </ul>
        <div class="social-icons d-flex">
            <a href=""><img src="/website/assets/img/facebook.png" alt="1"></a>
            <a href=""><img src="/website/assets/img/instagram.png" alt="1"></a>
            <a href=""><img src="/website/assets/img/behance.png" alt="1"></a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".burger").click(function() {
            $(".nav").show();
        });

        $(".close").click(function() {
            $(".nav").hide();
        });
        $(".cover").click(function() {
            $(".nav").hide();
        });
    });
</script>