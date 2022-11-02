<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/user/posts">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.textarea name="body" />

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-submit-button>Publish</x-submit-button>
            </div>
        </form>
    </x-setting>


</x-layout>
