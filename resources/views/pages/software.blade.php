@extends('app')

@section('head')
    @component('components.meta')
        @slot('title') {{__('seo.software-title')}} @endslot
        @slot('description') {{__('seo.software-desc', [
                            'phone' => setting('site.phone'),
                            'schedule' => setting('site.schedule'),
                        ])}}
        @endslot
        @slot('image') /software.jpg @endslot
        @slot('date')  @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.breadcrumbs', [
      'crumbs' => [
          ['', __('site.software')],
        ],
      'h1' => __('seo.software-h1')
      ])
    @endcomponent

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-blue-900 uppercase rounded-full">
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
        <span class="relative">Elementi</span>
      </span>
                — digital signage software №1
            </h2>
            <p class="text-2xl">
                {{__('software.desc')}}
            </p>
        </div>
        <div class="mx-auto lg:max-w-2xl">
            <div class="relative w-full">
                <img class="w-full" src="/assets/elementi.png" alt="" />
            </div>
        </div>
        <div class="max-w-xl mt-5 md:mx-auto sm:text-center lg:max-w-2xl md:mt-6">
            <p class="text-2xl mb-3">
                {{__('software.asset-h2')}}
            </p>
            <p class="text-base text-gray-700 md:text-lg">
                {!! __('software.asset-desc') !!}
            </p>
        </div>
    </div>

{{--    small grid--}}
    <div class="grid gap-10 row-gap-8 mx-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3 mb-24">
        <div class="text-gray-800 grid justify-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-20 h-20 mb-2" viewBox="0 0 24 24"><path d="M15 10h4l-7 8-7-8h4v-10h6v10zm6 9v5h-18v-5h18zm-6 2h-1v1h1v-1zm2 0h-1v1h1v-1zm2 0h-1v1h1v-1z"/></svg>
            <div class="flex flex-col justify-center">
                <p class="text-base text-gray-800">
                    {{__('software.asset-1')}}
                </p>
            </div>
        </div>
        <div class="text-gray-800 grid justify-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-20 h-20 mb-2" viewBox="0 0 24 24">
                <path d="M13 3h2l-3 3-3-3h2v-2h2v2zm-2 18h-2l3-3 3 3h-2v2h-2v-2zm-9-10v-2l3 3-3 3v-2h-2v-2h2zm20 2v2l-3-3 3-3v2h2v2h-2zm-5-5h-10v8h10v-8z"/>
            </svg>
            <div class="flex flex-col justify-center">
                <p class="text-base text-gray-800 text-center">
                    {{__('software.asset-2')}}
                </p>
            </div>
        </div>
        <div class="text-gray-800 grid justify-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-20 h-20 mb-2" viewBox="0 0 24 24"><path d="M18 10.031v-6.423l-6.036-3.608-5.964 3.569v6.499l-6 3.224v7.216l6.136 3.492 5.864-3.393 5.864 3.393 6.136-3.492v-7.177l-6-3.3zm-1.143.036l-4.321 2.384v-4.956l4.321-2.539v5.111zm-4.895-8.71l4.272 2.596-4.268 2.509-4.176-2.554 4.172-2.551zm-.569 6.134v4.96l-4.25-2.421v-5.134l4.25 2.595zm-5.83 14.842l-4.421-2.539v-5.176l4.421 2.595v5.12zm-3.773-8.702l4.778-2.53 4.237 2.417-4.668 2.667-4.347-2.554zm4.917 3.587l4.722-2.697v5.056l-4.722 2.757v-5.116zm10.586 5.115l-4.722-2.757v-5.116l4.722 2.754v5.119zm-4.074-8.861l4.247-2.39 4.769 2.594-4.367 2.509-4.649-2.713zm9.638 6.323l-4.421 2.539v-5.116l4.421-2.538v5.115z"/></svg>
            <div class="flex flex-col justify-center">
                <p class="text-base text-gray-800">
                    {{__('software.asset-3')}}
                </p>
            </div>
        </div>
    </div>

    {{--    text--}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col lg:flex-row">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    <span class="inline-block text-blue-400">250 {{__('software.widgets-h2-1')}}</span>
                    {{__('software.widgets-h2-2')}} <br class="hidden md:block" />
                    {{__('software.widgets-h2-3')}}
                </h2>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-xl mb-4">
                    {{__('software.widgets-h3')}}
                </p>
                <p class="text-base text-gray-700 mb-4">
                    {!! __('software.widgets-desc') !!}
                </p>
            </div>
        </div>
    </div>

    {{--    grid--}}
    <div class="px-4 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-4">
        <div class="flex flex-wrap gap-3 row-gap-4 mx-auto sm:row-gap-5 lg:max-w-screen-lg">
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M7 19h-6v-11h6v11zm8-18h-6v18h6v-18zm8 11h-6v7h6v-7zm1 9h-24v2h24v-2z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-1')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M1.571 23.664l10.531-10.501 3.712 3.701-12.519 6.941c-.476.264-1.059.26-1.532-.011l-.192-.13zm9.469-11.56l-10.04 10.011v-20.022l10.04 10.011zm6.274-4.137l4.905 2.719c.482.268.781.77.781 1.314s-.299 1.046-.781 1.314l-5.039 2.793-4.015-4.003 4.149-4.137zm-15.854-7.534c.09-.087.191-.163.303-.227.473-.271 1.056-.275 1.532-.011l12.653 7.015-3.846 3.835-10.642-10.612z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-2')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M8.793 8.951c1.062-.757 2.542-.239 2.912 1-.655-.502-1.528-.482-2.2-.002-.677.482-.976 1.303-.716 2.082-1.05-.755-1.055-2.325.004-3.08zm3.164 10.8c.841.283 3.443 1.003 6.458 3.249l5.585-3.984c-1.448-2.031-1.05-3.452-2.489-5.471-.726-1.017-1.222-1.294-1.845-1.294-.22 0-.456.035-.724.084l.507.71c.306.428-.34.889-.646.46l-.452-.634c-.149-.21-.357-.281-.596-.281-.345 0-.753.148-1.141.237l.615.862c.304.428-.34.889-.646.46l-.533-.747c-.148-.208-.353-.28-.586-.28-.359 0-.787.17-1.186.271l.65.912c.306.429-.343.887-.646.46l-2.638-3.693c-.817-1.148-2.612.07-1.765 1.259l3.895 5.461c-.418-.154-1.152-.295-1.632-.295-1.481.003-2.051 1.628-.185 2.254zm-2.715-2.751h-6.242v-14h18v7.516c1.359.555 2.391 2.046 3 3.372v-10.888c0-1.104-.896-2-2-2h-20c-1.104 0-2 .896-2 2v14c0 1.104.896 2 2 2h6.825c-.111-.69.002-1.358.417-2z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-3')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M22 5v14h-20v-14h20zm2-2h-24v18h24v-18zm-14 13.952c-1.551-.265-3-1.615-3-3.242v-2.574l3 2.721v3.095zm2-2.103v-2.814c2.744-.515 2.897-3.494 2.062-5.035l-1.372 1.509-1.183-1.509-1.107 1.509-1.412-1.509c-.812 1.499-.752 4.516 2.012 5.035v4.965h1.489c1.817 0 3.511-1.473 3.511-3.291v-2.574l-4 3.714z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-4')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.848 12.459c.202.038.202.333.001.372-1.907.361-6.045 1.111-6.547 1.111-.719 0-1.301-.582-1.301-1.301 0-.512.77-5.447 1.125-7.445.034-.192.312-.181.343.014l.985 6.238 5.394 1.011z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-5')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M17 3v-2c0-.552.447-1 1-1s1 .448 1 1v2c0 .552-.447 1-1 1s-1-.448-1-1zm-12 1c.553 0 1-.448 1-1v-2c0-.552-.447-1-1-1-.553 0-1 .448-1 1v2c0 .552.447 1 1 1zm13 13v-3h-1v4h3v-1h-2zm-5 .5c0 2.481 2.019 4.5 4.5 4.5s4.5-2.019 4.5-4.5-2.019-4.5-4.5-4.5-4.5 2.019-4.5 4.5zm11 0c0 3.59-2.91 6.5-6.5 6.5s-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5zm-14.237 3.5h-7.763v-13h19v1.763c.727.33 1.399.757 2 1.268v-9.031h-3v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-9v1c0 1.316-1.278 2.339-2.658 1.894-.831-.268-1.342-1.111-1.342-1.984v-.91h-3v21h11.031c-.511-.601-.938-1.273-1.268-2z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-6')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.986 26.986" fill="currentColor" class="w-10 h-10 mb-1" style="enable-background:new 0 0 26.986 26.986" xml:space="preserve">
                  <path d="M1.686 12.008h23.615v2.94H1.686zm5.65-2.071h2.938V.113H7.958c-.018.405-.114.745-.29 1.024-.174.277-.397.5-.67.663a2.917 2.917 0 0 1-.916.353 4.52 4.52 0 0 1-1.044.092v2.033h2.3l-.002 5.659zm14.498-2.399h-4.446v-.014c.461-.283.946-.556 1.452-.818.51-.264.976-.559 1.398-.883a4.329 4.329 0 0 0 1.045-1.136c.271-.433.409-.965.409-1.595 0-.518-.097-.972-.289-1.362a2.605 2.605 0 0 0-.817-.968 3.782 3.782 0 0 0-1.271-.571A6.54 6.54 0 0 0 17.684 0c-.658 0-1.254.094-1.785.283a3.616 3.616 0 0 0-1.348.825 3.365 3.365 0 0 0-.819 1.334c-.178.526-.248 1.128-.212 1.806h2.654c-.021-.602.082-1.089.304-1.461.222-.371.614-.557 1.179-.557.329 0 .609.087.84.26.229.174.346.488.346.939a.883.883 0 0 1-.133.479 1.653 1.653 0 0 1-.34.381 3.792 3.792 0 0 1-.438.312l-.417.253c-.31.188-.631.379-.96.572-.329.192-.646.395-.952.606-.308.211-.594.44-.86.685a5.37 5.37 0 0 0-.715.791 3.638 3.638 0 0 0-.704 2.428h8.51V7.538zm-5.816 13.537a3.017 3.017 0 0 0-1.044-.63 3.865 3.865 0 0 0-1.313-.217c-.452 0-.861.052-1.227.154a2.615 2.615 0 0 0-1.045.606c.026-.244.082-.487.161-.728.08-.24.19-.455.332-.648.142-.193.311-.35.509-.467.197-.117.433-.176.705-.176.33 0 .583.057.763.17.206.149.345.328.409.535h2.583c-.159-.969-.55-1.667-1.171-2.096-.621-.43-1.465-.643-2.526-.643-.753 0-1.409.133-1.963.401a3.81 3.81 0 0 0-1.383 1.123 4.842 4.842 0 0 0-.819 1.708 8.21 8.21 0 0 0-.269 2.146c0 .602.077 1.186.232 1.75.156.564.403 1.062.742 1.496.339.433.773.778 1.306 1.037.531.258 1.169.387 1.913.387.582 0 1.121-.073 1.615-.225.494-.15.922-.379 1.277-.685.357-.306.638-.685.84-1.136.201-.451.305-.979.305-1.582 0-.479-.082-.912-.246-1.299a2.9 2.9 0 0 0-.686-.981zm-2.067 3.289c-.269.263-.615.395-1.037.395-.396 0-.718-.126-.968-.382-.248-.253-.375-.579-.375-.975 0-.365.129-.676.382-.924.255-.25.575-.375.961-.375.442 0 .791.129 1.05.389.261.26.39.562.39.91 0 .378-.134.698-.403.962z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-7')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M11 3v2h-4v-2h4zm3 6l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm-7.5 1c.828 0 1.5-.671 1.5-1.5 0-.828-.672-1.5-1.5-1.5s-1.5.672-1.5 1.5c0 .829.672 1.5 1.5 1.5zm10.5 9h-4v2h4v-2zm-6 2v-2h-4v2h4zm2-18v2h4v-2h-4zm6 0v2h3v3h2v-5h-5zm-17 2h3v-2h-5v5h2v-3zm20 14h-3v2h5v-5h-2v3zm0-5h2v-4h-2v4zm-20-4h-2v4h2v-4zm3 9h-3v-3h-2v5h5v-2z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-8')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M14 12h-4v-12h4v12zm4.213-10.246l-1.213 1.599c2.984 1.732 5 4.955 5 8.647 0 5.514-4.486 10-10 10s-10-4.486-10-10c0-3.692 2.016-6.915 5-8.647l-1.213-1.599c-3.465 2.103-5.787 5.897-5.787 10.246 0 6.627 5.373 12 12 12s12-5.373 12-12c0-4.349-2.322-8.143-5.787-10.246z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-9')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-10')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-11')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-12')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12-5.373-12-12-12-12 5.373-12 12zm2 0c0-5.292 4.113-9.612 9.315-9.965-3.205 2.154-5.315 5.813-5.315 9.965s2.11 7.811 5.315 9.965c-5.202-.353-9.315-4.673-9.315-9.965z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-13')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M18 12c-2.435 3.599-4 5.85-4 8.037 0 2.19 1.79 3.963 4 3.963s4-1.773 4-3.963c0-2.187-1.565-4.438-4-8.037zm-.014 2.56c.234.363.514.994.514 1.66 0 1.954-2 2.274-2 1.085 0-.817.994-2.022 1.486-2.745zm-7.986 5.314v-16.874h-4c-1.604 0-2.001 1.826-2.001 3h-1.999v-6h19.999l.001 6h-1.98c0-1.174-.371-3-2.02-3h-4v11.448c-1.244 2.038-2 3.749-2 5.589 0 1.522.582 2.908 1.529 3.963h-6.529v-2h1c1.175 0 2-.952 2-2.126z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-14')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M23.949 13c-.509 6.158-5.66 11-11.949 11-6.627 0-12-5.373-12-12 0-6.29 4.842-11.44 11-11.95v12.95h12.949zm-10.949-2h10.949c-.481-5.828-5.122-10.467-10.949-10.95v10.95z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-15')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M19 2c1.654 0 3 1.346 3 3v14c0 1.654-1.346 3-3 3h-14c-1.654 0-3-1.346-3-3v-14c0-1.654 1.346-3 3-3h14zm0-2h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-8 8h-1v-2h1v1h2v1h-1v1h-1v-1zm2 12v-1h-1v1h1zm-1-15v-1h-2v1h1v1h1v-1zm8-1v6h-1v-1h-4v-5h5zm-1 4v-3h-3v3h3zm-14 2h-1v1h2v-1h-1zm0 3h1v1h1v-3h-1v1h-2v2h1v-1zm5 1v2h1v-2h-1zm4-10h-1v3h1v-3zm0 5v-1h-1v1h1zm3-2h1v-1h-1v1zm-10-1h-1v1h1v-1zm2-2v5h-5v-5h5zm-1 1h-3v3h3v-3zm9 5v1h-1v-1h-2v1h-1v-1h-3v-1h-1v1h-1v1h1v2h1v-1h1v2h1v-2h3v1h-2v1h2v1h1v-3h1v1h1v2h1v-1h1v-1h-1v-1h-1v-1h1v-1h-2zm-11 8h1v-1h-1v1zm-2-3h5v5h-5v-5zm1 4h3v-3h-3v3zm12-3v-1h-1v1h1zm0 1h-1v1h-1v-1h-1v-1h1v-1h-2v-1h-1v2h-1v1h-1v3h1v-1h1v-1h2v2h1v-1h1v1h2v-1h1v-1h-2v-1zm-9-3h1v-1h-1v1zm10 2v1h1v1h1v-3h-1v1h-1zm2 4v-1h-1v1h1zm0-8v-1h-1v1h1z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-16')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M12 2c-6.627 0-12 5.373-12 12 0 2.583.816 5.042 2.205 7h19.59c1.389-1.958 2.205-4.417 2.205-7 0-6.627-5.373-12-12-12zm-.758 2.14c.256-.02.51-.029.758-.029s.502.01.758.029v3.115c-.252-.027-.506-.042-.758-.042s-.506.014-.758.042v-3.115zm-5.763 7.978l-2.88-1.193c.157-.479.351-.948.581-1.399l2.879 1.192c-.247.444-.441.913-.58 1.4zm1.216-2.351l-2.203-2.203c.329-.383.688-.743 1.071-1.071l2.203 2.203c-.395.316-.754.675-1.071 1.071zm.793-4.569c.449-.231.919-.428 1.396-.586l1.205 2.875c-.485.141-.953.338-1.396.585l-1.205-2.874zm1.408 13.802c.019-1.151.658-2.15 1.603-2.672l1.501-7.041 1.502 7.041c.943.522 1.584 1.521 1.603 2.672h-6.209zm4.988-11.521l1.193-2.879c.479.156.948.352 1.399.581l-1.193 2.878c-.443-.246-.913-.44-1.399-.58zm2.349 1.217l2.203-2.203c.383.329.742.688 1.071 1.071l-2.203 2.203c-.316-.396-.675-.755-1.071-1.071zm2.259 3.32c-.147-.483-.35-.95-.603-1.39l2.86-1.238c.235.445.438.912.602 1.39l-2.859 1.238z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-17')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M6 6h-6v-6h6v6zm9-6h-6v6h6v-6zm9 0h-6v6h6v-6zm-18 9h-6v6h6v-6zm9 0h-6v6h6v-6zm9 0h-6v6h6v-6zm-18 9h-6v6h6v-6zm9 0h-6v6h6v-6zm9 0h-6v6h6v-6z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-18')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M6.503 20.752c0 1.794-1.456 3.248-3.251 3.248-1.796 0-3.252-1.454-3.252-3.248 0-1.794 1.456-3.248 3.252-3.248 1.795.001 3.251 1.454 3.251 3.248zm-6.503-12.572v4.811c6.05.062 10.96 4.966 11.022 11.009h4.817c-.062-8.71-7.118-15.758-15.839-15.82zm0-3.368c10.58.046 19.152 8.594 19.183 19.188h4.817c-.03-13.231-10.755-23.954-24-24v4.812z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-19')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M24 20v1h-4v-1h.835c.258 0 .405-.178.321-.422l-.473-1.371h-2.231l-.575-1.59h2.295l-1.362-4.077-1.154 3.451-.879-2.498.921-2.493h2.222l3.033 8.516c.111.315.244.484.578.484h.469zm-6-1h1v2h-7v-2h.532c.459 0 .782-.453.633-.887l-.816-2.113h-6.232l-.815 2.113c-.149.434.174.887.633.887h1.065v2h-7v-2h.43c.593 0 1.123-.375 1.32-.935l5.507-15.065h3.952l5.507 15.065c.197.56.69.935 1.284.935zm-10.886-6h4.238l-2.259-6.199-1.979 6.199z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-20')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M11.266 7l12.734-2.625-.008-.042-1.008-4.333-21.169 4.196c-1.054.209-1.815 1.134-1.815 2.207v14.597c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3v-14h-12.734zm8.844-5.243l2.396 1.604-2.994.595-2.398-1.605 2.996-.594zm-5.898 1.169l2.4 1.606-2.994.595-2.401-1.607 2.995-.594zm-5.904 1.171l2.403 1.608-2.993.595-2.406-1.61 2.996-.593zm-2.555 5.903l2.039-2h3.054l-2.039 2h-3.054zm4.247 10v-7l6 3.414-6 3.586zm4.827-10h-3.054l2.039-2h3.054l-2.039 2zm6.012 0h-3.054l2.039-2h3.054l-2.039 2z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-21')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M19 16.166c0-4.289-4.465-5.483-7.887-7.091-2.079-1.079-1.816-3.658 1.162-3.832 1.652-.1 3.351.39 4.886.929l.724-3.295c-1.814-.551-3.437-.803-4.885-.841v-2.036h-2v2.134c-3.89.535-5.968 2.975-5.968 5.7 0 4.876 5.693 5.62 7.556 6.487 2.54 1.136 2.07 3.5-.229 4.021-1.993.451-4.538-.337-6.45-1.079l-.909 3.288c1.787.923 3.931 1.417 6 1.453v1.996h2v-2.105c3.313-.464 6.005-2.293 6-5.729z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-22')}}
                    </p>
                </div>
            </div>
            <div class="text-gray-800 grid justify-items-center rounded bg-gray-50 hover:bg-gray-200 p-3 w-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 mb-1">
                    <path d="M17.5 2c.827 0 1.5.673 1.5 1.5v7.525c0 1.569.514 2.287 1.411 3.05 1.01.858 1.589 2.106 1.589 3.425 0 2.481-2.019 4.5-4.5 4.5s-4.5-2.019-4.5-4.5c0-1.319.579-2.567 1.59-3.425.896-.761 1.41-1.479 1.41-3.05v-7.525c0-.827.673-1.5 1.5-1.5zm0-2c-1.933 0-3.5 1.567-3.5 3.5v7.525c0 .587-.258 1.146-.705 1.525-1.403 1.192-2.295 2.965-2.295 4.95 0 3.59 2.909 6.5 6.5 6.5s6.5-2.91 6.5-6.5c0-1.985-.892-3.758-2.295-4.95-.447-.38-.705-.938-.705-1.525v-7.525c0-1.933-1.567-3.5-3.5-3.5zm2.107 14.718c-1.012-.89-1.607-1.734-1.607-3.22v-6.498h-1v6.498c0 1.484-.597 2.332-1.607 3.22-.794.698-1.393 1.642-1.393 2.782 0 1.933 1.567 3.5 3.5 3.5s3.5-1.567 3.5-3.5c0-1.14-.599-2.083-1.393-2.782zm-9.607-6.218c0 1.933-1.567 3.5-3.5 3.5s-3.5-1.567-3.5-3.5 1.567-3.5 3.5-3.5 3.5 1.567 3.5 3.5zm-8 0c0-.171.032-.333.051-.5h-2.051v1h2.051c-.019-.167-.051-.329-.051-.5zm1.705-3.501l-1.448-1.449-.707.707 1.448 1.448c.21-.261.445-.497.707-.706zm6.297.706l1.447-1.448-.707-.707-1.448 1.448c.263.21.498.445.708.707zm-3.502-1.705c.171 0 .334.032.5.05v-2.05h-1v2.05c.166-.018.329-.05.5-.05zm0 9c-.171 0-.334-.032-.5-.05v2.05h1v-2.05c-.166.018-.329.05-.5.05zm4.449-5c.019.167.051.329.051.5l-.051.5h2.051v-1h-2.051zm-7.951 3.294l-1.448 1.449.707.707 1.448-1.448c-.262-.21-.497-.446-.707-.708zm6.296.708l1.448 1.448.707-.707-1.447-1.448c-.21.262-.445.497-.708.707z"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <p class="text-base text-gray-800 capitalize text-center">
                        {{__('software.widgets-23')}}
                    </p>
                </div>
            </div>

            <div class="text-gray-800 grid justify-items-center rounded p-3">
                 <div class="flex flex-col justify-center">
                    <p class="text-4xl font-bold text-blue-400">+ 225</p>
                    <p class="text-xl text-gray-800 text-center">
                        {{__('software.widgets-more')}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--    table--}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h3 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                {{__('software.specific-h2')}}
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
                                    S
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xl font-bold text-gray-900 uppercase tracking-wider">
                                    M
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xl font-bold text-gray-900 uppercase tracking-wider">
                                    X
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-gray-50">
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-1')}}
                                </td>
                                <td class="px-6 py-4">{{__('software.specific-10-screen')}}</td>
                                <td class="px-6 py-4">{{__('software.specific-more-screen')}}</td>
                                <td class="px-6 py-4">{{__('software.specific-more-screen')}}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-2')}}
                                </td>
                                <td class="px-6 py-4">{{__('software.specific-10-until')}}</td>
                                <td class="px-6 py-4">{{__('software.specific-any')}}</td>
                                <td class="px-6 py-4">{{__('software.specific-any')}}</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-3')}}
                                </td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-green-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg></td>
                                <td class="px-6 py-4 text-green-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-4')}}
                                </td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-green-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg></td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-5')}}
                                </td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-green-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-6')}}
                                </td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-green-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-7')}}
                                </td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-green-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    {{__('software.specific-8')}}
                                </td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-red-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7 14h-14v-4h14v4z"/></svg></td>
                                <td class="px-6 py-4 text-green-300"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z"/></svg></td>
                            </tr>
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
                    <span class="capitalize">{{__('site.with')}}</span> <span class="inline-block text-blue-400">Elementi</span>
                    {{__('site.from')}} <span class="inline-block text-blue-400">SpinetiX</span><br>
                    {{__('software.feature-h2')}}
                </h2>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-3xl mb-4">
                    {{__('software.feature-h3-1')}}
                </p>
                <p class="text-base text-gray-700">
                    {{__('software.feature-desc-1')}}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-12">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <div class="w-full flex justify-center">
                    <img class="h-48" src="/assets/click.svg" alt="{{__('software.feature-h3-2')}}" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-3xl mb-4">
                    {{__('software.feature-h3-2')}}
                </p>
                <p class="text-base text-gray-700">
                    {{__('software.feature-desc-2')}}
                </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-12">
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-3xl mb-4">
                    {{__('software.feature-h3-3')}}
                </p>
                <p class="text-base text-gray-700">
                    {{__('software.feature-desc-3')}}
                </p>
            </div>
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <div class="w-full flex justify-center">
                    <img class="h-48" src="/assets/girl-laptop.svg" alt="{{__('software.feature-h3-3')}}" />
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-12">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <div class="w-full flex justify-center">
                    <img class="h-48" src="/assets/coworking.svg" alt="{{__('software.feature-h3-4')}}" />
                </div>
            </div>
            <div class="lg:w-1/2">
                <p class="text-gray-800 font-bold text-3xl mb-4">
                    {{__('software.feature-h3-4')}}
                </p>
                <p class="text-base text-gray-700">
                    {{__('software.feature-desc-4')}}
                </p>
            </div>
        </div>
    </div>

{{--    download--}}
    <div>
        <div class="bg-gray-100">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        {{__('software.download-h2')}}
                        <span class="inline-block text-blue-400">Elementi</span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        {{__('software.download-desc')}}
                    </p>
                </div>
                <div class="flex items-center sm:justify-center">
                    <a
                        href="https://www.spinetix.com/elementi/download/thank-you"
                        class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-400 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                    >
                        {{__('site.demo-version')}}
                    </a>
                    <a href="/"
                       class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-gray-400 hover:bg-gray-700 focus:shadow-outline focus:outline-none"
                    >
                        {{__('site.user-guide')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
