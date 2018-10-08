<article @php post_class() @endphp>
  <header>
    @if ( has_post_thumbnail() )
      {{ the_post_thumbnail() }}
    @endif
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
    @include('partials/entry-meta')
  </div>
</article>
