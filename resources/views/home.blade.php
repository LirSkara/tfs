@extends('layout.main')
@section('title')Главная страница@endsection
@section('content')
    <div class="container pt-lg-5 px-0">
        <div class="row mx-0 row-cols-1 row-cols-lg-4 pb-4">

            @foreach($content as $item)
            @if($followers->where('user',$item->user)->count() > 0)
            <div class="col px-0 mt-2">
                <div class="card border-0 w-100">
                    <div class="d-flex bd-highlight px-2">
                        <div class="py-2 w-100 bd-highlight">
                            <a href="/profile/{{$item->user}}" class="text-dark text-decoration-none">
                            @if($avatar->where('user',$item->user)->count() == 0)
                                <img src="/assets/images/avatar.png" class="rounded-circle img-ava-lent" alt="">
                            @else
                                <img src="/storage/{{$item->user}}/avatars/{{$avatar->where('user',$item->user)->first()->avatar}}" class="rounded-circle img-ava-lent" alt="">
                            @endif
                            <span class="fw-bold">{{$user->find($item->user)->login}}</span>
                            </a>
                        </div>
                        <div class="py-2 flex-shrink-1 bd-highlight">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a href="" class="dropdown-item">Пожаловаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="/storage/{{$item->user}}/media/{{$item->media}}" class="w-100 p-0 m-0" alt="{{$item->media}}">
                    <div class="card-body px-2 py-0">
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
            @elseif($item->user == $mi->id)
            <div class="col px-0 mt-2">
                <div class="card border-0 w-100">
                    <div class="d-flex bd-highlight px-2">
                        <div class="py-2 w-100 bd-highlight">
                            <a href="/profile/{{$item->user}}" class="text-dark text-decoration-none">
                            @if($avatar->where('user',$item->user)->count() == 0)
                                <img src="/assets/images/avatar.png" class="rounded-circle img-ava-lent" alt="">
                            @else
                                <img src="/storage/{{$item->user}}/avatars/{{$avatar->where('user',$item->user)->first()->avatar}}" class="rounded-circle img-ava-lent" alt="">
                            @endif
                            <span class="fw-bold">{{$user->find($item->user)->login}}</span>
                            </a>
                        </div>
                        <div class="py-2 flex-shrink-1 bd-highlight">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a href="" class="dropdown-item">Пожаловаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <img src="/storage/{{$item->user}}/media/{{$item->media}}" class="w-100 p-0 m-0" alt="{{$item->media}}">
                    <div class="card-body px-2 py-0">
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
            @endif
            @endforeach
        </div>
    </div>
@endsection