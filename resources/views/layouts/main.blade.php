<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Baherindo Motor')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-black font-[poppins] flex flex-col gap-10 justify-between min-h-screen">
    
    @include('layouts.navbar')

    <div class="px-25 py-40 space-y-15">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
</html>