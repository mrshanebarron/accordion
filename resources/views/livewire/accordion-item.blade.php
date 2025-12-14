<div class="{{ config('sb-accordion.classes.item') }}">
    <button
        wire:click="$parent.toggle('{{ $key }}')"
        class="{{ config('sb-accordion.classes.trigger') }}"
        aria-expanded="{{ $parent->isOpen($key) ? 'true' : 'false' }}"
    >
        <span class="font-medium">{{ $title }}</span>
        <svg
            class="w-5 h-5 text-gray-500 transition-transform duration-200 {{ $parent->isOpen($key) ? 'rotate-180' : '' }}"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    @if($parent->isOpen($key))
        <div class="{{ config('sb-accordion.classes.content') }}">
            {{ $slot }}
        </div>
    @endif
</div>
