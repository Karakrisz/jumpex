<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self' https: data:;
        img-src 'self' https: http: data:;
        font-src 'self' https: data:;
        style-src 'self' https: 'unsafe-inline';
        script-src 'self' https: 'unsafe-inline' 'unsafe-eval';
    ">
    <title>@yield('title', 'Jumpex Kft')</title>
    <!-- Fonts -->

    <!-- favicons Icons -->
    <link rel="icon" href="/img/header/logo.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/header/logo.png">
    <!-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> -->
    <meta name="description" content="Jumpex Kft" />
    <!-- SEO -->
    <meta property="og:title" content="Jumpex Kft" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="Jumpex Kft" />
    <meta property="og:description" content="" />

    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Hungary" />
    <meta name="DC.description" content="" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.publisher" content="Jumpex Kft" />
    <meta name="DC.title" content="" />
    <!-- App css -->
    <link rel="stylesheet" href="/css/app.css">


</head>

<body class="antialiased">
    <header>
        <div class="header__right-box d-flex">
            <div class="header__right-box__div">
                <a class="header__right-box__div__link" target="_blank"
                    href="https://www.google.com/maps/place/Hal%C3%A1sztelek,+II.+R%C3%A1k%C3%B3czi+Ferenc+%C3%BAt+58,+2314/@47.3606318,18.9849686,17z/data=!3m1!4b1!4m6!3m5!1s0x4741e5d31bee69f3:0xbc33a92d2f9d9f01!8m2!3d47.3606282!4d18.9875435!16s%2Fg%2F11c249tqpd?authuser=0&entry=ttu">
                    <img class="header__right-box__div__link__img position-relative" src="/img/header/map-icon.svg"
                        alt="gazdaesbadogos">
                    2314
                    Halásztelek ,
                    II. Rákóczi
                    Ferenc út 58/A</a>
            </div>

            <div class="header__right-box__div">
                <a class="header__right-box__div__link" href="tel:+3624450402">
                    <img class="header__right-box__div__link__img position-relative" src="/img/header/phone-icon.svg"
                        alt="gazdaesbadogos">
                    +36 24 450402</a>
            </div>
        </div>
        <nav class="navbar d-flex">
            <div class="hamburger position-relative" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="navbar-logo-box">
                <a href="/">
                    <img class="navbar-logo-box__img" src="/img/header/logo.jpg" alt="gazdaesbadogos">
                </a>
            </div>
            <ul class="menu d-flex" id="menu">
                <li><a href="/">Főoldal</a></li>
                <li><a href="#">Rólunk</a></li>
                <li><a href="#">Galéria</a></li>
                <!-- <li><a href="#">Termékeink</a></li> -->
                <li><a href="#">Blog</a></li>
                <li><a href="#">Kapcsolat</a></li>
                <li><a class="menu__elem__link--font-w" href="#">AKCIÓK</a></li>
                <li class="menu__elem--pr-0"><a target="_blank"
                        href="https://www.facebook.com/profile.php?id=100089961498471"><img class="menu__link__img"
                            src="/img/header/facebook-icon.svg" alt="gazdaesbadogos"></a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <script src="/js/app.js"></script>
    </footer>
</body>

</html>