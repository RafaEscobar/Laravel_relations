<x-layout title="Posts">
    <div class="flex flex-col justify-center items-center w-full h-screen">
        @foreach ($posts as $post)
            <span class="text-2xl font-bold text-blue-500">{{$post->title}}</span>
        @endforeach
    </div>
</x-layout>