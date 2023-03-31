<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/ui/home', [HomeController::class, 'getAll']);

Route::post('/subscribe', [SubscriberController::class, 'subscribe']);

Route::post('/request', [RequestController::class, 'request']);
