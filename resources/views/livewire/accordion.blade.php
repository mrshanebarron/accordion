<div style="width: 100%; overflow: hidden; border-radius: 12px; border: 1px solid #e5e7eb; background: white; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
    @foreach($this->items as $key => $item)
        <div
            wire:key="accordion-{{ $key }}"
            style="{{ !$loop->last ? 'border-bottom: 1px solid #e5e7eb;' : '' }}"
        >
            <button
                type="button"
                wire:click="toggle('{{ $key }}')"
                style="display: flex; width: 100%; align-items: center; justify-content: space-between; gap: 16px; padding: 20px 24px; text-align: left; background: transparent; border: none; cursor: pointer; transition: background 0.15s;"
                onmouseover="this.style.background='#f9fafb'"
                onmouseout="this.style.background='transparent'"
                aria-expanded="{{ $this->isOpen($key) ? 'true' : 'false' }}"
            >
                <span style="font-size: 16px; font-weight: 600; color: #111827;">{{ $item['title'] ?? $item }}</span>
                <span style="display: flex; height: 28px; width: 28px; flex-shrink: 0; align-items: center; justify-content: center; border-radius: 50%; transition: transform 0.3s; {{ $this->isOpen($key) ? 'transform: rotate(180deg); background: #e0e7ff;' : 'background: #f3f4f6;' }}">
                    <svg style="height: 16px; width: 16px; {{ $this->isOpen($key) ? 'color: #4f46e5;' : 'color: #4b5563;' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </button>
            @if($this->isOpen($key))
                <div style="padding: 8px 24px 24px 24px; color: #4b5563; line-height: 1.6;">
                    {{ $item['content'] ?? '' }}
                </div>
            @endif
        </div>
    @endforeach
</div>
