@extends('layouts.app')

@section('content')

<section>
    <div class="intro-content position-relative">
        <img class="intro-content__arrow-img position-absolute" src="/img/intro/intro-arrow.webp" alt="jumpex">
        <div class="intro-content__div">

            <div class="intro-content__text-box">
                <h1 class="intro-content__text-box__h1">MEGFELELÜNK A MAGAS ELVÁRÁSOKNAK</h1>
                <p class="intro-content__text-box__p">Mi vagyunk a Jumpex Kft, ahol a felvonórendszerek a legmagasabb
                    minőségben kelnek életre. Alapvető elkötelezettségünk, hogy olyan alkatrészekből készítsük
                    termékeinket, melyek hosszú éveken át biztosítják a biztonságos és zavartalan emelkedést.</p>
                <div class="intro-content__text-box__link-box">
                    <a class="intro-content__text-box__link-box__link page-link" href="#">Tovább</a>
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

<section>
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
                <h3 class="about-body__tBox__h3">Rólunk</h3>
                <p class="about-body__tBox__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut erat massa,
                    fringilla id gravida non, gravida in eros. Praesent hendrerit risus id justo lobortis, sed iaculis
                    orci congue. Cras facilisis sapien tempor tortor euismod, nec mattis nulla euismod. Vivamus non nunc
                    ut leo accumsan pulvinar. Nunc vitae scelerisque nibh, eget finibus neque. Vestibulum lacinia magna
                    a lorem vehicula consequat.</p>
                <div class="about-body__tBox__link-box">
                    <a class="about-body__tBox__link-box__link page-link" href="#">Tovább</a>
                </div>
            </div>

            <div class="about-body__iBox">
                <img class="about-body__iBox__img float-right" src="/img/about/about.webp" alt="jumpex">
            </div>

        </div>

    </div>
</section>

@endsection