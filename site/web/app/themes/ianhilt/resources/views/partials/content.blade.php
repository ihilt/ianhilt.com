<article @php post_class(['max-w-5xl','mx-auto','mt-10']) @endphp>
  <div>
    <header>
      <h2 class="font-mono font-bold text-3xl"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
