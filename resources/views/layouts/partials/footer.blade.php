<footer id="footer" class="relative z-10 footer-area bg-gray-100 pt-120">
    <div class="footer-bg" style="background-image: url(/assets/wave-bottom.svg);"></div>
    <div class="container">
        <div v-animate="'zz-up'">
            <div class="justify-center row">
                <a href="{{route('page', 'mediaplayers')}}">
                    <div class="w-full sm:w-1/2">
                        <div class="single-services">
                            <div class="services-icon relative">
                                <img class="shape" src="/assets/services-shape.svg" alt="shape">
                                <img class="shape-1" src="/assets/services-shape-1.svg" alt="shape">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 text-white absolute left-9 top-9" fill="currentColor" viewBox="0 0 24 24"><path d="M3 22v-20l18 10-18 10z"/></svg>
                            </div>
                            <div class="my-2 services-content">
                                <h4 class="mb-2 text-xl font-bold text-gray-900">{{__('site.mediaplayers')}}</h4>
                                <p class="mb-4">{{__('site.mediaplayers-desc')}}</p>
                                <a class="duration-300 text-black hover:text-theme-color" href="{{route('page', 'mediaplayers')}}">{{__('site.read-more')}}</a>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('page', 'software')}}">
                    <div class="w-full sm:w-1/2">
                        <div class="single-services">
                            <div class="services-icon relative">
                                <img class="shape" src="/assets/services-shape.svg" alt="shape">
                                <img class="shape-1" src="/assets/services-shape-2.svg" alt="shape">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 text-white absolute left-8 top-10" fill="currentColor" viewBox="0 0 24 24"><path d="M0 0v19h24v-19h-24zm22 17h-20v-15h20v15zm-6.599 4l2.599 3h-12l2.599-3h6.802zm-6.401-16l6 4.674-2.538.427 1.538 3.095-1.571.804-1.546-3.157-1.883 1.759v-7.602z"/></svg>
                            </div>
                            <div class="my-2 services-content">
                                <h4 class="mb-2 text-xl font-bold text-gray-900">{{__('site.software')}}</h4>
                                <p class="mb-4">{{__('site.software-desc')}}</p>
                                <a class="duration-300 text-black hover:text-theme-color" href="{{route('page', 'software')}}">{{__('site.read-more')}}</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="footer-widget pb-120">
            <div class="row">
                <div class="w-4/5 md:w-3/5 lg:w-2/6">
                    <div class="mt-12 footer-about wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a href="{{route('main-page')}}" class="text-2xl md:text-3xl text-white font-bold mr-4 mb-6 navbar-brand flex flex-nowrap">
                            <svg viewBox="0 0 166 178.225" class="h-8 md:h-10 mr-2" xmlns="http://www.w3.org/2000/svg" version="1.0">
                                <path d="M30.8 1.4c-7 2.5-8.9 4.3-8.4 7.9.3 1.8.8 5.9 1.2 9.2 1.2 12.1 8 29.1 15.8 39.9 4.6 6.5 11.9 13.9 18.2 18.7 16.8 12.7 50.5 21.1 90.7 22.6l17.7.6V20.4l-2.6-5.2c-1.4-2.9-4.4-6.7-6.6-8.6C149.1-.1 149.6 0 89.1 0 46.2.1 33.7.4 30.8 1.4zM0 84.5v44.6l3.1-1.8c8.1-4.8 17.5-14.3 22.4-22.7 3.6-6.2 5.8-15.9 5-22.1-1.3-10.8-10-24.3-23-35.9L0 39.8v44.7zm90.5 31.1c-28.5 2.1-54.8 10.5-79.7 25.3L0 147.3v5.3c0 10.5 8.1 20.6 19.2 23.9 7.7 2.3 119.9 2.3 127.6 0 7.1-2.1 13.1-7 16.4-13.4 2.8-5.4 2.8-5.5 2.6-22.5l-.3-17.1-12.5-2.2c-24.9-4.3-49.9-6.6-62.5-5.7z" fill="currentColor"/>
                            </svg>
                            SpinetiX
                        </a>
                        <p class="pb-7 pr-10 leading-snug text-white text-sm">
                            {{__('site.footer-desc')}}
                        </p>
                        <div class="text-gray-50">
                            @include('components.social')
                        </div>
                    </div>
                </div>
                <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
                    <div class="row">
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 p-2">
                            <div class="mt-12 link-wrapper">
                                <div class="footer-title">
                                    <h4 class="mb-8 text-xl font-bold text-white">{{__('site.quick-links')}}</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="{{route('page', 'mediaplayers')}}">{{__('site.mediaplayers')}}</a></li>
                                    <li><a href="{{route('page', 'software')}}">{{__('site.software')}}</a></li>
                                  </ul>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 p-2">
                            <div class="mt-12 link-wrapper">
                                <div class="footer-title">
                                    <h4 class="mb-8 text-xl font-bold text-white">{{__('site.info')}}</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="{{route('page', 'to-buyers')}}">{{__('site.to-buyers')}}</a></li>
                                    <li><a href="{{route('page', 'wiki')}}">{{__('site.wiki')}}</a></li>
                                    <li><a href="{{route('page', 'policy')}}">{{__('site.policy')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6 p-2">
                    <div class="mt-12 footer-contact">
                        <div class="footer-title">
                            <h4 class="mb-8 text-xl font-bold text-white">{{__('site.contacts')}}</h4>
                        </div>
                        <ul class="contact">
                            <li><a href="tel:+38{{preg_replace("/[^0-9]/", '', setting('site.phone'))}}">{{setting('site.phone')}}</a></li>
                            <li><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></li>
                            <li>{{__('site.global-address')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-8 border-t border-gray-200 footer-copyright">
            <p class="text-white text-sm text-center sm:text-left">© 2021-{{date("Y")}} Copyright —
                {{config('app.name')}}
            </p>
        </div>
    </div>
    <div id="particles-2" class="particles"></div>
</footer>

<dark-mode></dark-mode>

<a href="#" v-scroll-to="'#header'" class="back-to-top opacity-40 text-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>
</a>
