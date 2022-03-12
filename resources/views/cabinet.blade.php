@extends('layout.notop')
@section('title')Главная страница@endsection
@section('content')
    <div class="container px-0 pt-lg-5">
        <div class="fs-5 py-2">
            <div class="d-flex bd-highlight border-bottom px-3 pb-2">
                <div class="w-100 bd-highlight">
                    <div class="fw-normal fs-2">{{ Auth::user()->login }}</div>
                </div>
                <div class="flex-shrink-1 bd-highlight">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item text-danger" href="/exit">Выход из аккаунта</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            
        </div>
        <div class="">
            <div class="d-flex bd-highlight text-center">
                <div class="p-2 flex-fill bd-highlight">
                    @if($avatar->where('user',$user->id)->count() == 0)
                    <a href="" data-bs-toggle="modal" data-bs-target="#avatar"><img src="/assets/images/avatar.png" alt="mdo" class="rounded-circle img-ava-cabinet"></a>
                    @else
                        <a href="" data-bs-toggle="modal" data-bs-target="#avatar"><img src="/storage/{{$user->id}}/avatars/{{$my_avatar}}" class="rounded-circle img-ava-cabinet" alt=""></a>
                    @endif
                </div>
                <div class="p-2 flex-fill bd-highlight align-self-center">
                    <div class="fs-4">{{$content->count()}}</div>
                    <span class="small fw-light">Публикации</span>
                </div>
                <div class="p-2 flex-fill bd-highlight align-self-center">
                    <div class="fs-4">0</div>
                    <span class="small fw-light">Подписчики</span>
                </div>
                <div class="p-2 flex-fill bd-highlight align-self-center">
                    <div class="fs-4">0</div>
                    <span class="small fw-light">Подписки</span>
                </div>
              </div>

              <div class="px-3"><a href="#" class="text-decoration-none text-dark">Задать заголовок</a></div>
              <div class="px-3 fw-light text-muted"><a href="#" class="text-decoration-none text-muted">Заполнить описание</a></div>

              <div class="d-flex bd-highlight">
                <div class="p-2 flex-fill bd-highlight">
                    <!-- Modal -->
                    <div class="modal fade" id="avatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/avatar" class="pb-3" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="text-center px-3">
                                            @if($avatar->where('user',$user->id)->count() == 0)
                                                <img src="/assets/images/avatar.png" alt="mdo" class="rounded-circle mb-3" width="180" height="180">
                                            @else
                                                <img src="/storage/{{$user->id}}/avatars/{{$my_avatar}}" alt="mdo" class="rounded-circle mb-3" width="180" height="180">
                                            @endif
                                        </div>
                                        <input class="form-control mb-1" name="avatar" type="file" id="avatar">
                                        <button class="btn btn-secondary w-100">Обновить аватарку</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="">
            <ul class="nav nav-tabs fs-3" id="myTab" role="tablist">
                <li class="nav-item ms-2" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-bounding-box"></i></button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row row-cols-3 g-1 m-1">
                        
                        @foreach($content as $item)
                            @if($item->user == $user->id)
                                <div class="col">
                                    <img src="/storage/{{$item->user}}/media/{{$item->media}}" class="img-lent-cabinet" alt="/storage/{{$item->user}}/media/{{$item->media}}">
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
              </div>
              
        </div>
    </div>
@endsection