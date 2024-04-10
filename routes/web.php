<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);

//single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

Route::get('/listings/create', [ListingController::class, 'create']);
