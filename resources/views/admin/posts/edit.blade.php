<x-admin-layout>
    <x-setting :heading="'Edit post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" required />
            <x-form.input name="slug" :value="old('slug', $post->slug)" required />
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img class="ml-6 rounded-lg" src="{{ asset('storage/' . $post->thumbnail) }}" alt="" width="100">
            </div>
            <x-form.textarea name="excerpt" rows="4">{{  old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body" rows="10">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.section>
                <x-form.label name="category" />

                <select name="category_id"
                        id="category_id"
                        class="border border-gray-200 p-2 w-full bg-gray-50 rounded">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.section>

            <x-form.section>
                <x-form.button>Update</x-form.button>
            </x-form.section>
        </form>
    </x-setting>
</x-admin-layout>
