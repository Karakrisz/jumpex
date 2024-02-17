@extends('layouts.app')

@section('content')

<section>
    <div class="intro-content position-relative">
        <img class="intro-content__arrow-img position-absolute" src="/img/intro/intro-arrow.webp" alt="jumpex">
        <div class="intro-content__div">

            <div class="intro-content__text-box">
                <h1 class="intro-content__text-box__h1">{{ __('messages.welcome_h1') }}</h1>
                <p class="intro-content__text-box__p">{{ __('messages.welcome') }}</p>
                <div class="intro-content__text-box__link-box">
                    <a class="intro-content__text-box__link-box__link page-link" href="#">Tovább
                        <img class="intro-content__text-box__link-box__link__img" src="/img/intro/intro-arrow.svg"
                            alt="Jumpex"></a>
                </div>
            </div>

        </div>

        <div class="intro-content__div">

            <div class="intro-content__img-box">
                <img class="intro-content__img-box__img" src="/img/intro/intro.webp" alt="jumpex">
            </div>

        </div>

    </div>
</section>

<section id="about">
    <div class="about-content position-relative">

        <img class="about-content__img position-absolute" src="/img/about/about-bg.webp" alt="jumpex">

        <div class="about-header position-relative">

            <div class="about-header__cBox text-center">
                <img class="about-header__cBox__img" src="/img/about/km.svg" alt="Jumpex">
                <h2 class="about-header__cBox__h2">8 MILLIÓ</h2>
                <p class="about-header__cBox__p">megtett kilóméter</p>
            </div>

            <div class="about-header__cBox text-center">
                <img class="about-header__cBox__img" src="/img/about/client.svg" alt="Jumpex">
                <h2 class="about-header__cBox__h2">3670</h2>
                <p class="about-header__cBox__p">elégedett ügyfél</p>
            </div>

            <div class="about-header__cBox text-center">
                <img class="about-header__cBox__img" src="/img/about/floor.svg" alt="Jumpex">
                <h2 class="about-header__cBox__h2">512 EZER</h2>
                <p class="about-header__cBox__p">emelet</p>
            </div>

        </div>

        <div class="about-body position-relative">

            <div class="about-body__tBox">
                <h3 class="about-body__tBox__h3">{{ __('messages.about_h3') }}</h3>
                <p class="about-body__tBox__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut erat massa,
                    fringilla id gravida non, gravida in eros. Praesent hendrerit risus id justo lobortis, sed iaculis
                    orci congue. Cras facilisis sapien tempor tortor euismod, nec mattis nulla euismod. Vivamus non nunc
                    ut leo accumsan pulvinar. Nunc vitae scelerisque nibh, eget finibus neque. Vestibulum lacinia magna
                    a lorem vehicula consequat.</p>
                <div class="about-body__tBox__link-box">
                    <a class="about-body__tBox__link-box__link two-page-link" href="#">Tovább
                        <img class="about-body__tBox__link-box__link__img" src="/img/about/about-arrow.svg"
                            alt="Jumpex"></a></a>
                </div>
            </div>

            <div class="about-body__iBox">
                <img class="about-body__iBox__img float-right" src="/img/about/about.webp" alt="jumpex">
            </div>

        </div>

    </div>
</section>

<section class="splide position-relative" id="references">
    <div class="splide__up-box position-absolute"></div>
    <div class="splide__up-box__tBox text-center position-absolute">
        <h4 class="splide__up-box__tBox__h4">Referenciák</h4>
    </div>
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img class="splide__slide__img" src="/img/references/references2.webp" alt="jumpex">
            </li>
            <li class="splide__slide">
                <img class="splide__slide__img" src="/img/references/references.webp" alt="jumpex">
            </li>
            <li class="splide__slide">
                <img class="splide__slide__img" src="/img/references/references3.webp" alt="jumpex">
            </li>
            <li class="splide__slide">
                <img class="splide__slide__img" src="/img/references/references4.webp" alt="jumpex">
            </li>
            <li class="splide__slide">
                <img class="splide__slide__img" src="/img/references/references5.webp" alt="jumpex">
            </li>
        </ul>
    </div>
</section>


<section id="partners">
    <div class="partners-content">
        <h5 class="partners-content__h5 text-center">Partnereink</h5>
        <div class="partners-content__iBox">
            <img class="partners-content__iBox__img" src="/img/partners/hidral.svg" alt="jumpex">
            <img class="partners-content__iBox__img" src="/img/partners/kleemann.svg" alt="jumpex">
            <img class="partners-content__iBox__img" src="/img/partners/orona.svg" alt="jumpex">
            <img class="partners-content__iBox__img" src="/img/partners/otis.svg" alt="jumpex">
            <img class="partners-content__iBox__img" src="/img/partners/schindler.svg" alt="jumpex">
        </div>
        <div class="partners-content__link-box text-center">
            <a href="tel:+36303156192" class="partners-content__link-box__link two-page-link" href="#">Hívás most +36 30
                315
                6192</a>
        </div>
    </div>
</section>


@endsection