<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:name>{{ $name }}</x-slot:name>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-900">
            <a href="/post/detail/{{ $post['id'] }}"><h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2></a>
            <div class="text-base text-gray-500"><a href="">{{ $post['author'] }}</a>tanggal</div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 50) }}</p>
            <a href="/post/detail/{{ $id }}" class="font-medium text-blue-500 hover:underline">read more &raquo;</a>
        </article>
    @endforeach
</x-layout>