{{-- {{ dd($post) }} --}}
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subtitle>{{ $subtitle }}</x-slot:subtitle>
    <x-slot:name>{{ $name }}</x-slot:name>

    <article class="py-8 max-w-screen-md border-b border-gray-900">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500"><a href="">{{ $post['author'] }}</a>tanggal</div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
    </article>
</x-layout>