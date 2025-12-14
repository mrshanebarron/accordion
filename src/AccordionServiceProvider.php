<?php

namespace MrShaneBarron\Accordion;

use Illuminate\Support\ServiceProvider;

class AccordionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/accordion.php', 'sb-accordion');
    }

    public function boot(): void
    {
        // Register Livewire components if Livewire is installed
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-accordion', Livewire\Accordion::class);
            \Livewire\Livewire::component('sb-accordion-item', Livewire\AccordionItem::class);
        }

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-accordion');

        // Publishable assets
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/accordion.php' => config_path('sb-accordion.php'),
            ], 'sb-accordion-config');

            $this->publishes([
                __DIR__ . '/../resources/css' => public_path('vendor/sb-accordion/css'),
            ], 'sb-accordion-assets');

            $this->publishes([
                __DIR__ . '/../resources/js' => resource_path('js/vendor/sb-accordion'),
            ], 'sb-accordion-vue');
        }
    }
}
