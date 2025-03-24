<!DOCTYPE html>
<html lang="ge">
    @include('website.layouts.head')
        <body>
            @include('website.layouts.loader')
            @include('website.layouts.header')
            @yield('content')
            @include('website.layouts.footer')
            @include('website.layouts.modals')
            @include('website.layouts.script')
        </body>
    </body>
</html>
