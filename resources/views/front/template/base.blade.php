<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('pageTitle')</title>
</head>
<body>
    <header class="container">
        @include('front.partials.header')
    </header>
    <main class="container">
        @yield('mainContent')
    </main>
    <footer class="container">
        @include('front.partials.footer')
    </footer>
</body>
</html>