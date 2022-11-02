<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10  space-y-6">
            <article class="max-w-4xl mx-auto ">
                <div class="col-span-8">
                    <h1 class="font-bold text-3xl mb-10">
                        {{ $post->title }}
                    </h1>

                    <div class="col-span-4 mb-10">
                        <div class="flex items-center text-sm mt-4">
                            <h5 class="font-bold">
                                <a href="/?authors={{$post->author->username}}">{{ $post->author->name }}</a>
                            </h5>
                        </div>
                        <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </p>
                    </div>

                    <div class="space-y-4  leading-loose">
                        {{ $post->body }}
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>

                    </div>
                </div>
            </article>
        </main>
    </section>
</x-layout>
