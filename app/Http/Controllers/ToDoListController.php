<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function liste()
    {
        return view("pages/toDoList",["todos"=>Todos::all()]);
    }

    public function saveTodo(Request $request){
        $texte = $request->input('texte');

        if($texte){
            $todo = new Todos();
            $todo->text = $texte;
            $todo->completed = 0;
            $todo->save();
        }

        return redirect("dashboard/list");
    }
}
