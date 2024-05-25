@extends('layouts.base')
@section('page.title', 'Библиотека')

@section('content')
    <div class="container">
        <a href="{{route('library.create')}}" class="btn btn-primary mb-3">Добавить книгу</a>
        <table class="table table-striped">
            <tr>
                <th>№</th>
                <th>Автор</th>
                <th>Книга</th>
                <th>Жанр</th>
                <th>Язык</th>
                <th>Год</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($books as $book)
                <tr>

                    <td>{{$book->id}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->genre}}</td>
                    <td>{{$book->language}}</td>
                    <td>{{$book->year}}</td>
                    <td>
                        <form action="{{route('library.edit', ['book' => $book->id])}}" method="GET">
                            @csrf
                            <button type="submit">&#9998;</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('library.destroy', ['book' => $book->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">&#10006;</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="center">
            {{$books->links()}}
        </div>
    </div>
@endsection
