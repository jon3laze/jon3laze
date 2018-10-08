<header class="banner">
  <div class="container flex justify-center">
    <div class="brand w-1/3">
        @if (has_custom_logo())
          {{ the_custom_logo() }}
        @else
          <h1 class="mb-2">
            <a href="{{ home_url('/') }}">
              {{ get_bloginfo('name', 'display') }}
            </a>
          </h1>
        @endif
    </div>
  </div>
  <div class="container flex justify-center flex-wrap">
    <nav class="nav-primary list-reset flex">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'link_before' => '<span class="nav-item">', 'link_after' => '</span>']) !!}
      @endif
    </nav>
  </div>
</header>
