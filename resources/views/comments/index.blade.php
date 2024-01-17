<x-layout title="Comentarios">
    <div class="mt-4 ml-4">
        <a href="{{route('posts.index')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 hover:bg-blue-400"><- Vista de posts</a>
    </div>
    <div class="flex flex-col justify-center items-center w-full h-screen">
        @foreach ($comments as $comment)
            <div class="text-red-500 text-xl">
                <span class="block text-2xl font-bold text-blue-500">{{$comment->comment}}</span>
                <span class="block text-xs text-gray-700">-> {{$comment->post->title}}</span>
            </div>
        @endforeach
    </div>
</x-layout>