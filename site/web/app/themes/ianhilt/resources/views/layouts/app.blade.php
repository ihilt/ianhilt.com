<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class(['bg-gray-200', 'h-full', 'mb-10']) @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="mx-4">
      @yield('content')
    </div>
    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
  </body>
</html>
