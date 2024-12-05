<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\NoteController;

Route::get('/note', [NoteController::class, 'index']);
