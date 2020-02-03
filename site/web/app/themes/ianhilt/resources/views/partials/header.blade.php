<nav class="py-4 px-6 bg-gray-100 shadow">
  <div class="container flex mx-auto">
    <a href="/"><img class="border-2 border-gray-400 rounded-full w-20 mr-8" alt="Avatar" src="https://avatars1.githubusercontent.com/u/279639"></a>
    @if (has_nav_menu('primary_navigation'))
      @include('partials.navigation')
    @endif
  </div>
</nav>
