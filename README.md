# Laravel Accordion Component

Collapsible accordion component for Laravel - supports both Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/accordion
```

For Vue support:
```bash
npm install @mrshanebarron/accordion
```

## Usage

### Livewire

```blade
<livewire:ld-accordion :multiple="false" default-open="item-1">
    <livewire:ld-accordion-item key="item-1" title="First Section">
        Content for the first section goes here.
    </livewire:ld-accordion-item>

    <livewire:ld-accordion-item key="item-2" title="Second Section">
        Content for the second section goes here.
    </livewire:ld-accordion-item>
</livewire:ld-accordion>
```

### Vue 3

Register globally in your app:

```js
import { createApp } from 'vue';
import LdAccordion from '@mrshanebarron/accordion';

const app = createApp({});
app.use(LdAccordion);
app.mount('#app');
```

Or import components individually:

```js
import { Accordion, AccordionItem } from '@mrshanebarron/accordion';
```

Use in templates:

```vue
<template>
  <LdAccordion :multiple="false" default-open="item-1">
    <LdAccordionItem item-key="item-1" title="First Section">
      Content for the first section goes here.
    </LdAccordionItem>

    <LdAccordionItem item-key="item-2" title="Second Section">
      Content for the second section goes here.
    </LdAccordionItem>
  </LdAccordion>
</template>
```

## Props

### Accordion

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `multiple` | Boolean | `false` | Allow multiple items open at once |
| `defaultOpen` | String | `null` | Key of item to open by default |

### AccordionItem

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `key` (Livewire) / `itemKey` (Vue) | String | required | Unique identifier for the item |
| `title` | String | `''` | Title displayed in the trigger button |

## Customization

Publish the config file:

```bash
php artisan vendor:publish --tag=ld-accordion-config
```

Publish the CSS:

```bash
php artisan vendor:publish --tag=ld-accordion-assets
```

## License

MIT
