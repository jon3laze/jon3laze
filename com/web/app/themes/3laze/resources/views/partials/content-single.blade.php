<article @php post_class() @endphp>
  <header>
    <div class="w-full flex justify-center">
      @if ( has_post_thumbnail() )
        {{ the_post_thumbnail('full', ['class' => ' rounded shadow-lg']) }}
      @endif
    </div>
    @include('partials/entry-meta-min')
    <div class="border-l-4 border-r-4 border-blue-darker text-blue-darker p-2 shadow-inner">
      <h1 class="entry-title font-bold">
        - {{ get_the_title() }} -
      </h1>
    </div>
  </header>
  <div class="entry-content justify-center p-4 my-4 shadow-lg">
    @php the_content() @endphp
    <div class="flex justify-end">
      @include('partials/entry-meta')
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
