<?php

namespace MrShaneBarron\Accordion;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AccordionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-accordion.php', 'ld-accordion');
    }

    public function boot(): void
    {
        Livewire::component('ld-accordion', Livewire\Accordion::class);
        Livewire::component('ld-accordion-item', Livewire\AccordionItem::class);
        $this->loadViewComponentsAs('ld', [View\Components\Accordion::class, View\Components\AccordionItem::class]);
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-accordion');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/ld-accordion.php' => config_path('ld-accordion.php')], 'ld-accordion-config');
        }
    }
}
