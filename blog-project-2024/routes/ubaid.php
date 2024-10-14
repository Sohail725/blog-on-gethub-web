<?php


Route::get('frontend-about', function () {
    return view('frontend/about');
})->name('frontend-about');




Route::get('frontend-category', function () {
    return view('frontend/category');
})->name('frontend-category');

Route::get('frontend-contact', function () {
    return view('frontend/contact');
})->name('frontend-contact');

Route::get('frontend-search', function () {
    return view('frontend/search');
})->name('frontend-search');


Route::get('frontend-single-post', function () {
    return view('frontend/single-post');
})->name('frontend-single-post');



Route::get('frontend-index', function () {
    return view('frontend/index');
})->name('frontend-index');



