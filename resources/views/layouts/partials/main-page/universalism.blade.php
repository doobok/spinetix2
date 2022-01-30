<section id="universalism" class="relative pt-20 about-area">
    <div class="container">
        <div class="row">
            <div v-animate="'zz-l'" class="w-full lg:w-1/2 lg:order-last">
                <div class="mx-4 mt-12 about-content">
                    <div class="mb-4 section-title">
                        <div class="line"></div>
                        <h3 class="title text-gray-800">{{__('main.universalism-h2-b')}} <span>{{__('main.universalism-h2')}}</span></h3>
                    </div>
                    <p class="mb-8">{{__('main.universalism-desc')}}</p>
                    <a href="{{route('page', 'software')}}" class="main-btn gradient-btn gradient-btn-2 z-50">{{__('site.read-more')}}</a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 lg:order-first">
                <div v-animate="'zz-up'" class="mx-4 mt-12 text-center about-image">
                    <img src="/assets/content-concept.jpg" class="rounded-lg" alt="{{__('main.universalism-h2')}}">
                </div>
            </div>
        </div>
    </div>
</section>
