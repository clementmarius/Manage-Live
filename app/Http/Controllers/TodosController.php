<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;


class TodosController extends Controller
{

    protected string $namespace = 'App\Http\Controllers';

    public function liste()
    {
        return view("pages/toDoList",["todos"=>Todos::all()]);
    }

    public function saveTodo(Request $request){
        $texte = $request->input('texte');

        if($texte){
            $todo = new Todos();
            $todo->texte = $texte;
            $todo->termine = 0;
            $todo->save();
        }

        return redirect("pages/displayList");
    }
}
