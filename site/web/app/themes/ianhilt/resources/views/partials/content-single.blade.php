<article @php post_class(['flex','justify-center','items-center','mt-5']) @endphp>
  <div>
    <header>
      <h1 class="entry-title font-mono font-bold text-3xl">{!! get_the_title() !!}</h1>
      @include('partials/entry-meta')
    </header>
    <div class="entry-content font-mono mt-5">
      @php the_content() @endphp
    </div>
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
  </div>
</article>
