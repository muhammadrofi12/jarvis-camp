<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    $data = [
        "title" => "Dashboard",
        "user" => [
            "name" => "Rofi",
            "email" => "rofi@gmail.com",
            "pesan" => "<span>Selamat datang di dashboard admin.</span>"
        ]
    ];

    return view('contents.dashboard', $data);
});


Route::get('/docs', function () {

    $data = [
        "title" => "My Docs"
    ];

    return view('contents.docs', $data);
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);
