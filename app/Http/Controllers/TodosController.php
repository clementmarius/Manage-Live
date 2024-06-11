<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function liste()
    {
        return view("pages/toDoList");
    }
}
