<script setup lang="ts">
import { inject, computed } from 'vue'

interface Props {
  title: string
  itemKey: string
}

const props = defineProps<Props>()

const accordion = inject<{ toggle: (key: string) => void; isOpen: (key: string) => boolean }>('accordion')

const open = computed(() => accordion?.isOpen(props.itemKey) ?? false)

function toggle() {
  accordion?.toggle(props.itemKey)
}
</script>

<template>
  <div>
    <button
      @click="toggle"
      class="flex items-center justify-between w-full px-4 py-4 text-left text-gray-900 hover:bg-gray-50"
      :aria-expanded="open"
    >
      <span class="font-medium">{{ title }}</span>
      <svg
        class="w-5 h-5 text-gray-500 transition-transform duration-200"
        :class="{ 'rotate-180': open }"
        fill="none" viewBox="0 0 24 24" stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <Transition
      enter-active-class="transition-all duration-200 ease-out"
      enter-from-class="opacity-0 max-h-0"
      enter-to-class="opacity-100 max-h-96"
      leave-active-class="transition-all duration-200 ease-in"
      leave-from-class="opacity-100 max-h-96"
      leave-to-class="opacity-0 max-h-0"
    >
      <div v-show="open" class="px-4 pb-4 text-gray-600 overflow-hidden">
        <slot />
      </div>
    </Transition>
  </div>
</template>
