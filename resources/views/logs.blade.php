@extends('layouts.base')
@section('page.title', 'Логи')

@section('content')
    <div class="container">
        <table class="table table-stripped">
            <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Duration</th>
                <th>IP</th>
                <th>URL</th>
                <th>Method</th>
                <th>Input</th>
            </tr>
            @foreach($logs as $log)
                <tr>
                    <td>{{$log->id}}</td>
                    <td>{{$log->time}}</td>
                    <td>{{$log->duration}}</td>
                    <td>{{$log->ip}}</td>
                    <td>{{$log->url}}</td>
                    <td>{{$log->method}}</td>
                    <td title="{{$log->input}}">{{Str::limit($log->input, 50)}}</td>
                </tr>
            @endforeach
        </table>
        <div class="center">
            {{$logs->links()}}
        </div>
    </div>
@endsection
