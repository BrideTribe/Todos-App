<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoID)
    {
        return view('todos.show')->with('todo', Todo::find($todoID));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this -> validate(request(), [
            'name' => 'required|min:6|max:20',
            'description' => 'required|max:150'
        ]);

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        return redirect('/todos');
    }
}
