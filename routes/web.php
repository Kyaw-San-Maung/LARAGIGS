<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);


Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data
Route::post('/listings', [ListingController::class, 'store']);


//single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listing/{listing}', [ListingController::class, 'update']);

//Update Listing
Route::delete('/listing/{listing}', [ListingController::class, 'delete']);
