<div class="flex border-grey-lighter border rounded-l p-1 shadow-lg max-w-xs">
  <div class="p-1 border border-grey-lighter rounded-l mr-2 shadow-md">
    {!! get_avatar(get_the_author_meta('ID'), 64, '', '', $args = ['class' => 'w-16 h-16 shadow']) !!}
  </div>
  <div class="flex flex-wrap flex-grow px-2">
    <div class="w-full text-blue-darker self-end">
      <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn font-extrabold">
        {{ get_the_author() }}
      </a>
    </div>
    <div class="w-full text-grey text-xs self-end text-right">
      <time class="updated italic text-grey text-xs font-hairline" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    </div>
    </p>
  </div>
</div>
