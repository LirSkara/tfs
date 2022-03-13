@extends('layout.main')
@section('title')Главная страница@endsection
@section('content')
    <div class="container px-0 pt-lg-5">
        <div class="p-2">
            <form action="/find" method="POST">
                <div class="row g-1">
                    @csrf
                    <div class="col">
                        <input type="search" class="form-control" name="search" placeholder="Поиск по логину">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary w-100">Найти</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row row-cols-3 g-1 m-1">      
            @foreach($content as $item)
            <div class="col">
                <img data-bs-toggle="modal" data-bs-target="#onemedia{{$item->id}}" src="/storage/{{$item->user}}/media/{{$item->media}}" class="img-lent-cabinet" alt="/storage/{{$item->user}}/media/{{$item->media}}">
                <!-- Modal -->
                <div class="modal fade" id="onemedia{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
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
                                          <li><a class="dropdown-item text-danger" href="/delete_content/{{$item->id}}">Удалить</a></li>
                                        </ul>
                                      </div>
                                </div>
                            </div>
                            <img src="/storage/{{$item->user}}/media/{{$item->media}}" class="w-100 p-0 m-0" alt="/storage/{{$item->user}}/media/{{$item->media}}">
                            <div class="card-body px-2 py-0">
                                <div class="fs-3">
                                    <span class="me-2"><i class="bi bi-heart"></i></span>
                                    <span class="me-2"><i class="bi bi-chat"></i></span>
                                </div>
                                <span class="small text-muted">Нравится: 0</span>
                              <div class="">
                                <span>{{$user->login}}</span>
                                <span class="fw-light">{{$item->description}}</span>
                              </div>
                            </div>
                          </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection