@extends('layouts.app')

@section('content')
    <h2>Add new task</h2>

    <hr>

    <form action="/tasks" method="POST">        
        @csrf
        <label for="body">Task</label>
        <input type="text" name="body">

        <button type="submit">Submit</button>

        @include('partials.errors')
    </form>

@endsection