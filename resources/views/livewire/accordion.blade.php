<div class="border border-gray-200 rounded-lg divide-y divide-gray-200">
    @foreach($items as $key => $item)
        <div wire:key="accordion-{{ $key }}">
            <button
                wire:click="toggle('{{ $key }}')"
                class="w-full px-4 py-3 text-left font-medium text-gray-900 hover:bg-gray-50 flex justify-between items-center focus:outline-none"
                aria-expanded="{{ $this->isOpen($key) ? 'true' : 'false' }}"
            >
                {{ $item['title'] ?? $item }}
                <svg
                    class="w-5 h-5 transition-transform duration-200 {{ $this->isOpen($key) ? 'rotate-180' : '' }}"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            @if($this->isOpen($key))
                <div class="px-4 pb-3 text-gray-600">
                    {{ $item['content'] ?? '' }}
                </div>
            @endif
        </div>
    @endforeach
</div>
