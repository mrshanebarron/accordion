<?php

namespace MrShaneBarron\Accordion;

use Illuminate\Support\ServiceProvider;

class AccordionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/accordion.php', 'ld-accordion');
    }

    public function boot(): void
    {
        // Register Livewire components if Livewire is installed
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('ld-accordion', Livewire\Accordion::class);
            \Livewire\Livewire::component('ld-accordion-item', Livewire\AccordionItem::class);
        }

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-accordion');

        // Publishable assets
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/accordion.php' => config_path('ld-accordion.php'),
            ], 'ld-accordion-config');

            $this->publishes([
                __DIR__ . '/../resources/css' => public_path('vendor/ld-accordion/css'),
            ], 'ld-accordion-assets');

            $this->publishes([
                __DIR__ . '/../resources/js' => resource_path('js/vendor/ld-accordion'),
            ], 'ld-accordion-vue');
        }
    }
}
