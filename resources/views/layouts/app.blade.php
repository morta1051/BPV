<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container mx-auto p-4">
        @yield('content')
    </main>
</body>
</html>