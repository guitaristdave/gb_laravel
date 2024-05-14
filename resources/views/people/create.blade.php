@extends('layouts.base')

@section('page.title', 'Создать нового пользователя')

@section('content')
    <div class="container w-50">
        @if (request()->query('type') == 'simple')
            <x-people>

            </x-people>
        @elseif (request()->query('type') == 'json')
            <x-people_json>

            </x-people_json>
        @endif
    </div>
@endsection
