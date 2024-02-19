@extends('layouts.app')

@section('content')
<div class="blog-custom-content">
    <h2 class="blog-custom-content__h1">{{ $post->title }}</h2>
    <img class="blog-custom-content__img" src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
    <p class="blog-custom-content__p">{!! $post->body !!}</p>
    <div class="blog-custom-content__link-box">
        <a class="blog-custom-content__link-box__link page-link" href="{{ route('blog') }}">vissza</a>
    </div>
</div>
@endsection