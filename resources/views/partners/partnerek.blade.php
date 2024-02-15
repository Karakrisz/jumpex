@extends('layouts.app')

@section('title', $title)

@section('content')

<section>
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