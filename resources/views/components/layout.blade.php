<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <body>
        <div class="w-full bg-slate-200 flex">
            <div class="p-4 cursor-pointer">
                <span class="bg-slate-100 p-2 rounded-lg hover:bg-white">
                    <a href="">Relación 1:1</a>
                </span>
            </div>
            <div class="p-4 cursor-pointer">
                <span class="bg-slate-100 p-2 rounded-lg hover:bg-white">
                    <a href="">Relación N:1</a>
                </span>
            </div>
            <div class="p-4 cursor-pointer">
                <span class="bg-slate-100 p-2 rounded-lg hover:bg-white">
                    <a href="">Relación N:N</a>
                </span>
            </div>
        </div>
        <div class="">
            {{$slot}}
        </div>
    </body>
</body>
</html>