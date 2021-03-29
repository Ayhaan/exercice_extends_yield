<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @include('partials.header')

    <section class="container">
        @yield('content')
    </section>

    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>