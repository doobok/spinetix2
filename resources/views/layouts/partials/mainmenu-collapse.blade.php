<div class="block lg:hidden">

<ul class="flex flex-col list-none mt-6">

  @foreach (menu('main_menu', '_json')->translate( App::currentLocale() ) as $menuitem)
    <li class="flex justify-left submenu">
    <a href="{{route('page', $menuitem->url)}}"
      class="text-white px-3 py-4 flex items-center text-sm uppercase"
      style="transition: all 0.15s ease 0s;"
    >
    @if ($menuitem->icon_class)
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="mr-1">
        {!!$menuitem->icon_class!!}
      </svg>
    @endif
      {{$menuitem->title}}
    </a>
    {{-- @if ( count($menuitem->children) > 0 )
      <div class="">

      <ul class="p-2 bg-gray-700 z-10 hidden submenu-active:block w-full">

          @foreach ($menuitem->children->translate( App::currentLocale() ) as $subitem)
            <a href="{{route('page', $subitem->url)}}">
            <li class="p-2 py-3 text-white font-bold text-xs uppercase flex">
                @if ($subitem->icon_class)
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="mr-2">
                    {!!$subitem->icon_class!!}
                  </svg>
                @endif
                {{$subitem->title}}
            </li>
          </a>

          @endforeach
      </ul>
    </div>
    @endif --}}
  </li>
  @endforeach

</ul>
    <div class="gap-x-4 flex flex-nowrap absolute bottom-8 left-12">
        <nav-bar class="block lg:hidden" lang="{{app()->getLocale()}}"></nav-bar>
    </div>



</div>
