@extends('layout.main')
@section('title')Главная страница@endsection
@section('content')
    <div class="container pt-lg-5">
        <div class="row row-cols-1 row-cols-lg-4">

            <div class="col mt-3">
                <div class="card w-100" style="width: 18rem;">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 w-100 bd-highlight">
                            <img src="http://5dreal.com/wp-content/uploads/2016/03/image-1-1024x576.jpg" class="rounded-circle img-ava-lent" alt="">
                            <span class="fw-bold">User112</span>
                        </div>
                        <div class="p-2 flex-shrink-1 bd-highlight">
                            <i class="bi bi-three-dots-vertical fs-5"></i>
                        </div>
                    </div>
                    <img src="https://prikolnye-kartinki.ru/img/picture/Jan/25/cdad148402fac07fa49fb563c1e098ad/6.jpg" class="" alt="...">
                    <div class="card-body">
                        <div class="fs-3">
                            <span class="me-2"><i class="bi bi-heart"></i></span>
                            <span class="me-2"><i class="bi bi-chat"></i></span>
                        </div>
                        <span class="small text-muted">Нравится: 0</span>
                      <div class="">
                        <span>User123</span>
                        <span class="fw-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur fuga deleniti eveniet laboriosam! Sequi esse explicabo nihil velit sapiente modi, libero odit aspernatur nemo cumque expedita similique quasi eius facilis?</span>
                      </div>
                    </div>
                  </div>
            </div>

        </div>
    </div>
@endsection