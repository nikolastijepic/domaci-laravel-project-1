<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('pageTitle')</title>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col">
@include('navigation')

@yield('pageContent')

@include('footer')

</body>
</html>
