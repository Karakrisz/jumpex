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
                        <li class="menu__list__li">
                            <a class="menu__item"
                                href="{{ route('rolunk', ['lang' => app()->getLocale()]) }}">{{ trans('messages.rolunk') }}</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Referenciák</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Partnereink</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Ajánlatkérés</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Kapcsolat</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

        <div class="footer-content">

            <div class="footer-content__iBox">
                <img class="footer-content__iBox__img position-relative" src="/img/footer/footer-body.webp"
                    alt="jumpex">
            </div>

            <div class="footer-content__tBox">

                <h6 class="footer-content__tBox__h6">Kérjen árajánlatot</h6>

                <form class="footer-content__tBox__form d-flex" action="#" method="post">
                    <label class="footer-content__tBox__form__label" for="company">Cég név:</label>
                    <input class="footer-content__tBox__form__input" type="text" id="company" name="company" required>

                    <label class="footer-content__tBox__form__label" for="name">Név:</label>
                    <input class="footer-content__tBox__form__input" type="text" id="name" name="name" required>

                    <label class="footer-content__tBox__form__label" for="email">E-mail:</label>
                    <input class="footer-content__tBox__form__input" type="email" id="email" name="email" required>

                    <label class="footer-content__tBox__form__label" for="phone">Telefonszám:</label>
                    <input class="footer-content__tBox__form__input" type="tel" id="phone" name="phone" required>

                    <div class="footer-content__tBox__form__btn-box position-relative">
                        <button class="footer-content__tBox__form__btn-box__btn page-link" type="submit">
                            <span class="footer-content__tBox__form__btn-box__btn__span">Elküldés<img
                                    class="footer-content__tBox__form__btn-box__btn__span__img position-relative"
                                    src="/img/footer/mail-btn.svg" alt="jumpex">
                            </span>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div class="copyright-content position-relative">

            <img class="copyright-content__bg-img position-absolute" src="/img/footer/footer-bottom.webp" alt="jumpex">

            <div class="copyright-content__link-box position-absolute t-end">

                <p class="copyright-content__link-box__p">
                    <a class="copyright-content__link-box__p__link" href="#">
                        <img class="copyright-content__link-box__p__link__img position-relative"
                            src="/img/footer/map.svg" alt="jumpex">
                        1234, Példa utca 13.
                    </a>
                </p>

                <p class="copyright-content__link-box__p">
                    <a class="copyright-content__link-box__p__link" href="tel:+36303156192">
                        <img class="copyright-content__link-box__p__link__img position-relative"
                            src="/img/footer/mobile.svg" alt="jumpex">
                        +36 30 315 6192
                    </a>
                </p>

                <p class="copyright-content__link-box__p">
                    <a class="copyright-content__link-box__p__link" href="mailto:info@jumpex.hu">
                        <img class="copyright-content__link-box__p__link__img position-relative"
                            src="/img/footer/mail.svg" alt="jumpex">
                        info@jumpex.hu
                    </a>
                </p>

                <div class="copyright-logo-box">
                    <a class="copyright-logo-box__link text-transform-uppercase" href="/">jumpex kft</a>
                </div>

                <div class="copyright-menu-link-box d-flex">
                    <a class="copyright-menu-link-box__link" href="#">Rólunk</a>
                    <a class="copyright-menu-link-box__link" href="#">Referenciák</a>
                    <a class="copyright-menu-link-box__link" href="#">Partnereink</a>
                    <a class="copyright-menu-link-box__link" href="#">Ajánlatkérés</a>
                    <a class="copyright-menu-link-box__link copyright-menu-link-box__link--margin-0"
                        href="#">Kapcsolat</a>
                </div>

            </div>



        </div>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
        <script src="/js/app.js"></script>
    </footer>
</body>

</html>