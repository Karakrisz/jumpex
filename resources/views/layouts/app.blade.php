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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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

    <!-- Slide css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <!-- App css -->
    <link rel="stylesheet" href="/css/app.css">


</head>

<body class="antialiased">

    <header class="header">
        <div class="header-content d-flex">
            <div class="logo-box  header-content__logo-box">
                <a href="/" class="header-content__logo-box__link text-transform-uppercase">Jumpex kft</a>
            </div>
            <div class="nav-box header-content__nav-box">
                <div class="hamburger position-relative" id="hamburger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <nav class="menu">
                    <ul class="menu__list d-flex" id="menu__list">
                        <li class="menu__item">Rólunk</li>
                        <li class="menu__item">Referenciák</li>
                        <li class="menu__item">Partnereink</li>
                        <li class="menu__item">Ajánlatkérés</li>
                        <li class="menu__item">Kapcsolat</li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
        <script src="/js/app.js"></script>
    </footer>
</body>

</html>