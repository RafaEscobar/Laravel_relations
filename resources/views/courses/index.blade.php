<x-layout title="Cursos">
    <div class="mt-4 ml-4">
        <a href="{{route('students.index')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 hover:bg-blue-400"><- Vista de estudiantes</a>
    </div>
    <div class="flex flex-col justify-center items-center w-full h-screen">
        @foreach ($courses as $course)
            <div class="text-red-500 text-xl">
                <span class="block text-2xl font-bold text-blue-500">{{$course->name}}</span>
            </div>
        @endforeach
    </div>
</x-layout>