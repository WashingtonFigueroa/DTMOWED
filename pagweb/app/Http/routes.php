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
Route::get('/ds', function () {
    return view('ds');
});
Route::get('/mercadotecnia', function () {
    return view('mercadotecnia');
});
Route::get('/capacitacion', function () {
    return view('capacitacion');
});
Route::post('comentarios','comentarioController@enviaremail');