@extends('layout.notop_profile')
@section('title')Главная страница@endsection
@section('content')
    <div class="container px-0 pt-lg-5">
        <div class="fs-5 py-2">
            <div class="d-flex bd-highlight border-bottom px-3 pb-2">
                <div class="w-100 bd-highlight">
                    <div class="fw-normal fs-2">{{ $user->login }}</div>
                </div>
                <div class="flex-shrink-1 bd-highlight">
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
            
        </div>
        <div class="">
            <div class="d-flex bd-highlight text-center">
                <div class="p-2 flex-fill bd-highlight">
                    @if($avatar_c == 0)
                    <img src="/assets/images/avatar.png" alt="mdo" class="rounded-circle img-ava-cabinet">
                    @else
                        <img src="/storage/{{$user->id}}/avatars/{{$avatar->avatar}}" class="rounded-circle img-ava-cabinet" alt="">
                    @endif
                </div>
                <div class="p-2 flex-fill bd-highlight align-self-center">
                    <div class="fs-4">{{$content->count()}}</div>
                    <span class="small fw-light">Публикации</span>
                </div>
                <div class="p-2 flex-fill bd-highlight align-self-center">
                    <div class="fs-4">{{$m_followers}}</div>
                    <span class="small fw-light">Подписчики</span>
                </div>
                <div class="p-2 flex-fill bd-highlight align-self-center">
                    <div class="fs-4">{{$followers}}</div>
                    <span class="small fw-light">Подписки</span>
                </div>
              </div>

              <div class="px-3"><a href="#" class="text-decoration-none text-dark">Задать заголовок</a></div>
              <div class="px-3 fw-light text-muted"><a href="#" class="text-decoration-none text-muted">Заполнить описание</a></div>
            
              <div class="px-3 my-2">
                  @if($n_followers->where('user',$user->id)->orWhere('follower',Auth::user()->id)->count() == 0)
                    <a href="/follow/{{$user->id}}" class="btn btn-primary w-100">Подписаться</a>
                  @else
                    <a href="/un_follow/{{$user->id}}" class="btn btn-outline-secondary w-100">Отписаться</a>
                  @endif
              </div>

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
                                            @if($avatar_c == 0)
                                                <img src="/assets/images/avatar.png" alt="mdo" class="rounded-circle mb-3" width="180" height="180">
                                            @else
                                                <img src="/storage/{{$user->id}}/avatars/{{$avatar}}" alt="mdo" class="rounded-circle mb-3" width="180" height="180">
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
                            <div class="col">
                                <img data-bs-toggle="modal" data-bs-target="#onemedia{{$item->id}}" src="/storage/{{$item->user}}/media/{{$item->media}}" class="img-lent-cabinet" alt="/storage/{{$item->user}}/media/{{$item->media}}">
                                <!-- Modal -->
                                <div class="modal fade" id="onemedia{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="card border-0 w-100">
                                            <div class="d-flex bd-highlight px-2">
                                                <div class="py-2 w-100 bd-highlight">
                                                    @if($avatar_c == 0)
                                                        <img src="/assets/images/avatar.png" class="rounded-circle img-ava-lent" alt="">
                                                    @else
                                                        <img src="/storage/{{$user->id}}/avatars/{{$avatar}}" class="rounded-circle img-ava-lent" alt="">
                                                    @endif
                                                    <span class="fw-bold">{{$user->login}}</span>
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
              </div>
              
        </div>
    </div>
@endsection