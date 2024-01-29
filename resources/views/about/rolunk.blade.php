@extends('layouts.app')

@section('title', $title)

@section('content')

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

@endsection