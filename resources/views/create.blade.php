@extends('layout.app')
@section('title')Войти@endsection
@section('main')
<div class="w-50 p-4 bg-light ms-auto me-auto">
    <form action="{{ route('application.store') }}" method="post">
        @csrf
        <h2 class="mb-2">Создать заявку</h2>
{{--            <div class="mb-2">--}}
{{--                <select class="form-control" name="categories" id="categories">--}}
{{--                    @foreach($category as $categorie)--}}
{{--                        <option hidden disabled selected>Выберете категория заявки</option>--}}
{{--                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
        <input class="form-control mb-2" type="text" name="title" placeholder="Название">
        <textarea class="form-control mb-2" type="text" name="description" id="description" cols="30" rows="5" placeholder="Опишите вашу проблему..."></textarea>
        <input class="form-control mb-2" type="email" name="email" placeholder="Почта">
        <input class="form-control mb-2" type="number" name="number" placeholder="Номер телефона">
        <button class="btn btn-danger" type="submit">Создать заявку</button>
    </form>
</div>
@endsection
