<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel class="bg-gray-100">
                <h1 class="text-center font-bold text-xl">Register</h1>
                <form class="mt-10" method="post" action="/register">
                    @csrf

                    <x-form.input name="name" required />
                    <x-form.input name="username" required />
                    <x-form.input name="email" type="email" required />
                    <x-form.input name="password" type="password" required />

                    <x-form.section>
                        <x-form.button>Register</x-form.button>
                    </x-form.section>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
