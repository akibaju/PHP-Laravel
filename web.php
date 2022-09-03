<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', function () {return view('index');});
Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/{param}', [TestController::class, 'index']);
Route::get('/family', function () {return view('parent.child');});