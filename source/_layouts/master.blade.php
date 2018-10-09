<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
</head>
<body>
    <header class="bg-blue">
        A. Koepcke
    </header>
    <main class="container mx-auto">
        @yield('content')
    </main>
    <footer class="text-center">
        &copy;A. Koepcke 2018
    </footer>
</body>
</html>
