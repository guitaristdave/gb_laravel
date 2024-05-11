@extends('layouts.base')
@section('page.title', 'Редактирование пользователя')

@section('content')
    <div class="container w-50">
        <div class="card">

            <div class="card-body">
                <h4 class="m-0">
                    {{__('Изменение пользователя')}}
                </h4>
            </div>
            <div class="card-body">
                <form action="{{route('people.update', ['people' => $people->id])}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label class="required">{{__('Имя')}}</label>
                        <input type="text" name="name" class="form-control" value="{{$people->firstname}}" autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="required">{{__('Фамилия')}}</label>
                        <input type="text" name="lastname" class="form-control" value="{{$people->lastname}}">
                    </div>

                    <div class="mb-3">
                        <label class="required">{{__('E-mail')}}</label>
                        <input type="email" name="email" class="form-control" value="{{$people->email}}">
                    </div>


                    <button type="submit" class="btn btn-primary">
                        {{__('Сохранить')}}
                    </button>
                </form>
            </div>

        </div>
    </div>

@endsection
