<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function liste()
    {
        return view("pages/toDoList",["todos"=>Todos::all()]);
    }

    public function saveTodo(Request $request)
    {
     Todos::create($request->all());
     return redirect("pages/displayList");
    }
}
