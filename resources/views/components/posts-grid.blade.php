@props(['posts'])

@if ($posts->count() >1)

    <div>
        @foreach ($posts as $post)
            <x-post-card :post="$post" class="{{ $loop->iteration< 3 ? 'col-span-3' : 'col-span-2'}}"/>
        @endforeach
    </div>
@endif
