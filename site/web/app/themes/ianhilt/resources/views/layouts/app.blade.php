<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class(['bg-gray-200', 'h-full', 'mb-10']) @endphp>
    @php do_action('get_header') @endphp
    <nav class="py-4 px-6 bg-gray-100 shadow">
      <div class="container flex mx-auto">
        <a href="/"><img class="border-2 border-gray-400 rounded-full w-20 mr-8" alt="Avatar" src="https://avatars1.githubusercontent.com/u/279639"></a>
        <ul class="text-black -mx-4 self-center">
          <li class="inline-block px-4"><a class="link font-bold opacity-50 hover:opacity-100" href="/articles">Articles</a></li>
        </ul>
      </div>
    </nav>
    <div class="mx-4">
      @yield('content')
    </div>
    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
  </body>
</html>
