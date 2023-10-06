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
<body>

    <div class="circles">
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
        <div class="circlesItem"></div>
    </div>

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

        <footer class="h-20 flex justify-center items-center h-20 gap-4">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" class="h-[29px] w-[29] iconFooter" />
             <span id="mdWith"> - Made With - </span>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="h-[29px] w-[29px] iconFooter"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#cd2323}</style><path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"/></svg>        </footer>
    
</body>
</html>