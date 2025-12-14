<?php

namespace MrShaneBarron\Accordion\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AccordionItem extends Component
{
    public function __construct(
        public string $title,
        public ?string $key = null,
        public bool $open = false
    ) {
        $this->key = $key ?? \Str::slug($title);
    }

    public function render(): View
    {
        return view('ld-accordion::components.accordion-item');
    }
}
