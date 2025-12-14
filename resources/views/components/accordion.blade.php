<div
    x-data="{
        active: {{ $defaultOpen ? \"'$defaultOpen'\" : 'null' }},
        multiple: {{ $multiple ? 'true' : 'false' }},
        toggle(key) {
            if (this.multiple) {
                this.active = this.active === key ? null : key;
            } else {
                this.active = this.active === key ? null : key;
            }
        },
        isOpen(key) {
            return this.active === key;
        }
    }"
    class="divide-y divide-gray-200 border border-gray-200 rounded-lg"
>
    {{ $slot }}
</div>
