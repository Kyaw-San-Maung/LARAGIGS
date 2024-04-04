<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listening', [
        "headings" => "Latest Listings",
        "posts" => Listing::all()
    ]);
});

//single listing
Route:: get('/listing/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});