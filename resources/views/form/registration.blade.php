@extends('layout.main')
@section('title')Регистрация@endsection
@section('content')
    <div class="container pt-lg-5">
        <div class="row width-custom mx-auto py-5">
            <div class="col">
                <div class="bg-white shadow p-3 rounded-3 mb-3">
                    <div class="fw-bold fs-4 text-center mb-3">ТутФотоСейчас</div>
                    <form action="/registration" method="POST" class="px-lg-3">
                        @csrf
                        @error('email') <div class="alert alert-danger"><i class="bi bi-exclamation-triangle"></i> {{$message}} </div>@enderror
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control bg-light @error('email') is-invalid @enderror" id="Email" placeholder="Email">
                            <label for="Email"><i class="bi bi-envelope-check"></i> Введите ваш E-mail</label>
                        </div>
                        @error('login') <div class="alert alert-danger"><i class="bi bi-exclamation-triangle"></i> {{$message}} </div>@enderror
                        <div class="form-floating mb-3">
                            <input type="text" name="login" class="form-control bg-light @error('login') is-invalid @enderror" id="Login" placeholder="Login">
                            <label for="Login"><i class="bi bi-person-fill"></i> Придумайте логин</label>
                        </div>
                        @error('password') <div class="alert alert-danger"><i class="bi bi-exclamation-triangle"></i> {{$message}} </div>@enderror
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control bg-light @error('password') is-invalid @enderror" id="Password" placeholder="Password">
                            <label for="Password"><i class="bi bi-circle-square"></i> Придумайте пароль</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password_confirmation" class="form-control bg-light @error('password') is-invalid @enderror" id="Password" placeholder="Password">
                            <label for="Password"><i class="bi bi-circle-square"></i> Повторите пароль</label>
                        </div>
                        <div class="mt-3 text-center">
                            <button class="btn btn-lg btn-primary w-100 mb-3">Создать аккаунт</button>
                        </div>
                    </form>
                </div>

                <div class="bg-white shadow p-3 rounded-3 text-center">
                    У вас уже есть аккаунт? <a href="/login">Войдите</a> в него сейчас
                </div>
            </div>
        </div>
    </div>
@endsection