<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/selamat datang', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nama : Muhammad Ihsan Rahmatullah<br> NIM : 244107020218';
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya: " . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Pos: ke- " . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return " Halaman Artikel dengan ID: " . $id;

});

Route::get('/user/{name?}', function ($name='John') {
    return 'nama saya: ' .$name;
});

