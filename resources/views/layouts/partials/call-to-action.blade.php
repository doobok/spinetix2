<div v-animate="'zz-up'" class="px-4 py-10 m-4 text-gray-800 bg-white rounded-lg shadow-xl md:px-12">
    <div class="row">
        <div class="w-full lg:w-1/2 mb-5 lg:mb-0">
            <div>
                <h2 class="text-2xl font-bold sm:text-3xl">
                    {{__('site.cta-h2')}}
                    <span class="block font-normal">{{__('site.cta-desc')}}</span>
                </h2>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="flex h-full">

                <smpl-button
                    cls="m-auto main-btn gradient-btn uppercase"
                    txt="{{__('site.cta-btn')}}"
                ></smpl-button>

            </div>
        </div>
    </div>
</div>
