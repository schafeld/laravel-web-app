<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return view('user', ['id' => $id]);
});
