<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/date', function () {
    return view('pages/dateAndTime');
})->name('date');

Route::get('/dashboard/list', function () {
    return view('pages/toDoList');
})->name('liste');


Route::get('/dashboard/list', [ToDoListController::class, 'liste'])->name('list');
Route::post('/dashboard/list', [ToDoListController::class, "saveTodo"]);
Route::get('/dashboard/list{id}', [ToDoListController::class, 'markAsDone']);
Route::get('/dashboard/list{id}', [ToDoListController::class, 'deleteTodo']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
