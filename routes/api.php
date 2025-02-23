<?php

use App\Http\Controllers\api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/add-product', [ProductController::class, 'store']);

Route::get('/get-products', [ProductController::class, 'getProducts']);

Route::delete('/delete-product/{id}', [ProductController::class, 'deleteProduct']);
