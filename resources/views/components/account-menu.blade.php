<x-dropdown>
    <x-slot name="trigger">
        <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</button>
    </x-slot>

    <x-dropdown-item class="my-2" href="/admin/dashboard">Dashboard</x-dropdown-item>
    <x-dropdown-item class="my-2" href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Logout</x-dropdown-item>

    <form id="logout-form" method="POST" action="/logout" class="hidden">
        @csrf
    </form>
</x-dropdown>
