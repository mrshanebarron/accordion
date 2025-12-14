<template>
  <div class="sb-accordion-item">
    <button
      @click="toggle"
      :class="triggerClass"
      :aria-expanded="isOpen"
    >
      <span class="font-medium">
        <slot name="title">{{ title }}</slot>
      </span>
      <svg
        class="w-5 h-5 text-gray-500 transition-transform duration-200"
        :class="{ 'rotate-180': isOpen }"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>

    <div
      v-show="isOpen"
      :class="contentClass"
    >
      <slot></slot>
    </div>
  </div>
</template>

<script>
import { inject, computed } from 'vue';

export default {
  name: 'SbAccordionItem',
  props: {
    itemKey: {
      type: String,
      required: true
    },
    title: {
      type: String,
      default: ''
    },
    triggerClass: {
      type: String,
      default: 'flex items-center justify-between w-full px-4 py-4 text-left text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 transition-colors'
    },
    contentClass: {
      type: String,
      default: 'px-4 pb-4 text-gray-600'
    }
  },
  setup(props) {
    const accordion = inject('accordion');

    const isOpen = computed(() => {
      return accordion.isOpen(props.itemKey);
    });

    const toggle = () => {
      accordion.toggle(props.itemKey);
    };

    return {
      isOpen,
      toggle
    };
  }
};
</script>
