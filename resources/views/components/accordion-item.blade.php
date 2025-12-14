<div class="accordion-item">
    <button
        @click="toggle('{{ $key }}')"
        class="flex items-center justify-between w-full px-4 py-4 text-left text-gray-900 hover:bg-gray-50 focus:outline-none"
        :aria-expanded="isOpen('{{ $key }}')"
    >
        <span class="font-medium">{{ $title }}</span>
        <svg
            class="w-5 h-5 text-gray-500 transition-transform duration-200"
            :class="{ 'rotate-180': isOpen('{{ $key }}') }"
            fill="none" viewBox="0 0 24 24" stroke="currentColor"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div
        x-show="isOpen('{{ $key }}')"
        x-cloak
        x-collapse
        class="px-4 pb-4 text-gray-600"
    >
        {{ $slot }}
    </div>
</div>
