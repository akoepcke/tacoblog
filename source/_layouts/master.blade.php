<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
</head>
<body class="bg-blue-darkest bg-hero-circuit-board">
        <div class="container md:max-w-md mx-auto">
            <header class="">
                <div class="text-blue-lightest text-xl mt-10 mb-2">
                    Anne Köpcke
                </div>
            </header>
            <main class="">
                @yield('content')
            </main>
            <footer class="p-2 text-center text-xs text-grey-darker">
                &copy;A. Koepcke 2018
            </footer>
        </div>
    </div>
</body>
</html>
