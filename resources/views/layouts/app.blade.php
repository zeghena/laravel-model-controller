<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('NAME_APP', 'Laravel Project')}} - @yield('title', 'My page') </title>

    @vite('resources/js/app.js')

    @yield('css')
</head>
<body>

    @include('partials.header')
    @yield('main-content')
    @include('partials.footer')
    @yield('js')
</body>
</html>
