<header id="header" class="header-area bg-primary">
    <div class="navbar-area">
        <div class="container relative">
            <div class="row">
                <div class="w-full">
                    <nav class="toggleColour text-white flex items-center justify-between navbar navbar-expand-lg">
                        <a href="{{route('main-page')}}"
                           class="text-2xl md:text-3xl  text-white font-bold mr-4 navbar-brand flex flex-nowrap">
                            <svg viewBox="0 0 166 178.225" class="h-8 md:h-10 mr-2" xmlns="http://www.w3.org/2000/svg"
                                 version="1.0">
                                <path
                                    d="M30.8 1.4c-7 2.5-8.9 4.3-8.4 7.9.3 1.8.8 5.9 1.2 9.2 1.2 12.1 8 29.1 15.8 39.9 4.6 6.5 11.9 13.9 18.2 18.7 16.8 12.7 50.5 21.1 90.7 22.6l17.7.6V20.4l-2.6-5.2c-1.4-2.9-4.4-6.7-6.6-8.6C149.1-.1 149.6 0 89.1 0 46.2.1 33.7.4 30.8 1.4zM0 84.5v44.6l3.1-1.8c8.1-4.8 17.5-14.3 22.4-22.7 3.6-6.2 5.8-15.9 5-22.1-1.3-10.8-10-24.3-23-35.9L0 39.8v44.7zm90.5 31.1c-28.5 2.1-54.8 10.5-79.7 25.3L0 147.3v5.3c0 10.5 8.1 20.6 19.2 23.9 7.7 2.3 119.9 2.3 127.6 0 7.1-2.1 13.1-7 16.4-13.4 2.8-5.4 2.8-5.5 2.6-22.5l-.3-17.1-12.5-2.2c-24.9-4.3-49.9-6.6-62.5-5.7z"
                                    fill="currentColor"/>
                            </svg>
                            SpinetiX
                        </a>

                        <div
                            class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 shadow lg:w-auto collapse navbar-collapse lg:block top-100 mt-full lg:static lg:bg-transparent lg:shadow-none">

                            @include('layouts.partials.mainmenu')

                        </div>

                        <div class="flex flex-nowrap gap-x-2">
                            <nav-bar class="hidden lg:block" lang="{{app()->getLocale()}}"></nav-bar>

                        </div>

                        <button class="block navbar-toggler focus:outline-none lg:hidden" type="button"
                                onclick="toggleNavbar('collapse-navbar')">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>


                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="collapse-navbar"
         class="fixed hidden inset-0 bg-black bg-opacity-80 z-50 min-h-screen xl:hidden transition-opacity opacity-100 pointer-events-auto">
        <div class="w-3/4 md:w-1/3 bg-primary min-h-screen absolute right-0 shadow py-4 px-12">
            <button class="absolute top-0 right-0 mt-4 mr-4"
                    onclick="toggleNavbar('collapse-navbar')"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="currentColor" width="28" height="28" viewBox="0 0 24 24">
                    <path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/>
                </svg>
            </button>

            @include('layouts.partials.mainmenu-collapse')

        </div>
    </div>
</header>

<div class="h-20 md:h-24 bg-primary"> </div>
