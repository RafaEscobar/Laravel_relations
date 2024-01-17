<x-layout title="Estudiantes">
    <div class="mt-4 ml-4">
        <a href="{{route('courses.index')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 hover:bg-blue-400">Vista de cursos -></a>
    </div>
    <div class="flex flex-col justify-center items-center w-full h-screen">
        @foreach ($students as $student)
            <div class="text-red-500 text-xl">
                <span class="block text-2xl font-bold text-blue-500">{{$student->name}}</span>
            </div>
        @endforeach
    </div>
</x-layout>