<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
</head>
<body class="bg-blue-lightest">
    <header class="h-48 flex-none bg-cover" style="background-image: url('images/bg-blue.jpg')">

    </header>
    <main class="-mt-6">
        @yield('content')
    </main>
    <footer class="p-2 text-center text-xs text-grey-darkest">
        &copy;A. Koepcke 2018
    </footer>
</body>
</html>
