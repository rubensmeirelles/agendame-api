<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::post('login', LoginController::class);

Route::get('/teste-cors', function () {
    return response()->json(['ok' => true]);
});
