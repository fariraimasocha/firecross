<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firecross</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
<x-topnav></x-topnav>

<main class="flex-grow">
    @yield('content')
</main>

<x-footer></x-footer>
</body>
</html>
