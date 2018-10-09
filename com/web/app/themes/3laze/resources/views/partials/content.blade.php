<article @php post_class() @endphp>
  <div class="max-w-sm rounded overflow-hidden shadow-lg mb-5">
    <img class="w-full" src="{{ get_the_post_thumbnail_url() }}" alt="">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">
        <a href="{{ get_permalink() }}">{{ get_the_title() }}</a>
      </div>
      <p class="text-grey-darker text-base">
        @php the_excerpt() @endphp
      </p>
    </div>
    <div class="px-6 py-4 flex justify-around">
      {!! get_the_tag_list('<span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">', '</span><span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2"> ', '</span>') !!}
    </div>
    <div class="flex justify-end p-2">
      @include('partials/entry-meta')
    </div>
  </div>
</article>
