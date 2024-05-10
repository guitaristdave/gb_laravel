@extends('layouts.base')
@section('page.title', "Вы зарегистрированы!")


@section('content')
    <div class="container">
        <h2>Регистрация прошла успешно!</h2>
        <p>{{$data->name}}, благодарим за регистрацию! Ваши данные:</p>
        <ul>
            <li>Имя: {{$data->name}}</li>
            <li>Фамилия: {{$data->lastname}}</li>
            <li>Почта: {{$data->email}}</li>
            <li>Пароль: {{$data->password}}</li>
        </ul>
    </div>
@endsection
