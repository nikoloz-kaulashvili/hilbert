<header>
    <div class="d-flex">
        <a href="{{ route('website.main') }}"> 
            <img class="logo" src="/website/assets/img/logo.svg" alt="logo">
        </a>
    </div>

    <div class="d-flex sidebar-icon burger">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
        <span>MENU</span>
    </div>
</header>

<div class="nav" style="display: none">
    <div class="cover"></div>
    <div class="navigation">
        <div class="navbar-header d-flex">
            <h6 class="menu">MENU</h6>
            <h6 class="close">CLOSE</h6>
        </div>
        <ul class="mt-5">
            <li><a href="{{ route('website.main') }}">Home</a></li>
            <li><a href="{{ route('website.services') }}">Services</a></li>
            <li><a href="{{ route('website.works') }}">Works</a></li>
            <li><a href="{{ route('website.contact') }}">Contact</a></li>
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
    });
</script>