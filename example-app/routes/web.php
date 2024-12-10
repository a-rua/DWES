<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/IForm', [NoteController::class, 'insertForm'])->name('note.insertForm');
Route::get('/note/insert', [NoteController::class, 'insert'])->name('note.insert');
Route::get('/note/edit{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update{note}', [NoteController::class, 'update'])->name('note.update');