@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.wiki-title')}} @endslot
        @slot('description') {{__('seo.wiki-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /wiki.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.wiki')],
        ],
      'h1' => __('seo.wiki-h1')
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
                <svg viewBox="0 0 52 24" fill="currentColor"
                     class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                  <defs>
                    <pattern id="679d5905-e08c-4b91-a66c-84aefbb9d2f5" x="0" y="0" width=".135" height=".30">
                      <circle cx="1" cy="1" r=".7"></circle>
                    </pattern>
                  </defs>
                  <rect fill="url(#679d5905-e08c-4b91-a66c-84aefbb9d2f5)" width="52" height="24"></rect>
                </svg>
                  {{__('site.wiki-h2')}}
              </span>
            </h2>
            <p class="text-2xl">
                {{__('site.wiki-desc')}}
            </p>
        </div>
    </div>

    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl">
            @foreach($data as $item)
                <div class="border-b">
                    <a href="{{route('page', $item->slug)}}" type="button" aria-label="Open item"
                       class="flex items-center justify-between w-full p-4 focus:outline-none">
                        <p class="text-lg font-medium">{{$item->getTranslatedAttribute('heading')}}</p>
                        <svg viewBox="0 0 24 24" class="w-3 text-gray-600 transition-transform duration-200"
                             fill="currentColor">
                            <path d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"/>
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
