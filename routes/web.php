<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index']);
Route::get('/shop', [FrontendController::class, 'shopProducts']);
Route::get('/return-process', [FrontendController::class, 'returnProcess']);
Route::get('/product-details', [FrontendController::class, 'productDetails']);
Route::get('/type-products', [FrontendController::class, 'typeProducts']);