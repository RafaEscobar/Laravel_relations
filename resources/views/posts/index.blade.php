<x-layout title="Posts">
    <div class="mt-4 mr-4 flex justify-end">
        <a href="{{route('comments.index')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 hover:bg-blue-400">Vista de comentarios -></a>
    </div>
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