<?php

namespace MrShaneBarron\Accordion\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Accordion extends Component
{
    public bool $multiple = false;
    public ?string $defaultOpen = null;
    public bool $animation = true;
    public string $iconPosition = 'right';

    public function render(): View
    {
        return view('ld-accordion::components.accordion');
    }
}
