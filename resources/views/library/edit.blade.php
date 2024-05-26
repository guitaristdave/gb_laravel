@extends('layouts.base')
@section('page.title', 'Редактирование книги')

@section('content')
    <div class="container w-50">
        <div class="card">

            <div class="card-body">
                <h4 class="m-0">
                    {{__('Редактирование книги')}}
                </h4>
            </div>
            <div class="card-body">
                <form action="{{route('library.update', ['book' => $book->id])}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label class="required">{{__('Автор')}}</label>
                        <input type="text" name="author" class="form-control" value="{{$book->author}}" autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="required">{{__('Название')}}</label>
                        <input type="text" name="name" class="form-control" value="{{$book->name}}">
                    </div>

                    <div class="mb-3">
                        <label class="required">{{__('Жанр')}}</label>
                        <input type="text" name="genre" class="form-control" value="{{$book->genre}}">
                    </div>

                    <div class="mb-3">
                        <label class="required">{{__('Язык')}}</label>
                        <input type="text" name="language" class="form-control" value="{{$book->language}}">
                    </div>

                    <div class="mb-3">
                        <label class="required">{{__('Год')}}</label>
                        <input type="text" name="year" class="form-control" value="{{$book->year}}">
                    </div>


                    <button type="submit" class="btn btn-primary">
                        {{__('Сохранить')}}
                    </button>
                </form>

                @if($errors->any())
                    <div class="alert alert-danger mt-3">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>

@endsection
