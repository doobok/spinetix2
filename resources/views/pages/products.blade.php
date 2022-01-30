@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.products-title')}} @endslot
        @slot('description') {{__('seo.products-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /products.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.products')],
        ],
      'h1' => __('seo.products-h1')
      ])
    @endcomponent

    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-blue-900 uppercase rounded-full bg-teal-accent-400">
                    SpinetiX
                </p>
            </div>
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="679d5905-e08c-4b91-a66c-84aefbb9d2f5" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#679d5905-e08c-4b91-a66c-84aefbb9d2f5)" width="52" height="24"></rect>
        </svg>
          {{__('site.products-h2')}}
      </span>
            </h2>
        </div>
    </div>

    <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid justify-items-center md:grid-cols-2 gap-5 sm:mx-auto">
            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
                <a href="{{route('page', 'mediaplayers')}}"><img src="/assets/hardware.jpg" class="object-cover w-full h-64 rounded border-2 border-gray-200" alt="{{__('seo.mediaplayers-h1')}}" /></a>
                <div class="py-5 px-4">
                    <a href="{{route('page', 'mediaplayers')}}" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
                        <p class="text-2xl font-bold leading-5">{{__('seo.mediaplayers-h1')}}</p></a>
                    <p class="mb-7 text-gray-700">
                        {{__('site.products-desc-1')}}...
                    </p>
                    <div class="flex items-center sm:justify-center">
                        <a
                            href="{{route('page', 'mediaplayers')}}"
                            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-400 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                        >
                            {{__('site.read-more')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
                <a href="{{route('page', 'software')}}"><img src="/assets/elementi-window.png" class="object-cover w-full h-64 rounded border-2 border-gray-200" alt="{{__('seo.software-h1')}}" /></a>
                <div class="py-5 px-4">
                    <a href="{{route('page', 'software')}}" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
                        <p class="text-2xl font-bold leading-5">{{__('seo.software-h1')}}</p></a>
                    <p class="mb-7 text-gray-700">
                        {{__('site.products-desc-2')}}...
                    </p>
                    <div class="flex items-center sm:justify-center">
                        <a
                            href="{{route('page', 'software')}}"
                            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-400 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                        >
                            {{__('site.read-more')}}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
