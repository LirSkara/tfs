@extends('layout.main')
@section('title')Главная страница@endsection
@section('content')
    <div class="container pt-lg-5">
        <div class="row row-cols-1 row-cols-lg-4 pb-5 mb-4">

            @foreach($content as $item)
            <div class="col mt-3">
                <div class="card w-100" style="width: 18rem;">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 w-100 bd-highlight">
                            <img src="http://5dreal.com/wp-content/uploads/2016/03/image-1-1024x576.jpg" class="rounded-circle img-ava-lent" alt="">
                            <span class="fw-bold">{{$user->find($item->user)->login}}</span>
                        </div>
                        <div class="p-2 flex-shrink-1 bd-highlight">
                            <i class="bi bi-three-dots-vertical fs-5"></i>
                        </div>
                    </div>
                    <img src="/storage/{{$item->user}}/media/{{$item->media}}" class="" alt="{{$item->media}}">
                    <div class="card-body">
                        <div class="fs-3">
                            <span class="me-2"><i class="bi bi-heart"></i></span>
                            <span class="me-2"><i class="bi bi-chat"></i></span>
                        </div>
                        <span class="small text-muted">Нравится: 0</span>
                      <div class="">
                        <span>{{$user->find($item->user)->login}}</span>
                        <span class="fw-light">{{$item->description}}</span>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection