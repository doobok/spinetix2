<ul class="items-center content-start mr-auto lg:justify-end lg:flex">
  @foreach (menu('main_menu', '_json')->translate( App::currentLocale() ) as $menuitem)
    <li class="relative group nav-item active">
    <a href="{{route('page', $menuitem->url)}}"
      class="bg-gray-700 bg-opacity-0 hover:bg-opacity-25 text-white uppercase text-sm active:bg-gray-700 font-normal px-4 py-3 rounded hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 flex"
      style="transition: all 0.15s ease 0s;"
    >
    @if ($menuitem->icon_class)
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="mr-1">
        {!!$menuitem->icon_class!!}
      </svg>
    @endif
      {{$menuitem->title}}
    </a>
    @if ( count($menuitem->children) > 0 )
      <ul class="absolute left-1 top-0 mt-12 p-2 rounded-lg shadow-lg bg-white bg-opacity-70 z-10 hidden group-hover:block w-60"
          style="transition: all 0.5s ease 0s;">
          <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-4 z-0 opacity-70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg>
          @foreach ($menuitem->children->translate( App::currentLocale() ) as $subitem)
            <a href="{{route('page', $subitem->url)}}">
            <li class="p-2 py-3 text-gray-700 hover:bg-primary hover:text-white font-bold text-xs uppercase rounded flex">
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
    @endif
  </li>
  @endforeach
</ul>
