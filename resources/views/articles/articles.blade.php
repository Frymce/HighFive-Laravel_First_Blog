@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')

    <h1>Articles</h1>
    @if($articles)
        @foreach($articles as $article)
                {{-- <p>Auteur : <strong>{{ $article['user']['name'] }}</strong></p>

                <a href="/article/{{ $article['user']['id'] }}">>++</a>

            <p style="text-decoration: underline;">{{ $article['title'] }}</p>
            <p>{{ $article['body'] }}</p> --}}
            @include('partials.article')
        @endforeach
    @else
        {{-- <p style="color: red;">Pas d'articles disponibles</p> --}}
        @include('articles.no-articles')
    @endif

@endsection
