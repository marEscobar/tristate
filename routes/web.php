<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/exterior-signs', function () {
    return view('exterior-signs');
});

Route::get('/interior-signs', function () {
    return view('interior-signs');
});

Route::get('/commercial-awnings', function () {
    return view('commercial-awnings');
});

Route::get('/residential-awnings', function () {
    return view('residential-awnings');
});

Route::get('/installations', function () {
    return view('installations');
});

Route::get('/led-displays', function () {
    return view('led-displays');
});

Route::get('/permits', function () {
    return view('permits');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/request-call-back', function () {
    return view('request-call-back');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
