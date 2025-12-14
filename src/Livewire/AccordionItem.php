<?php

namespace MrShaneBarron\Accordion\Livewire;

use Livewire\Component;

class AccordionItem extends Component
{
    public string $key;
    public string $title;
    public bool $isOpen = false;

    protected $listeners = ['accordionToggle' => 'handleToggle'];

    public function mount(string $key, string $title): void
    {
        $this->key = $key;
        $this->title = $title;
    }

    public function handleToggle(string $activeKey): void
    {
        $this->isOpen = ($activeKey === $this->key);
    }

    public function toggle(): void
    {
        $this->dispatch('accordionItemClicked', key: $this->key)->to(Accordion::class);
    }

    public function render()
    {
        return view('ld-accordion::livewire.accordion-item');
    }
}
