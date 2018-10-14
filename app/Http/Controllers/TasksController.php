<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    
    public function index()
    {
        $tasks = Task::all();
        
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store() 
    {        

        $this->validate(request(), [
            'body' => 'required'
        ]);
        // $task = new Task;

        // $task->body = request('body');

        // $task->save();

        
        // below ::create is the same as doing 3 lines above
        Task::create([
            'body' => request('body')
        ]);
 
        return redirect('/');
    }

    public function update(Task $task)
    {
        $task->completed = !$task->completed;

        $task->save();
        
        return redirect('/');
    }
    
    public function destroy(Task $task)
    {
        $task->delete();
        
        return redirect('/');
    }
}
