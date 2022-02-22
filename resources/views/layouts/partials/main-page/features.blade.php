<section id="features" class="services-area pt-120">
    <div class="container">
        <div class="justify-center row">
            <div class="w-full lg:w-2/3">
                <div class="pb-10 text-center section-title text-gray-800">
                    <div class="m-auto line"></div>
                    <h3 class="title">SpinetiX <span> {{__('main.features-h2')}}</span></h3>
                </div>
            </div>
        </div>
        <div class="justify-center row">
            <div v-animate="'zz-l'" class="w-full sm:w-2/3 lg:w-1/3">
                <div class="single-services">
                    <div class="services-icon">
                        <img class="shape" src="/assets/services-shape.svg" alt="shape">
                        <img class="shape-1" src="/assets/services-shape-1.svg" alt="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 text-white absolute left-7 top-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2.479 18c.978 0 1.309-.524 1.708-.922.813-.816 1.813-.469 1.813.847v6.075h6.075c1.315 0 1.663-1 .847-1.813-.398-.399-.922-.73-.922-1.708 0-1.087 1.108-2.479 3-2.479s3 1.392 3 2.479c0 .978-.524 1.309-.922 1.708-.816.813-.469 1.813.847 1.813h6.075v-6.075c0-1.315-1-1.663-1.813-.847-.399.398-.73.922-1.708.922-1.087 0-2.479-1.108-2.479-3s1.392-3 2.479-3c.978 0 1.309.524 1.708.922.813.816 1.813.469 1.813-.847v-6.075h-6.075c-1.315 0-1.663-1-.847-1.813.398-.399.922-.73.922-1.708 0-1.087-1.108-2.479-3-2.479s-3 1.392-3 2.479c0 .978.524 1.309.922 1.708.816.813.469 1.813-.847 1.813h-6.075v6.075c0 1.315-1 1.663-1.813.847-.399-.398-.73-.922-1.708-.922-1.087 0-2.479 1.108-2.479 3s1.392 3 2.479 3z"/>
                        </svg>
                    </div>
                    <div class="my-8 services-content">
                        <h4 class="mb-8 text-xl font-bold text-gray-900">{{__('main.features-simple')}}</h4>
                        <p class="mb-8">{{__('main.features-simple-desc')}}</p>
                        <a class="duration-300 text-gray-500 hover:text-theme-color" v-scroll-to="'#simple'" href="#">{{__('site.read-more')}}</a>
                    </div>
                </div>
            </div>
            <div v-animate="'zz-up'" class="w-full sm:w-2/3 lg:w-1/3">
                <div class="mt-8 text-center single-services">
                    <div class="services-icon">
                        <img class="shape" src="/assets/services-shape.svg" alt="shape">
                        <img class="shape-1" src="/assets/services-shape-2.svg" alt="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 text-white absolute left-8 top-9" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 9c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm-9 4c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm18 0c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm-9-6c.343 0 .677.035 1 .101v-3.101c0-.552-.447-1-1-1s-1 .448-1 1v3.101c.323-.066.657-.101 1-.101zm9 4c.343 0 .677.035 1 .101v-7.101c0-.552-.447-1-1-1s-1 .448-1 1v7.101c.323-.066.657-.101 1-.101zm0 10c-.343 0-.677-.035-1-.101v3.101c0 .552.447 1 1 1s1-.448 1-1v-3.101c-.323.066-.657.101-1 .101zm-18-10c.343 0 .677.035 1 .101v-7.101c0-.552-.447-1-1-1s-1 .448-1 1v7.101c.323-.066.657-.101 1-.101zm9 6c-.343 0-.677-.035-1-.101v7.101c0 .552.447 1 1 1s1-.448 1-1v-7.101c-.323.066-.657.101-1 .101zm-9 4c-.343 0-.677-.035-1-.101v3.101c0 .552.447 1 1 1s1-.448 1-1v-3.101c-.323.066-.657.101-1 .101z"/>
                        </svg>
                    </div>
                    <div class="my-8 services-content">
                        <h4 class="mb-8 text-xl font-bold text-gray-900">{{__('main.features-universalism')}}</h4>
                        <p class="mb-8">{{__('main.features-universalism-desc')}}</p>
                        <a class="duration-300 text-gray-500 hover:text-theme-color" v-scroll-to="'#universalism'" href="#">{{__('site.read-more')}}</a>
                    </div>
                </div>
            </div>
            <div v-animate="'zz-r'" class="w-full sm:w-2/3 lg:w-1/3">
                <div class="mt-8 text-center single-services">
                    <div class="services-icon">
                        <img class="shape" src="/assets/services-shape.svg" alt="shape">
                        <img class="shape-1" src="/assets/services-shape-3.svg" alt="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 text-white absolute left-9 top-9" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 12.645v-2.289c-1.17-.417-1.907-.533-2.28-1.431-.373-.9.07-1.512.6-2.625l-1.618-1.619c-1.105.525-1.723.974-2.626.6-.9-.374-1.017-1.117-1.431-2.281h-2.29c-.412 1.158-.53 1.907-1.431 2.28h-.001c-.9.374-1.51-.07-2.625-.6l-1.617 1.619c.527 1.11.973 1.724.6 2.625-.375.901-1.123 1.019-2.281 1.431v2.289c1.155.412 1.907.531 2.28 1.431.376.908-.081 1.534-.6 2.625l1.618 1.619c1.107-.525 1.724-.974 2.625-.6h.001c.9.373 1.018 1.118 1.431 2.28h2.289c.412-1.158.53-1.905 1.437-2.282h.001c.894-.372 1.501.071 2.619.602l1.618-1.619c-.525-1.107-.974-1.723-.601-2.625.374-.899 1.126-1.019 2.282-1.43zm-8.5 1.689c-1.564 0-2.833-1.269-2.833-2.834s1.269-2.834 2.833-2.834 2.833 1.269 2.833 2.834-1.269 2.834-2.833 2.834zm15.5 4.205v-1.077c-.55-.196-.897-.251-1.073-.673-.176-.424.033-.711.282-1.236l-.762-.762c-.52.248-.811.458-1.235.283-.424-.175-.479-.525-.674-1.073h-1.076c-.194.545-.25.897-.674 1.073-.424.176-.711-.033-1.235-.283l-.762.762c.248.523.458.812.282 1.236-.176.424-.528.479-1.073.673v1.077c.544.193.897.25 1.073.673.177.427-.038.722-.282 1.236l.762.762c.521-.248.812-.458 1.235-.283.424.175.479.526.674 1.073h1.076c.194-.545.25-.897.676-1.074h.001c.421-.175.706.034 1.232.284l.762-.762c-.247-.521-.458-.812-.282-1.235s.529-.481 1.073-.674zm-4 .794c-.736 0-1.333-.597-1.333-1.333s.597-1.333 1.333-1.333 1.333.597 1.333 1.333-.597 1.333-1.333 1.333z"/>
                        </svg>
                    </div>
                    <div class="my-8 services-content">
                        <h4 class="mb-8 text-xl font-bold text-gray-900">{{__('main.features-reliability')}}</h4>
                        <p class="mb-8">{{__('main.features-reliability-desc')}}</p>
                        <a class="duration-300 text-gray-500 hover:text-theme-color" v-scroll-to="'#reliability'" href="#">{{__('site.read-more')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
