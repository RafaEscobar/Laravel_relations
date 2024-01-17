<x-layout title="Relación 1:1">
    <div class="mt-4 mr-4 flex justify-end">
        <a href="{{route('profiles.index')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 hover:bg-blue-400">Vista de perfiles -></a>
    </div>
    <div class="flex flex-col gap-2 justify-center items-center w-full h-screen">
        @foreach ($users as $user)
            <div>
                <span class="font-semibold text-2xl">{{$user->name}}</span>
                @isset($user->profile)
                    <span class="text-gray-700 ml-2">({{$user->profile->description}})</span>
                @endisset
            </div>
        @endforeach
    </div>
</x-layout>