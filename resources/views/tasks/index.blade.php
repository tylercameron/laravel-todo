@extends('layouts.app')

@section('content')
    <h1>TODO list - laravel</h1>

    <ul>

        @foreach ($tasks as $task)
            <li>
                <h3>{{ $task->body }}</h3>

                @if ( $task->completed )
                    <p>done</p>
                @else
                    <p>not done</p>
                @endif

                <form action="/tasks/{{ $task->id }}/edit" method="post">
                    @method('PUT') 
                    @csrf
                    <button type="submit">TICK</button>
                </form>
                {{-- <form action="DELETE" ></form>
                <button type="submit"></button> --}}
            </li>
        @endforeach

    </ul>
@endsection