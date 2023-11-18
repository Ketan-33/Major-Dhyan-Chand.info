<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Major Dhyan Chand</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>
    <div class="width-full h-full">
        @include('layouts.header')
        <main class="w-full h-200">
            @yield('appContents')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
