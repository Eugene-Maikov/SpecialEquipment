@extends('layout.app')
@section('title')Профиль@endsection

@section('main')
    @include('application.create')
    <div class="row">
        <h2>Ваши заявки</h2>
        @foreach($user->applications as $application)
            <div class="col-3 g-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $application->name }}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{ $application->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

