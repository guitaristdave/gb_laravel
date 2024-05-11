@extends('layouts.base')

@section('page.title', 'Пользователи')

@section('content')
    <div class="container">
        <a href="{{route('people.create')}}" class="btn btn-primary mb-3">Создать</a>
        <table class="table table-striped">
            <tr>
                <th>Имя</th><th>Фамилия</th><th>E-mail</th>
            </tr>
            @foreach($people as $human)
                <tr>
                    <td>{{$human->firstname}}</td>
                    <td>{{$human->lastname}}</td>
                    <td>{{$human->email}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
