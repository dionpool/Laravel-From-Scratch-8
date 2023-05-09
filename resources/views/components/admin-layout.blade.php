<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>World of Warcraft</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-account-menu />
                @else
                    <a href="/register" class="text-xs font-bold uppercase">Register</a>
                    <a href="/login" class="text-xs font-bold uppercase ml-3">Log In</a>
                @endauth
            </div>
        </nav>

        {{ $slot }}
    </section>

    <x-flash />
</body>
</html>
