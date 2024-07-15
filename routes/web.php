<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('users', [ProjectController::class, 'index']);
Route::get('users/create', [ProjectController::class, 'create']);
Route::post('users', [ProjectController::class, 'store']);
Route::get('users/{id}', [ProjectController::class, 'show']);
Route::get('users/{id}/edit', [ProjectController::class, 'edit']);
Route::get('users/{id}', [ProjectController::class, 'update']);
Route::get('users/{id}', [ProjectController::class, 'destroy']);