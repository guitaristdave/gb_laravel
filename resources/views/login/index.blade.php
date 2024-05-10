@extends('layouts.base')

@section('page.title', 'Страница входа')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <x-login>

                    </x-login>
                </div>
            </div>
        </div>
    </section>
@endsection
