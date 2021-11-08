@extends('layout.app')
@section('title')Войти@endsection
@section('main')
    <div class="w-25 p-4 bg-light ms-auto me-auto">
        <form action="{{ route('users.login')}}" method="post">
            @csrf
            <h3 class="mb-2">Войти в аккаунт</h3>
            <input class="form-control mb-2" type="text" name="login" id="login_auth" placeholder="Логин">
            <input class="form-control mb-2" type="password" name="password" id="password_auth" placeholder="Пароль">
            <button class="btn btn-danger">Войти</button>
        </form>
    </div>
@endsection



