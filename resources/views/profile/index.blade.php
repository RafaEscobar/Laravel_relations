<x-layout title="Perfiles">
    <div class="mt-4 ml-4">
        <a href="{{route('users.index')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 hover:bg-blue-400"><- Vista de usuarios</a>
    </div>
    <div class="flex flex-col justify-center items-center w-full h-screen">
        @foreach ($profiles as $profile)
            <div class="border-2 border-blue-200 mb-4 p-4 rounded-xl">
                <span class="block text-2xl font-bold text-blue-500">{{$profile->description}}</span>
            </div>
        @endforeach
    </div>
</x-layout>