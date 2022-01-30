@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.mediaplayers-title')}} @endslot
        @slot('description') {{__('seo.mediaplayers-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /mediaplayers.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.mediaplayers')],
        ],
      'h1' => __('seo.mediaplayers-h1')
      ])
    @endcomponent

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
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
        <span class="relative">HMP</span>
      </span>
                400
            </h2>
        </div>
        <div class="mx-auto lg:max-w-2xl">
            <div class="relative w-full">
                <img class="w-full" src="/assets/hmp400.png" alt="" />
            </div>
        </div>
        <div class="max-w-xl mt-5 md:mx-auto sm:text-center lg:max-w-2xl md:mt-6">
            <p class="text-base text-gray-700 md:text-lg">
                {{__('players.desc')}}
            </p>
        </div>
    </div>

{{--    grid--}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h3 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                {{__('players.specifications-h2')}}
            </h3>
            <p class="text-base text-gray-700 md:text-lg">
                {{__('players.specifications-desc')}}
            </p>
        </div>
        <div class="grid gap-10 row-gap-8 mx-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex text-gray-800">
                <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-20 h-20 mr-4 bi bi-badge-4k-fill">
                    <path d="M3.577 8.9v.03h1.828V5.898h-.062a46.781 46.781 0 0 0-1.766 3.001z"/>
                    <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm2.372 3.715.435-.714h1.71v3.93h.733v.957h-.733V11H5.405V9.888H2.5v-.971c.574-1.077 1.225-2.142 1.872-3.202zm7.73-.714h1.306l-2.14 2.584L13.5 11h-1.428l-1.679-2.624-.615.7V11H8.59V5.001h1.187v2.686h.057L12.102 5z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-1')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 mr-4"><path d="M21.698 10.658l2.302 1.342-12.002 7-11.998-7 2.301-1.342 9.697 5.658 9.7-5.658zm-9.7 10.657l-9.697-5.658-2.301 1.343 11.998 7 12.002-7-2.302-1.342-9.7 5.657zm0-19l8.032 4.685-8.032 4.685-8.029-4.685 8.029-4.685zm0-2.315l-11.998 7 11.998 7 12.002-7-12.002-7z"/></svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-2')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 mr-4"><path d="M24 20v1h-4v-1h.835c.258 0 .405-.178.321-.422l-.473-1.371h-2.231l-.575-1.59h2.295l-1.362-4.077-1.154 3.451-.879-2.498.921-2.493h2.222l3.033 8.516c.111.315.244.484.578.484h.469zm-6-1h1v2h-7v-2h.532c.459 0 .782-.453.633-.887l-.816-2.113h-6.232l-.815 2.113c-.149.434.174.887.633.887h1.065v2h-7v-2h.43c.593 0 1.123-.375 1.32-.935l5.507-15.065h3.952l5.507 15.065c.197.56.69.935 1.284.935zm-10.886-6h4.238l-2.259-6.199-1.979 6.199z"/></svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-3')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 mr-4"><path d="M12 5c3.453 0 5.891 2.797 5.567 6.78 1.745-.046 4.433.751 4.433 3.72 0 1.93-1.57 3.5-3.5 3.5h-13c-1.93 0-3.5-1.57-3.5-3.5 0-2.797 2.479-3.833 4.433-3.72-.167-4.218 2.208-6.78 5.567-6.78zm0-2c-4.006 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408-.212-3.951-3.473-7.092-7.479-7.092z"/></svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-4')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 mr-4"><path d="M17 3v-2c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1zm-12 1c.553 0 1-.448 1-1v-2c0-.552-.447-1-1-1-.553 0-1 .448-1 1v2c0 .552.447 1 1 1zm13 13v-3h-1v4h3v-1h-2zm-5 .5c0 2.481 2.019 4.5 4.5 4.5s4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5zm11 0c0 3.59-2.91 6.5-6.5 6.5s-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5zm-14.237 3.5h-7.763v-13h19v1.763c.727.33 1.399.757 2 1.268v-9.031h-3v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-9v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-3v21h11.031c-.511-.601-.938-1.273-1.268-2z"/></svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-5')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.008 512.008" fill="currentColor" class="w-20 h-20 mr-4" style="enable-background:new 0 0 512.008 512.008" xml:space="preserve">
                    <path d="m222.31 134.771-85.333-85.333a8.497 8.497 0 0 0-6.033-2.5H8.55c-7.603 0-11.409 9.19-6.033 14.566l73.267 73.267c3.328 3.328 3.328 8.738 0 12.066L2.517 220.104C-2.859 225.48.947 234.67 8.55 234.67h122.394a8.513 8.513 0 0 0 6.033-2.5l85.333-85.333c3.337-3.336 3.337-8.738 0-12.066zM512 226.137a8.536 8.536 0 0 0-8.533-8.533H290.133a8.536 8.536 0 0 0-8.533 8.533v34.125c0 4.71 3.763 8.533 8.482 8.533 36.156-.008 177.289-.008 213.444 0 4.71 0 8.482-3.823 8.482-8.533L512 226.137zm-8.534 59.734H290.133a8.536 8.536 0 0 0-8.533 8.533v162.133a8.536 8.536 0 0 0 8.533 8.533h213.333a8.536 8.536 0 0 0 8.533-8.533V294.404c.001-4.71-3.822-8.533-8.533-8.533zm-153.6 119.466h-25.6c-4.719 0-8.533-3.814-8.533-8.533s3.814-8.533 8.533-8.533h25.6c4.719 0 8.533 3.814 8.533 8.533s-3.814 8.533-8.533 8.533zm0-59.733h-25.6c-4.719 0-8.533-3.814-8.533-8.533s3.814-8.533 8.533-8.533h25.6c4.719 0 8.533 3.814 8.533 8.533s-3.814 8.533-8.533 8.533zm119.467 59.733H384c-4.719 0-8.533-3.814-8.533-8.533s3.814-8.533 8.533-8.533h85.333c4.719 0 8.533 3.814 8.533 8.533s-3.814 8.533-8.533 8.533zm0-59.733H384c-4.719 0-8.533-3.814-8.533-8.533s3.814-8.533 8.533-8.533h85.333c4.719 0 8.533 3.814 8.533 8.533s-3.814 8.533-8.533 8.533z"/>
                    <path d="m439.168 134.771-85.333-85.333a8.526 8.526 0 0 0-6.033-2.5H225.399c-7.603 0-11.409 9.19-6.033 14.566l73.267 73.267c3.337 3.337 3.337 8.738 0 12.066l-73.267 73.267c-5.376 5.376-1.57 14.566 6.033 14.566H256a8.536 8.536 0 0 0 8.533-8.533V209.07a8.536 8.536 0 0 1 8.533-8.533h108.868a8.513 8.513 0 0 0 6.033-2.5l51.2-51.2c3.329-3.328 3.329-8.738.001-12.066z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-6')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 mr-4"><path d="M21.169 19.754c.522-.79.831-1.735.831-2.754 0-2.761-2.238-5-5-5s-5 2.239-5 5 2.238 5 5 5c1.019 0 1.964-.309 2.755-.832l2.831 2.832 1.414-1.414-2.831-2.832zm-4.169.246c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-4.89 2h-7.11l2.599-3h2.696c.345 1.152.976 2.18 1.815 3zm-2.11-5h-10v-17h22v12.11c-.574-.586-1.251-1.068-2-1.425v-8.685h-18v13h8.295c-.19.634-.295 1.305-.295 2zm-4-4h-2v-6h2v6zm3 0h-2v-9h2v9zm3 0h-2v-4h2v4z"/></svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-7')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 mr-4" version="1" xmlns="http://www.w3.org/2000/svg">
                    <path d="m13.1 3.5.7 1.1.7-1.1V5h1V2h-1l-.7 1.1-.6-1.1h-1.1v3h1zM18.4 5V4H17V2h-1v3zM9.8 5h1V3h.9V2H8.9v1h.9zM6.6 4h.9v1h1V2h-1v1h-.9V2h-1v3h1zM5 6l1.2 14.4L12 22l5.8-1.6L19 6H5zm11.3 4.6H9.5l.2 1.8h6.4l-.5 5.5-3.6 1-3.6-1-.3-2.9h1.8l.1 1.5 2 .5 2-.5.2-2.3H8l-.5-5.3h9l-.2 1.7z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-8')}}
                    </p>
                </div>
            </div>
            <div class="flex text-gray-800">
                <svg viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 mr-4" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 5h1v1a1 1 0 0 0 2 0V5h1a1 1 0 0 0 0-2h-1V2a1 1 0 0 0-2 0v1h-1a1 1 0 0 0 0 2Zm-2.5 4a3 3 0 0 0-3-3h-1a3 3 0 0 0-3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H12a1 1 0 0 0 0 2h.5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1 1 1 0 0 0-2 0 3 3 0 0 0 3 3h1a3 3 0 0 0 3-3v-1a3 3 0 0 0-.78-2 3 3 0 0 0 .78-2Zm6.1 0a1 1 0 0 0-.78 1.18 9 9 0 1 1-7-7 1 1 0 1 0 .4-2A10.8 10.8 0 0 0 12 1a11 11 0 1 0 11 11 10.8 10.8 0 0 0-.22-2.2A1 1 0 0 0 21.6 9Z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800">
                        {{__('players.specifications-9')}}
                    </p>
                </div>
            </div>

        </div>
    </div>

    {{--    table--}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h3 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                {{__('players.specific-h2')}}
            </h3>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 w-full lg:w-2/3 lg:mx-auto">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 text-gray-800">
                            <thead class="bg-gray-200">
                            <tr>
                                <th scope="col">
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xl font-bold text-gray-900 uppercase tracking-wider">
                                    HMP 400
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-gray-50">
                            @for($i=1; $i<=11; $i++)
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('players.specific-' . $i)}}
                                </td>
                                <td class="px-6 py-4">
                                    {{__('players.specific-400-' . $i)}}
                                </td>
                            </tr>
                            @endfor

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    text--}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col lg:flex-row">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    {{__('players.different-h2')}}<br class="hidden md:block" />
                    {{__('players.players')}}
                    <span class="inline-block text-blue-400">SpinetiX</span>
                </h2>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-xl mb-4">
                    {{__('players.different-h3-1')}}
                </p>
                <p class="text-base text-gray-700">
                    {{__('players.different-desc-1')}}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-12">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <div class="w-full flex justify-center">
                    <img class="h-48" src="/assets/secure.svg" alt="" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-2xl mb-4">
                    {{__('players.different-h3-2')}}
                </p>
                <p class="text-base text-gray-700">
                    {!! __('players.different-desc-2') !!}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-12">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <div class="w-full flex justify-center">
                    <img class="h-48" src="/assets/teaching.svg" alt="" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-xl mb-4">
                    {{__('players.different-h3-3')}}
                </p>
                <p class="text-base text-gray-700">
                    {!! __('players.different-desc-3') !!}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-12">
            <div class="w-full">
                <p class="text-gray-800 font-bold text-2xl mb-4">
                    {{__('players.different-h3-4')}}
                </p>
                <p class="text-base text-gray-700 lg:w-2/3">
                    {!! __('players.different-desc-4') !!}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-12">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <div class="w-full flex justify-center">
                    <img class="h-48" src="/assets/saving.svg" alt="" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-xl mb-4">
                    {{__('players.different-h3-5')}}
                </p>
                <p class="text-base text-gray-700">
                    {!! __('players.different-desc-5') !!}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-24">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <h3 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    {{__('players.guarantee-h2')}} — <br class="hidden md:block" />
                    {{__('site.from')}}
                    <span class="inline-block text-blue-400">3 {{__('site.to')}} 5 {{__('site.years')}}</span>
                </h3>
                <p class="text-base text-gray-700">
                    {{__('players.guarantee-desc')}}
                </p>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-xl mb-4">
                    {{__('players.different-h3-6')}}
                </p>
                <p class="text-base text-gray-700">
                    {!! __('players.different-desc-6') !!}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-24">
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-xl mb-4">
                    {{__('players.different-h3-7')}}
                </p>
                <p class="text-base text-gray-700">
                    {!! __('players.different-desc-7') !!}
                </p>
            </div>
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <div class="w-full flex justify-center">
                    <img class="h-48" src="/assets/usability.svg" alt="" />
                </div>
            </div>
        </div>

    </div>

@endsection
