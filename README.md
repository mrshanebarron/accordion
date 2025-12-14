# Laravel Design Accordion

Collapsible accordion/disclosure component for Laravel. Supports Livewire, Blade, and Vue 3.

## Installation

```bash
composer require mrshanebarron/accordion
```

For Vue components:
```bash
npm install @laraveldesign/accordion
```

## Usage

### Livewire Component

```blade
<livewire:ld-accordion>
    <x-ld-accordion-item title="What is your refund policy?">
        We offer a 30-day money back guarantee on all purchases.
    </x-ld-accordion-item>

    <x-ld-accordion-item title="How do I contact support?">
        You can reach us at support@example.com or through our contact form.
    </x-ld-accordion-item>

    <x-ld-accordion-item title="Where are you located?">
        Our headquarters is in San Francisco, CA.
    </x-ld-accordion-item>
</livewire:ld-accordion>

{{-- Allow multiple items open --}}
<livewire:ld-accordion :multiple="true" default-open="faq-1">
    ...
</livewire:ld-accordion>
```

### Blade Component

```blade
<x-ld-accordion>
    <x-ld-accordion-item title="Section 1" :open="true">
        This section is open by default.
    </x-ld-accordion-item>

    <x-ld-accordion-item title="Section 2">
        Click to expand this section.
    </x-ld-accordion-item>

    <x-ld-accordion-item title="Section 3" key="custom-key">
        This item has a custom key.
    </x-ld-accordion-item>
</x-ld-accordion>

{{-- Icon on left side --}}
<x-ld-accordion icon-position="left">
    ...
</x-ld-accordion>
```

### Vue 3 Component

```vue
<script setup>
import { LdAccordion, LdAccordionItem } from '@laraveldesign/accordion'
</script>

<template>
  <LdAccordion :multiple="false">
    <LdAccordionItem title="Getting Started">
      <p>Welcome to our platform! Here's how to get started...</p>
    </LdAccordionItem>

    <LdAccordionItem title="Advanced Features">
      <p>Once you're familiar with the basics...</p>
    </LdAccordionItem>

    <LdAccordionItem title="API Documentation">
      <p>Our API allows you to...</p>
    </LdAccordionItem>
  </LdAccordion>
</template>
```

## Props

### Accordion Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `multiple` | boolean | `false` | Allow multiple items to be open simultaneously |
| `defaultOpen` | string | `null` | Key of item to open by default |
| `animation` | boolean | `true` | Enable expand/collapse animation |
| `iconPosition` | string | `'right'` | Position of expand icon: `left`, `right` |

### AccordionItem Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | string | required | Item header title |
| `key` | string | auto | Unique identifier (auto-generated from title if not provided) |
| `open` | boolean | `false` | Whether item is initially open |

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag=ld-accordion-config
```

## Customization

### Publishing Views

```bash
php artisan vendor:publish --tag=ld-accordion-views
```

### Custom Icons

Override the default chevron icon by publishing views and modifying the icon template.

## License

MIT
