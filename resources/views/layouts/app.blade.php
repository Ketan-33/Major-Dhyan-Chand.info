<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Major Dhyan Chand</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>
    <div class="width-full h-full">
        @include('layouts.header')
        <main class="w-full">
            @yield('appContents')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
