<?php

namespace MrShaneBarron\Accordion\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordion extends Component
{
    public function __construct(
        public bool $multiple = false,
        public ?string $defaultOpen = null,
        public bool $animation = true,
        public string $iconPosition = 'right'
    ) {}

    public function render(): View
    {
        return view('ld-accordion::components.accordion');
    }
}
