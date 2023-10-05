<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- LINKS: -->
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- LINK FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body >
    <header class="">
        <img src="{{ asset('img/logo.png') }}" alt="logo" id="logo" class="h-14">
        <div class="head h-10">
                <ol>
                    <li><a href="" class="btnHeader">About</a></li>
                    <li><a href="" class="btnHeader">Work</a></li>
                    <li><a href="" class="btnHeader">Contact</a></li>
                </ol>
                <a href="#" id="btnCurriculo">Resume</a>
            </div>
    </header>

    <main class="grow h-full flex flex-col">
            <section class="flex flex-col flex  h-2/4 items-center gap-2">
                @yield('content')
            </section>
            @yield('OtherContent')
    </main>

    <footer class="h-20 flex justify-center items-center h-20">
        ####
    </footer>
</body>
</html>