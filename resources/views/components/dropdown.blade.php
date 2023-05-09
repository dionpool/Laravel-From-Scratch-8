@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="py-1 absolute bg-gray-100 border border-gray-200 w-full rounded-xl mt-2 z-50 overflow-auto max-h-52" style="display: none;">
        {{ $slot }}
    </div>
</div>
