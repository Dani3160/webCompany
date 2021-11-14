<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.parts.part-meta')
    <!-- CSS -->
    @include('layouts.parts.part-css')
    @yield('curpage')
</head>
<body>
    @include('layouts.parts.part-header')
        @yield('content')
    @include('layouts.parts.part-footer')
    @include('layouts.parts.part-js')
    @stack('scripts')
</body>
</html>