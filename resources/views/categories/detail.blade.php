@extends('layouts.basetemplate')
@section('title')Новости категории "{{ $category['title'] }} @stop
@section('head')
    <h1 class="fw-light">Новости категории "{{ $category['title'] }}"</h1>
    <p class="lead text-muted">{{ $category['description'] }}</p>
@endsection

@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@forelse($news as $item)
<div class="col">
    <div class="card shadow-sm">
      <div class="card-body">
        <a href="{{ route('NewsDetail', [ 'category' => $category['id'], 'id' => $item['id'] ]) }}"><h3>{{ $item['title'] }}</h3></a>
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><b>Дата:</b> {{ $item['date'] }}</small>
        </div>    
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><b>Автор:</b> {{ $item['description'] }}</small>
        </div>
        {{ $item['description'] }}
      </div>
    </div>
</div>
@empty
    <p>новостей заданной категории нет</p>
@endforelse
</div>
@endsection