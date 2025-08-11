<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmamusumeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('umamusumes', UmamusumeController::class);