@extends('layouts.basetemplate')
@section('title'){{ $News['title'] }} @parent @stop
@section('head')
    <h1 class="fw-light">{{ $News['title'] }}</h1>
    <p class="lead text-muted">{{ $News['description'] }}</p>
    <p>Дата: {{ $News['date'] }}</p>
    <p>Автор: {{ $News['author'] }}</p>
@endsection

@section('content')
<div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 g-3">
    <p>{{ $News['text'] }}</p>
</div>
@endsection