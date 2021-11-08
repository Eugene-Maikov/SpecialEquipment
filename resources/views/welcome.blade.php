@extends('layout.app')
@section('title')Главная страница@endsection
@section('main')
    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">Аренда манипуляторов</h1>
                <p class="intro__suptitle">
                    Предоставляем в аренду широкий ассортимент спецтехники КАМАЗ; предлагаем услуги по вывозу мусора или снега, а также нерудные материалы для строительства.
                </p>
                <a href="{{ route('create')}}" class="btn btn-danger mt-lg-5 fs-3 text">Заказат услугу</a>
            </div>
        </div>
    </div>
@endsection

