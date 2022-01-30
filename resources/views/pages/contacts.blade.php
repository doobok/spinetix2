@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.contacts-title')}} @endslot
        @slot('description') {{__('seo.contacts-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /contacts.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.contacts')],
        ],
      'h1' => __('seo.contacts-h1')
      ])
    @endcomponent

    <div class="relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col">
        <div class="w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:py-20 lg:max-w-screen-xl">
            <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6 flex flex-col items-center">
                <div class="w-full sm:w-3/4">
                    <ul class="list-reset mb-6 text-lg mx-auto">
                        <li class="my-7">
                      <span class="mx-2 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 text-primary" fill="currentColor">
                          <path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/>
                        </svg>
                        <span class="ml-4 text-lg md:text-xl text-gray-800">00001, {{__('site.global-address')}}</span>
                      </span>
                        </li>
                        <li class="my-7">
                      <span class="mx-2 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-8 text-primary" fill="currentColor">
                          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <span class="mx-4 text-lg md:text-2xl text-gray-800"><a
                                href="tel:+38{{preg_replace("/[^0-9]/", '', setting('site.phone'))}}">{{setting('site.phone')}}</a></span>
                      </span>
                        </li>
                        <li class="my-7">
                      <span class="mx-2 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 text-primary" fill="currentColor">
                          <path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/>
                        </svg>
                        <span class="ml-4 text-lg md:text-2xl text-gray-800"><a
                                href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></span>
                      </span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col items-center mt-5 text-gray-600">
                    <div class="mb-2 text-sm md:mb-2">{{__('site.follow-us')}}</div>
                    @include('components.social')
                </div>
            </div>
        </div>
        <div class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
            <img
                class="w-full h-56 md:h-96 lg:h-full"
                src="/contacts.svg"
                alt=""
            />
        </div>
    </div>

@endsection
