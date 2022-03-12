@extends('layout.main')
@section('title')Главная страница@endsection
@section('content')
    <div class="container px-0 pt-lg-5">
        <div class="border-bottom fs-5 p-2">
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
        

        <div class="px-3 my-3">
            <div class="my-3 fs-4">Добавление изображения</div>
            <form action="/add_content" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="media" class="form-control mb-2">
                <textarea name="description" class="form-control mb-2"></textarea>
                <button class="btn btn-secondary w-100">Опубликовать запись</button>
            </form>
        </div>
        
    </div>
@endsection