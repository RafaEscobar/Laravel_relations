<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
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
    </body>
</html>
