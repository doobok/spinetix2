@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.projects-title')}} @endslot
        @slot('description') {{__('seo.projects-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /projects.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.projects')],
        ],
      'h1' => __('seo.projects-h1')
      ])
    @endcomponent

    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20">
        <div class="max-w-xl pb-10 md:mx-auto sm:text-center lg:max-w-2xl md:pb-12">
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
          {{__('site.projects-h2')}}
      </span>
            </h2>
        </div>
    </div>



@endsection
