<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

//Delete Listing
Route::delete('/listing/{listing}', [ListingController::class, 'delete']);

//Show register/Create Form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);

//user logout
Route::post('/logout', [UserController::class, 'logout']);

//show login Form
Route::get('/login', [UserController::class, 'login']);

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
