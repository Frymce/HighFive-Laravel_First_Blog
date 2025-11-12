@extends('layouts.master')

@section('title')
    Editer l'article {{$article->title}}
@endsection

@section('content')
    <form action="{{url('article/'.$article->id.'/edit')}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('patch')
        @include('partials.article-form')
    </form>
@endsection

