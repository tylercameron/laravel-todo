@extends('layouts.app')

@section('content')
    <h2>Add new task</h2>

    <form>
        <label for="body">Task</label>
        <input type="text" name="body">

        <button type="submit">Submit</button>
    </form>

@endsection