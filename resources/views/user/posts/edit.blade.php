<x-layout>
    <x-setting :heading="'Edit Post ' . $post->title">
        <form method="POST" action="/user/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)"/>
            <x-form.textarea name="body" >{{ old('body', $post->body) }}</x-form.textarea>


            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-submit-button>Update</x-submit-button>
            </div>
        </form>
    </x-setting>


</x-layout>
