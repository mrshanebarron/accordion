<script setup lang="ts">
import { ref, provide } from 'vue'

interface Props {
  multiple?: boolean
  defaultOpen?: string | null
}

const props = withDefaults(defineProps<Props>(), {
  multiple: false,
  defaultOpen: null,
})

const activeKeys = ref<Set<string>>(props.defaultOpen ? new Set([props.defaultOpen]) : new Set())

function toggle(key: string) {
  if (props.multiple) {
    if (activeKeys.value.has(key)) {
      activeKeys.value.delete(key)
    } else {
      activeKeys.value.add(key)
    }
  } else {
    activeKeys.value = activeKeys.value.has(key) ? new Set() : new Set([key])
  }
}

function isOpen(key: string) {
  return activeKeys.value.has(key)
}

provide('accordion', { toggle, isOpen })
</script>

<template>
  <div class="divide-y divide-gray-200 border border-gray-200 rounded-lg">
    <slot />
  </div>
</template>
