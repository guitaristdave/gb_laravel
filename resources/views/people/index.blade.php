@extends('layouts.base')

@section('page.title', 'Пользователи')

@section('content')
    <div class="container">
        <a href="{{route('people.create')}}" class="btn btn-primary mb-3">Создать</a>
        <table class="table table-striped">
            <tr>
               <th>Имя</th><th>Фамилия</th><th>E-mail</th><th></th><th></th>
            </tr>
            @foreach($people as $human)
                <tr>

                    <td>{{$human->firstname}}</td>
                    <td>{{$human->lastname}}</td>
                    <td>{{$human->email}}</td>
                    <td>
                        <form action="{{route('people.edit', ['people' => $human->id])}}" method="GET">
                            @csrf
                            <button type="submit">&#9998;</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('people.destroy', ['people' => $human->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&#10006;</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
