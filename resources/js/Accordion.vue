<template>
  <div :class="containerClass">
    <slot></slot>
  </div>
</template>

<script>
import { ref, provide, computed } from 'vue';

export default {
  name: 'LdAccordion',
  props: {
    multiple: {
      type: Boolean,
      default: false
    },
    defaultOpen: {
      type: String,
      default: null
    },
    containerClass: {
      type: String,
      default: 'ld-accordion divide-y divide-gray-200 border border-gray-200 rounded-lg overflow-hidden'
    }
  },
  setup(props) {
    const activeItems = ref(props.defaultOpen ? [props.defaultOpen] : []);

    const toggle = (key) => {
      if (props.multiple) {
        const index = activeItems.value.indexOf(key);
        if (index > -1) {
          activeItems.value.splice(index, 1);
        } else {
          activeItems.value.push(key);
        }
      } else {
        activeItems.value = activeItems.value.includes(key) ? [] : [key];
      }
    };

    const isOpen = (key) => {
      return activeItems.value.includes(key);
    };

    provide('accordion', {
      toggle,
      isOpen,
      activeItems
    });

    return {
      activeItems,
      toggle,
      isOpen
    };
  }
};
</script>
