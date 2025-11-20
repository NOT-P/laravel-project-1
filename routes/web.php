<?php

use App\Http\Controllers\Web\Dashboard\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'home']);


// Route::get('/', function () {
//     return view('frontend.home');
// });
