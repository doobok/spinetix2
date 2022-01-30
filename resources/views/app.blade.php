<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="nightwind">
<head>
    @include('layouts.partials.head')
    @yield('head')
</head>
<body>
<div id="app" class="bg-gray-100">

    @include('layouts.partials.navbar')

    <div class="bg-no-repeat bg-contain bg-right" style="background-image: url('/assets/about-shape-1.svg');">
        @yield('content')
    </div>

    @include('layouts.partials.footer')

</div>
@include('layouts.partials.js')
</body>
</html>
