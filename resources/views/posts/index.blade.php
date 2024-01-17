<x-layout title="Posts">
    <div class="flex flex-col justify-center items-center w-full h-screen">
        @foreach ($posts as $post)
            <div class="border-2 border-blue-200 mb-4 p-4 rounded-xl">
                <span class="block text-2xl font-bold text-blue-500">{{$post->title}}</span>
                @foreach ($post->comments as $comment)
                    <span class="block text-red-500 text-xs">{{$comment->comment}}</span>
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>