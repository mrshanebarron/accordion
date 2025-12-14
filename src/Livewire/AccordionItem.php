<?php

namespace MrShaneBarron\Accordion\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class AccordionItem extends Component
{
    public string $title;
    public string $key;
    public bool $open = false;

    public function mount(string $title, ?string $key = null, bool $open = false): void
    {
        $this->title = $title;
        $this->key = $key ?? \Str::slug($title);
        $this->open = $open;
    }

    public function toggle(): void
    {
        $this->open = !$this->open;
    }

    public function render(): View
    {
        return view('ld-accordion::components.accordion-item');
    }
}
