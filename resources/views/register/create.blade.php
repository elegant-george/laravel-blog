<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>
                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="name" type="name" autocomplete="name" />
                    <x-form.input name="email" type="email" autocomplete="username" />
                    <x-form.input name="password" type="password" autocomplete="new-password" />

                    <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                        <x-submit-button>Register</x-submit-button>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
