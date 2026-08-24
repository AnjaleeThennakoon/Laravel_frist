<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

Route::get('/', function () {
    return redirect('/login');
//    return 'placeholder for home page ';
});
Route::middleware('auth')->group(function () {
    // Ideas
    Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');
    Route::get('/ideas/create', [IdeaController::class, 'create'])->name('ideas.create');
    Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit')->can('update','idea');
    Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');
    Route::patch('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

    Route::delete('/logout', [SessionsController::class, 'destroy']);

});


// Register
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

});


// Login - admin view part 2
Route::get('/login', [SessionsController::class, 'create'])-> name('login');
Route::post('/login', [SessionsController::class, 'store']);
//
//Route::get('/admin',function () {
//    Gate::authorize('view-admin');
//    return 'Private admin only area';
//})->middleware('auth');
//
//
