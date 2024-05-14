@extends('layouts.base')

@section('content')
    <div class="container error">
        <p>{{$message}}</p>
        <button><a href="{{route('home')}}"></a>На главную</button>
    </div>
@endsection
