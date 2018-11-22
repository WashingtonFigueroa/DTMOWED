<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/portafolio', function () {
    return view('portafolio');
});

Route::post('comentarios','comentarioController@enviaremail');