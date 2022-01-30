<!doctype html>
<html class="no-js" lang="uk">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>SpinetiX - повертається в Україну</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ mix('css/app.css')}}" rel="stylesheet">

</head>

<body>
<div id="app">

<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<div class="hidden preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="header-area">
    <div class="navbar-area">
        <div class="container relative">
            <div class="row">
                <div class="w-full">
                    <nav class="flex items-center justify-between navbar navbar-expand-lg">
                        <a href="/" class="text-2xl md:text-3xl  text-white font-bold mr-4 navbar-brand flex flex-nowrap">
                            <svg viewBox="0 0 166 178.225" class="h-8 md:h-10 mr-2" xmlns="http://www.w3.org/2000/svg" version="1.0">
                                <path d="M30.8 1.4c-7 2.5-8.9 4.3-8.4 7.9.3 1.8.8 5.9 1.2 9.2 1.2 12.1 8 29.1 15.8 39.9 4.6 6.5 11.9 13.9 18.2 18.7 16.8 12.7 50.5 21.1 90.7 22.6l17.7.6V20.4l-2.6-5.2c-1.4-2.9-4.4-6.7-6.6-8.6C149.1-.1 149.6 0 89.1 0 46.2.1 33.7.4 30.8 1.4zM0 84.5v44.6l3.1-1.8c8.1-4.8 17.5-14.3 22.4-22.7 3.6-6.2 5.8-15.9 5-22.1-1.3-10.8-10-24.3-23-35.9L0 39.8v44.7zm90.5 31.1c-28.5 2.1-54.8 10.5-79.7 25.3L0 147.3v5.3c0 10.5 8.1 20.6 19.2 23.9 7.7 2.3 119.9 2.3 127.6 0 7.1-2.1 13.1-7 16.4-13.4 2.8-5.4 2.8-5.5 2.6-22.5l-.3-17.1-12.5-2.2c-24.9-4.3-49.9-6.6-62.5-5.7z" fill="currentColor"/>
                            </svg>
                            SpinetiX
                        </a>
                        <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-100 mt-full lg:static lg:bg-transparent lg:shadow-none" id="navbarOne">
                            <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="/">Головна</a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a class="page-scroll" href="#features">Про проект</a>--}}
{{--                                </li>--}}
                                <li class="nav-item">
                                    <a class="page-scroll" href="#" v-scroll-to="'#in-dev'">Про нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#" v-scroll-to="'#in-dev'">Контакти</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->

{{--                        <div class="absolute right-0 hidden mt-2 mr-24 navbar-btn sm:inline-block lg:mt-0 lg:static lg:mr-0">--}}
{{--                            <a class="main-btn gradient-btn" data-scroll-nav="0" href="#" rel="nofollow">👇</a>--}}
{{--                        </div>--}}
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->

    @include('layouts.animated.header')
</header>

<section id="features" class="services-area pt-120">
    <div class="container">
        <div class="justify-center row">
            <div class="w-full lg:w-2/3">
                <div class="pb-10 text-center section-title">
                    <div class="m-auto line"></div>
                    <h3 class="title"><span>Системи генерації медіа контенту,</span> для професіоналів</h3>
                </div> <!-- section title -->
            </div>
        </div>
    </div>
</section>

{{--<div class="pt-24 brand-area">--}}
{{--    <div class="container mx-auto px-4">--}}
{{--        <div class="row">--}}
{{--            <div class="w-full">--}}
{{--                <div class="items-center justify-center row lg:justify-between">--}}
{{--                    <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">--}}
{{--                        <img src="/assets/intel.png" alt="brand">--}}
{{--                    </div> <!-- single logo -->--}}
{{--                    <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">--}}
{{--                        <img src="/assets/creston.png" alt="brand">--}}
{{--                    </div> <!-- single logo -->--}}
{{--                    <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">--}}
{{--                        <img src="/assets/axis.png" alt="brand">--}}
{{--                    </div> <!-- single logo -->--}}
{{--                </div> <!-- brand logo -->--}}
{{--            </div>--}}
{{--        </div>   <!-- row -->--}}
{{--    </div> <!-- container -->--}}
{{--</div>--}}


<section id="in-dev" class="relative pt-20 about-area">
    <div class="container">
        <div class="row">
            <div class="w-full lg:w-1/2">
                <div class="mx-4 mt-12 about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="mb-4 section-title">
                        <div class="line"></div>
                        <h3 class="title">Сайт в розробці, <span>скоро на цьому місці з'явиться повноцінний сайт</span></h3>
                    </div> <!-- section title -->
                    <p class="text-xl mb-8">А поки що, наберіться терпіння та очікуйте 😉 </p>
                </div> <!-- about content -->
            </div>
            <div class="w-full lg:w-1/2">
                <div class="mx-4 mt-12 text-center about-image wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="/assets/in-work.svg">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="about-shape-1">
        <img src="/assets/about-shape-1.svg" alt="shape">
    </div>
</section>

    <footer id="footer" class="relative z-10 footer-area pt-120">
        <div class="footer-bg" style="background-image: url(/assets/footer-bg.svg);"></div>
        <div class="container">
            <div class="px-6 pt-10 pb-20 mb-12 bg-gray-100 rounded-lg shadow-xl md:px-12 subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="w-full lg:w-1/2">
                        <div class="lg:mt-12 subscribe-content">
                            <h2 class="text-2xl font-bold sm:text-4xl subscribe-title">
                                SpinetiX - повертається в Україну
                                <span class="block font-normal">чекати залишилось не довго</span>
                            </h2>
                        </div>
                    </div>
    {{--                <div class="w-full lg:w-1/2">--}}
{{--                    <div class="mt-12 subscribe-form">--}}
{{--                        <form action="#" class="relative focus:outline-none">--}}
{{--                            <input type="email" placeholder="Enter eamil" class="w-full py-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">--}}
{{--                            <button class="main-btn gradient-btn">Subscribe</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div> <!-- row -->
        </div> <!-- subscribe area -->
        <div class="footer-widget pb-120">
            <div class="row">
                <div class="w-4/5 md:w-3/5 lg:w-2/6">
                    <div class="mt-12 footer-about wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a href="/" class="text-2xl md:text-3xl text-white font-bold mr-4 mb-6 navbar-brand flex flex-nowrap">
                            <svg viewBox="0 0 166 178.225" class="h-8 md:h-10 mr-2" xmlns="http://www.w3.org/2000/svg" version="1.0">
                                <path d="M30.8 1.4c-7 2.5-8.9 4.3-8.4 7.9.3 1.8.8 5.9 1.2 9.2 1.2 12.1 8 29.1 15.8 39.9 4.6 6.5 11.9 13.9 18.2 18.7 16.8 12.7 50.5 21.1 90.7 22.6l17.7.6V20.4l-2.6-5.2c-1.4-2.9-4.4-6.7-6.6-8.6C149.1-.1 149.6 0 89.1 0 46.2.1 33.7.4 30.8 1.4zM0 84.5v44.6l3.1-1.8c8.1-4.8 17.5-14.3 22.4-22.7 3.6-6.2 5.8-15.9 5-22.1-1.3-10.8-10-24.3-23-35.9L0 39.8v44.7zm90.5 31.1c-28.5 2.1-54.8 10.5-79.7 25.3L0 147.3v5.3c0 10.5 8.1 20.6 19.2 23.9 7.7 2.3 119.9 2.3 127.6 0 7.1-2.1 13.1-7 16.4-13.4 2.8-5.4 2.8-5.5 2.6-22.5l-.3-17.1-12.5-2.2c-24.9-4.3-49.9-6.6-62.5-5.7z" fill="currentColor"/>
                            </svg>
                            SpinetiX
                        </a>
                        <p class="pb-10 pr-10 leading-snug text-white">
                            Медіаплеєр SpinetiX – це повноцінний генератор контенту, апаратно-програмний комплекс, розроблений швейцарськими фахівцями. Він збирає картинку безпосередньо в момент відтворення.
                        </p>
                    </div> <!-- footer about -->
                </div>

            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="py-8 border-t border-gray-200 footer-copyright">
            <p class="text-white text-sm text-center sm:text-left">© {{date("Y")}} Copyright —
                {{config('app.name')}}
            </p>
        </div> <!-- footer copyright -->
    </div> <!-- container -->
    <div id="particles-2" class="particles"></div>
</footer>

{{--<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>--}}

</div>

<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>
