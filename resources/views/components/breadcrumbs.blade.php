<section class="bg-gray-200 py-2">
  <div class="container mx-auto px-2">
      <ol itemscope type="none" itemtype="https://schema.org/BreadcrumbList" class="list-reset pl-4 py-4 flex flex-inline overflow-x-auto text-gray-500">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
            class="whitespace-nowrap pr-2"><a href="{{route('main-page')}}" class="no-underline">
          <span class="float-left pr-2 hidden sm:block">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 122.4 122.4" fill="currentColor">
                  <path d="M122.4 87.9V34.5c0-4.6-5-7.5-9-5.2L67.2 56c-4 2.3-4 8.1 0 10.4l46.2 26.7c4 2.3 9-.6 9-5.2zM49.2 29.3 3 56c-4 2.3-4 8.1 0 10.4l46.2 26.7c4 2.301 9-.6 9-5.199V34.5c0-4.6-5-7.5-9-5.2z"/>
              </svg>
          </span>
          <span>
            {{__('site.main-page')}}
          </span>
          </a>
          <meta itemprop="position" content="1" />
        </li>

        @foreach ($crumbs as $key => list($uri, $title))
          <span class="whitespace-nowrap mx-3">/</span>
          <li class="whitespace-nowrap px-2" itemprop="itemListElement" itemscope
              itemtype="https://schema.org/ListItem">

            @if (!$uri)
              <a class="underline" itemprop="item" href="{{url()->current()}}">
            @else
              <a class="no-underline" itemprop="item" href="{{ $uri }}">
            @endif

                <span itemprop="name">{{ $title }}</span></a>
            <meta itemprop="position" content="{{ $key + 2 }}" />
          </li>
        @endforeach

      </ol>
  </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="w-full lg:w-1/2">
                <div class="pb-8 section-title text-gray-800">
                    <div class="line"></div>
                    <h1 class="title">{{$h1}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
