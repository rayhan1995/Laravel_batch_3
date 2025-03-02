<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# Category API

Route::prefix('category')->controller(CategoryController::class)->group(function () {

    Route::get('/', 'getAllCategory');
    Route::post('/', 'store');
    Route::get('/{id}', 'view');
    Route::delete('/{id}', 'delete');
    Route::post('update/{id}', 'update');
});
