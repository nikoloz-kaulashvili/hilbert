<div class="loader">
    <div class="loader-item">
        <div class="d-flex loader-container">
            <img class="the" src="/website/assets/img/loader-the.svg" alt="">
            <img class="expanding" src="/website/assets/img/loader-text.svg" alt="">
            <img class="loader-logo" src="/website/assets/img/loader-logo.svg" alt="">
        </div>
        <div class="loader-line-main">
            <div class="loader-line"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".loader-line").animate({ width: "100%" }, 3000, function() {
            $(".loader").fadeOut(1000, function() {
                $(".content").fadeIn(500);
            });
        });
    });
</script>