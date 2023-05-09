@props(['name', 'class'])

<x-form.section>
    <x-form.label name="{{ $name }}" />

    <textarea name="{{ $name }}"
              id="{{ $name }}"
              class="{{ $class ?? 'border border-gray-200 p-2 w-full rounded' }}"
              {{ $attributes }}
              required>{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.section>
