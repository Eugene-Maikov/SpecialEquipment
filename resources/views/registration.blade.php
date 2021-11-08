

@extends('layout.app')
@section('title')Регистрация@endsection
@section('main')
    <div class="w-25 p-4 bg-light ms-auto me-auto">
        <form action="{{ route('users.registration.store') }}" method="post">
            @csrf
            <h2>Регистрация</h2>
            <div>
                <label for="fio">ФИО:</label><br>
                <input class="form-control mb-2" type="text" name="fio" id="fio" pattern="^[А-Яа-яёЁ\s]+$">
            </div>
            <div>
                <label for="login">Логин:</label><br>
                <input class="form-control mb-2" type="text" name="login" id="login" placeholder="Логин">
            </div>
            <div>
                <label for="email">E-mail:</label><br>
                <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Почта">
            </div>
            <div>
                <label for="password">Пароль:</label><br>
                <input class="form-control mb-2" type="password" name="password" id="password" placeholder="Пароль">
            </div>
            <div>
                <label for="password_confirmation">Подтвердите пароль:</label><br>
                <input class="form-control mb-2" type="password" name="password_confirmation" id="password_confirmation" placeholder="Подтвердите пароль">
            </div>
            <div>
                <label class="mb-2 small">
                    <input class="checkbox" type="checkbox" name="confirm" id="confirm">
                    Даю мое согласие на обработку <u>персональных данных</u>!
                </label>
            </div>
            <button class="btn btn-danger" type="submit">Регистрация</button>
        </form>
    </div>
@endsection
