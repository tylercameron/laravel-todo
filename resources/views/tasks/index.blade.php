@extends('layouts.app')

@section('content')
    <h1>TODO list - laravel</h1>

    @foreach ($tasks as $task)
        <h3>{{ $task->body }}</h3>
    @endforeach
@endsection