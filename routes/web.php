<?php
use App\Http\Controllers\MessagesController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MessagesController::class, 'index']);
Route::resource('messages', MessagesController::class);