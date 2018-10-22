<div class="flex w-full">
  <span class="w-full text-right px-4 py-2 m2  font-hairline">
    by -
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn font-extrabold">
      {{ get_the_author() }}
    </a>
    on -
    <time class="updated italic text-grey text-xs font-hairline" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    in -
    <a href="/{{ esc_html( get_the_category()[0]->name )  }}">
      <code class="font-hairline">{{ esc_html( get_the_category()[0]->name ) }}</code>
    </a>
  </span>
</div>
