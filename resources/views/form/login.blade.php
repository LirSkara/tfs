@extends('layout.main')
@section('title')Вход в аккаунт@endsection
@section('content')
    <div class="container pt-lg-5">
        <div class="row mx-auto pt-5 width-custom">
            <div class="col">
                <div class="bg-white shadow p-3 rounded-3 mb-3">
                    <div class="fw-bold fs-4 text-center mb-3">ТутФотоСейчас</div>
                    <form action="/login" method="POST" class="px-3">
                        @csrf
                        @error('login') <div class="alert alert-danger"><i class="bi bi-exclamation-triangle"></i> {{$message}} </div>@enderror
                        <div class="form-floating mb-3">
                            <input type="text" name="login" class="form-control bg-light @error('login') is-invalid @enderror" id="Login" placeholder="Login">
                            <label for="Login">Введите ваш логин</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control bg-light @error('login') is-invalid @enderror" id="Password" placeholder="Password">
                            <label for="Password">Введите ваш пароль</label>
                        </div>
                        <div class="mt-3 text-center">
                            <button class="btn btn-lg btn-primary w-100 mb-3">Войти в аккаунт</button>
                            <a href="#">Забыли пароль?</a>
                        </div>
                    </form>
                </div>

                <div class="bg-white shadow p-3 rounded-3 text-center">
                    У вас ещё нет аккаунта? <a href="/registration">Создайте его</a> сейчас
                </div>
            </div>
        </div>
    </div>
@endsection