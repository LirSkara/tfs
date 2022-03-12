@extends('layout.main')
@section('title')Главная страница@endsection
@section('content')
    <div class="container px-0 pt-lg-5">
        <div class="fs-5 p-3">
            <div class="d-flex bd-highlight">
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
                    <img src="http://5dreal.com/wp-content/uploads/2016/03/image-1-1024x576.jpg" class="rounded-circle img-ava-cabinet" alt="">
                </div>
                <div class="p-2 flex-fill bd-highlight align-self-center">
                    <div class="fs-4">0</div>
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
                    <button class="btn btn-outline-secondary">Редактировать профиль</button>
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