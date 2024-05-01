<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);


Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//store listing data
Route::post('/listings', [ListingController::class, 'store']);


//single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update Listing
Route::put('/listing/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listing/{listing}', [ListingController::class, 'delete'])->middleware('auth');

//Show register/Create Form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);

//user logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
