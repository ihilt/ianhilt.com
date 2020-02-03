@if ($navigation)
  <ul class="text-black -mx-4 self-center">
    @foreach ($navigation as $item)
      <li class="inline-block px-4">
        <a class="link font-bold opacity-50 hover:opacity-100 {{ $item->active ? 'opacity-100' : '' }}" href="{{ $item->url }}">
          {{ $item->label }}
        </a>

        @if ($item->children)
          <ul class="my-child-menu">
            @foreach ($item->children as $child)
              <li class="my-child-item {{ $child->active ? 'active' : '' }}">
                <a href="{{ $child->url }}">
                  {{ $child->label }}
                </a>
              </li>
            @endforeach
          </ul>
        @endif
      </li>
    @endforeach
  </ul>
@endif
