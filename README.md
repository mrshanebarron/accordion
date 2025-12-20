# Accordion

Expandable content sections with smooth animations for Laravel applications. Supports single or multiple open panels, default open state, and custom styling. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/accordion
```

## Livewire Usage

### Basic Usage

```blade
@php
$items = [
    'item1' => [
        'title' => 'What is this package?',
        'content' => 'A beautiful accordion component for Laravel applications.',
    ],
    'item2' => [
        'title' => 'Is it free to use?',
        'content' => 'Yes! All components are free and open source under the MIT license.',
    ],
    'item3' => [
        'title' => 'Does it support Livewire?',
        'content' => 'Absolutely! Works with Livewire and Vue.js.',
    ],
];
@endphp

<livewire:sb-accordion :items="$items" />
```

### Default Open

```blade
<livewire:sb-accordion :items="$items" default-open="item1" />
```

### Multiple Open Panels

```blade
<livewire:sb-accordion :items="$items" :multiple="true" />
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | array | `[]` | Array of accordion items with `title` and `content` keys |
| `multiple` | boolean | `false` | Allow multiple panels open simultaneously |
| `defaultOpen` | string | `null` | Key of item to open by default |

### Item Structure

```php
$items = [
    'unique_key' => [
        'title' => 'Panel Title',
        'content' => 'Panel content text or HTML',
    ],
];
```

## Vue 3 Usage

### Setup

```javascript
import { SbAccordion, SbAccordionItem } from './vendor/sb-accordion';
app.component('SbAccordion', SbAccordion);
app.component('SbAccordionItem', SbAccordionItem);
```

### Basic Usage

```vue
<template>
  <SbAccordion>
    <SbAccordionItem title="First Panel">
      Content for the first panel.
    </SbAccordionItem>
    <SbAccordionItem title="Second Panel">
      Content for the second panel.
    </SbAccordionItem>
  </SbAccordion>
</template>
```

### With Default Open

```vue
<template>
  <SbAccordion default-open="panel1">
    <SbAccordionItem id="panel1" title="Open by Default">
      This panel is open by default.
    </SbAccordionItem>
    <SbAccordionItem id="panel2" title="Closed">
      This panel starts closed.
    </SbAccordionItem>
  </SbAccordion>
</template>
```

### Multiple Open

```vue
<template>
  <SbAccordion :multiple="true">
    <SbAccordionItem title="Panel One">Content One</SbAccordionItem>
    <SbAccordionItem title="Panel Two">Content Two</SbAccordionItem>
  </SbAccordion>
</template>
```

### Vue Props

#### SbAccordion

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `multiple` | Boolean | `false` | Allow multiple panels open |
| `defaultOpen` | String | `null` | ID of default open panel |

#### SbAccordionItem

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | String | auto | Unique identifier |
| `title` | String | required | Panel header text |
| `disabled` | Boolean | `false` | Disable panel toggle |

## Events

### Livewire

```blade
<livewire:sb-accordion
    :items="$items"
    @accordion-toggled="handleToggle"
/>
```

### Vue

```vue
<SbAccordion @panel-toggled="handleToggle">
```

## Styling

The accordion uses Tailwind CSS classes with:
- Smooth expand/collapse animations via Alpine.js x-collapse
- Rounded corners and subtle shadows
- Hover states on headers
- Chevron icon rotation on open

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Tailwind CSS 3.x
- Alpine.js (for animations)

## License

MIT License
