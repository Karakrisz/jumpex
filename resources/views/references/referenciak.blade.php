@extends('layouts.app')

@section('title', $title)

@section('content')

<section class="splide position-relative">
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

@endsection