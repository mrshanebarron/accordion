<?php

namespace MrShaneBarron\Accordion\Livewire;

use Livewire\Component;

class Accordion extends Component
{
    public array $items = [];
    public bool $multiple = false;
    public ?string $defaultOpen = null;
    public array $activeItems = [];

    public function mount(array $items = [], bool $multiple = false, ?string $defaultOpen = null): void
    {
        $this->items = $items;
        $this->multiple = $multiple;
        $this->defaultOpen = $defaultOpen;

        if ($defaultOpen) {
            $this->activeItems = [$defaultOpen];
        }
    }

    public function toggle(string $key): void
    {
        if ($this->multiple) {
            if (in_array($key, $this->activeItems)) {
                $this->activeItems = array_values(array_diff($this->activeItems, [$key]));
            } else {
                $this->activeItems[] = $key;
            }
        } else {
            if (in_array($key, $this->activeItems)) {
                $this->activeItems = [];
            } else {
                $this->activeItems = [$key];
            }
        }
    }

    public function isOpen(string $key): bool
    {
        return in_array($key, $this->activeItems);
    }

    public function render()
    {
        return view('sb-accordion::livewire.accordion');
    }
}
