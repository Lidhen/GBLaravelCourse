@extends('layouts.basetemplate')
@section('title')Список категорий @parent @stop
@section('head')
    <h1 class="fw-light">Список категорий</h1>
    <p class="lead text-muted">Список всех категорий на новостом портале</p>
@endsection
@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@forelse($categories as $item)
    <div class="col">
      <div class="card shadow-sm">
        <div class="card-body">
          <p class="card-text">{{ $item['title'] }}</p>
          {{ $item['description'] }}
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Количество новостей <a href="{{ route('CategoryPath', ['id' => $item['id']]) }}">{{ count($item['news']) }}</a></small>
          </div>
        </div>
      </div>
    </div>
@empty
    <p>Категорий нет</p>
@endforelse
</div>
@endsection