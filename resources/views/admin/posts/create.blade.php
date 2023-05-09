<x-admin-layout>
    <x-setting heading="Publish new post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" required />
            <x-form.input name="slug" required />
            <x-form.input name="thumbnail" type="file" required />
            <x-form.textarea name="excerpt" rows="4" />
            <x-form.textarea name="body" rows="10" />

            <x-form.section>
                <x-form.label name="category" />

                <select name="category_id"
                        id="category_id"
                        class="border border-gray-200 p-2 w-full bg-gray-50 rounded">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.section>

            <x-form.section>
                <x-form.button>Publish</x-form.button>
            </x-form.section>
        </form>
    </x-setting>
</x-admin-layout>
