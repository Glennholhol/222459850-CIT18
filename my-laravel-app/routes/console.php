<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

use App\Http\Controllers\TaskController;
use App\Http\Controllers\GreetController;
use Illuminate\Support\Facades\Route;

Route::resource('tasks', TaskController::class);
Route::get('/greet/{name?}', [GreetController::class, 'greet']);