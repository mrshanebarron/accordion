<?php

namespace MrShaneBarron\Accordion\Livewire;

use Livewire\Component;

class Accordion extends Component
{
    public bool $multiple = false;
    public ?string $defaultOpen = null;
    public ?string $active = null;

    public function mount(bool $multiple = false, ?string $defaultOpen = null): void
    {
        $this->multiple = $multiple;
        $this->defaultOpen = $defaultOpen;
        $this->active = $defaultOpen;
    }

    public function toggle(string $key): void
    {
        if ($this->active === $key) {
            $this->active = null;
        } else {
            $this->active = $key;
        }
    }

    public function isOpen(string $key): bool
    {
        return $this->active === $key;
    }

    public function render()
    {
        return view('ld-accordion::livewire.accordion');
    }
}
