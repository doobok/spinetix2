@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{$page->getTranslatedAttribute('title')}} @endslot
        @slot('description') {{$page->getTranslatedAttribute('description')}} @endslot
        @slot('image') @if($page->seo_image == true)
            {{ Voyager::image( $page->seo_image ) }}@else
            {{ Voyager::image( $page->image ) }}@endif
        @endslot
        @slot('date') {{$page->created_at}} @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', $page->getTranslatedAttribute('heading')],
        ],
      'h1' => $page->getTranslatedAttribute('heading')
      ])
    @endcomponent

    <article class="px-4 py-3 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        @isset($page->image)
        <div class="mx-auto lg:max-w-2xl">
            <div class="relative w-full pb-4">
                <img class="w-full" src="{{ Voyager::image( $page->image ) }}" alt="{{$page->getTranslatedAttribute('heading')}}" />
            </div>
        </div>
        @endisset
        <div class="max-w-xl mb-5 md:mx-auto sm:text-center lg:max-w-4xl">
            <div class="mb-4">
                <p class="inline-block max-w-2xl font-sans text-2xl italic leading-none tracking-tight text-black transition-colors duration-200 hover:text-deep-purple-accent-700 sm:text-3xl">
                    {{$page->getTranslatedAttribute('teaser')}}
                </p>
            </div>
        </div>
        <div class="max-w-xl mb-5 md:mx-auto lg:max-w-2xl">
            {!! $page->getTranslatedAttribute('body') !!}
        </div>

    </article>


@endsection
