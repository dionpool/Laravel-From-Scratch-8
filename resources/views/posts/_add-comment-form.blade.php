@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40?u{{ auth()->id() }}"
                     alt=""
                     width="40"
                     height="40"
                     class="rounded-full mr-4">

                <h2>Want to participate?</h2>
            </header>

            <div class="my-5 comment-form">
                <x-form.textarea name="body"
                                 class="w-full text-sm focus:outline-none focus:ring"
                                 placeholder="Quick, think of something to say..."
                                 rows="5" />
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="text-blue-500 font-semibold hover:text-blue-400">Register</a> or
        <a href="/login" class="text-blue-500 font-semibold hover:text-blue-400">log in</a>
        to leave a comment
    </p>
@endauth
