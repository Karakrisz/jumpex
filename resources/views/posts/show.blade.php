@extends('layouts.app')

@section('content')

<div class="blog-custom-content">
    <h2 class="blog-custom-content__h1">{{ $post->title }}</h2>
    <img class="blog-custom-content__img" src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
    <p class="blog-custom-content__p">{!! $post->body !!}</p>

    @if ($currentLanguage == 'hu')
    <div class="blog-custom-content__link-box">
        <a class="blog-custom-content__link-box__link two-page-link" href="/hu">Kezdőlap</a>
    </div>
    @elseif ($currentLanguage == 'en')
    <div class="blog-custom-content__link-box">
        <a class="blog-custom-content__link-box__link two-page-link" href="/en">Home page</a>
    </div>
    @elseif ($currentLanguage == 'de')
    <div class="blog-custom-content__link-box">
        <a class="blog-custom-content__link-box__link two-page-link" href="/de">Startpagina</a>
    </div>
    @endif


</div>
@endsection