<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listening', [
        "headings" => "Latest Listings",
        "posts" => [
            [
            "id" => 1,
            "title" => "Title one",
            "description" => "This is first paragraph. My name is Kyaw San Maung who create this project."
        ],
        [
            "id" => 2,
            "title" => "Title two",
            "description" => "This is second paragraph. My name is Kyaw San Maung who create this project."
        ]
        ]
    ]);
});