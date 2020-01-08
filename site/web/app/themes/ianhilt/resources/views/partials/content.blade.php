<article @php post_class(['flex','justify-center','items-center']) @endphp>
  <div>
    <header>
      <h2 class="font-mono font-bold text-3xl opacity-50 hover:opacity-100"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>