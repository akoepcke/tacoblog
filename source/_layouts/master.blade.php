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
            <header class="flex items-baseline justify-between p-2 md:mt-10">
                <div class="text-blue-lightest text-xl">
                    Anne Köpcke
                </div>
                <div class="bg-blue-darkest rounded-full inline-flex p-2 justify-center">
                    <div class="p-2">
                        <a href="https://github.com/akoepcke"><i class="fab fa-2x fa-github text-white"></i></a>
                    </div>
                    <div class="p-2">
                        <a href="https://bitbucket.org/akoepcke/"><i class="fab fa-2x fa-bitbucket text-white"></i></a>
                    </div>
                </div>
            </header>

            <main class="">
                @yield('content')
            </main>
            <footer class="p-2 text-center text-xs text-grey">
                &copy;A. Koepcke 2018
            </footer>
        </div>
    </div>
</body>
</html>
