@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.mp-title')}} @endslot
        @slot('description') {{__('seo.mp-description', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /main.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')

    @include('layouts.partials.main-page.header')

    @include('layouts.partials.main-page.features')
    @include('layouts.partials.main-page.simple')
    @include('layouts.partials.main-page.universalism')
    @include('layouts.partials.main-page.reliability')
    @include('layouts.partials.main-page.where-used')
    @include('layouts.partials.main-page.why-we')



@endsection
