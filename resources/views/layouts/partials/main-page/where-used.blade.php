<section id="where-used" class="testimonial-area pt-120">
    <div class="container">
        <div class="justify-center row">
            <div class="w-full lg:w-2/3">
                <div class="pb-10 text-center section-title">
                    <div class="m-auto line"></div>
                    <h3 class="title text-gray-800">{{__('main.where-used')}}<span> SpinetiX</span></h3>
                </div>
            </div>
        </div>
        <div class="row testimonial-active">
            @for($i=1; $i<=6; $i++)
            <div v-animate="'zz-up'" class="w-full lg:w-1/3">
                <div class="single-card">
                    <img src="/assets/where-used-{{$i}}.jpg" class="card-image rounded-t-lg m-0" alt="{{__('main.where-used-title-' . $i)}}">
                    <div class="flex items-center">
                        <div class="relative services-icon">
                            <img class="shape" src="/assets/services-shape.svg" alt="shape">
                        </div>
                        <div class="author-content media-body">
                            <h6 class="mb-1 text-xl font-bold text-gray-900">{{__('main.where-used-title-' . $i)}}</h6>
                        </div>
                    </div>
                    <div class="mb-8 mx-2">
                        <p>{{__('main.where-used-desc-' . $i)}}</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
