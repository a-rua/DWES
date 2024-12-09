<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Route::get('/',

Route::get('/note', [NoteController::class, 'index']);
