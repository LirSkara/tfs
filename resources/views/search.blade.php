@extends('layout.main')
@section('title')Главная страница@endsection
@section('content')
    <div class="container px-0 pt-lg-5">
        <div class="p-2">
            <input type="search" class="form-control" name="search" placeholder="Что будем искать?">
        </div>
        <div class="row row-cols-3 g-1 m-1">      
            @foreach($content as $item)
            <div class="col">
                <img src="/storage/{{$item->user}}/media/{{$item->media}}" class="img-lent-cabinet" alt="/storage/{{$item->user}}/media/{{$item->media}}">
            </div>
            @endforeach
        </div>
    </div>
@endsection