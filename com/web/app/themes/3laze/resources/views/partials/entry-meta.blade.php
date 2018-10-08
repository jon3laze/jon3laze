<div class="flex border-grey-light border rounded-l p-1 w-1/5 shadow-lg">
  <div class="p-1 border border-grey rounded-l mr-2 shadow-md">
    {!! get_avatar(get_the_author_meta('ID'), 64, '', '', $args = ['class' => 'w-12 h-12 shadow']) !!}
  </div>
  <div class="text-sm flex flex-wrap">
    <div class="w-full text-blue-darker leading-none self-end">
      <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
        {{ get_the_author() }}
      </a>
    </div>
    <div class="w-full text-grey text-xs self-end text-left">
      <time class="updated italic text-grey text-xs" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    </div>
    </p>
  </div>
</div>
