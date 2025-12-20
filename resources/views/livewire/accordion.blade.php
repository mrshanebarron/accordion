<div class="w-full overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
    @foreach($items as $key => $item)
        <div
            wire:key="accordion-{{ $key }}"
            class="{{ !$loop->last ? 'border-b border-gray-200' : '' }}"
        >
            <button
                type="button"
                wire:click="toggle('{{ $key }}')"
                class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left transition-colors hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                aria-expanded="{{ $this->isOpen($key) ? 'true' : 'false' }}"
            >
                <span class="text-base font-semibold text-gray-900">{{ $item['title'] ?? $item }}</span>
                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-gray-100 transition-transform duration-300 {{ $this->isOpen($key) ? 'rotate-180 bg-indigo-100' : '' }}">
                    <svg class="h-4 w-4 text-gray-600 {{ $this->isOpen($key) ? 'text-indigo-600' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </button>
            @if($this->isOpen($key))
                <div class="px-5 pb-5 pt-2 text-gray-600 leading-relaxed">
                    {{ $item['content'] ?? '' }}
                </div>
            @endif
        </div>
    @endforeach
</div>
