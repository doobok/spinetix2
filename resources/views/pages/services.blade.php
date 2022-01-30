@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.services-title')}} @endslot
        @slot('description') {{__('seo.services-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /services.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.services')],
        ],
      'h1' => __('seo.services-h1')
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
          {{__('site.services-h2')}}
      </span>
            </h2>
        </div>
    </div>

    <div class="container flex flex-col sm:flex-row flex-wrap py-8">
        @foreach($data as $item)
            <a href="{{route('page', $item->slug)}}">
                <div class="w-full sm:w-1/2 md:w-1/3">
                    <div class="single-services">
                        <div class="services-icon relative">
                            <img class="shape h-48" src="/assets/services-shape.svg" alt="shape">
                            <img class="shape-1 object-cover w-32 h-32 rounded-full shadow" src="{{Voyager::image( $item->image )}}" alt="{{$item->getTranslatedAttribute('heading')}}" />
                        </div>
                        <div class="my-2 services-content">
                            <h4 class="mb-2 text-xl font-bold text-gray-900">{{$item->getTranslatedAttribute('heading')}}</h4>
                            <p class="mb-4">{{$item->getTranslatedAttribute('teaser')}}</p>
                            <a class="duration-300 text-black hover:text-theme-color" href="{{route('page', $item->slug)}}">{{__('site.read-more')}}</a>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach

    </div>

@endsection
