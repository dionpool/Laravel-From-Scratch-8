@props(['heading'])

<section class="py-8">
    <div class="flex">
        <aside class="w-52 flex-shrink-0 bg-gray-100 p-4 rounded-lg border border-gray-200">
            <h4 class="font-semibold mb-4">Navigation</h4>
            <ul class="space-y-2">
                <li>
                    <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : 'hover:text-blue-500' }}">Dashboard</a>
                </li>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : 'hover:text-blue-500' }}">Manage Posts</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : 'hover:text-blue-500' }}">New Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1 ml-6">
            <x-panel class="bg-gray-100">
                <h1 class="text-lg font-bold mb-4">
                    {{ $heading }}
                </h1>

                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
