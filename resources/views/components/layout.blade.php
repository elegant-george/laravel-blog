<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Blog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="/images/blog-logo.png" alt="Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button href="/register" class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>
                        </x-slot>

                        <x-dropdown-item href="/user/posts"
                            :active="request()->is('user/posts')">My Posts</x-dropdown-item>
                        <x-dropdown-item href="/user/posts/create"
                            :active="request()->is('user/posts/create')">New Post</x-dropdown-item>

                        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>


                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>

                @else
                    <a href="/register" class="text-xs font-bold uppercase">Register</a>
                    <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
                @endauth
            </div>
        </nav>

        {{ $slot }}
    </section>
    <x-flash/>
</body>
