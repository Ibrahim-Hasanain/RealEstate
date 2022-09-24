<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('index');
});Route::get('/agent-singel', function () {
    return view('agent-single');
});Route::get('/agent-grid', function () {
    return view('agents-grid');
});Route::get('/blog-grid', function () {
    return view('blog-grid');
});Route::get('/blog-singel', function () {
    return view('blog-single');
});Route::get('/contact', function () {
    return view('contact');
});Route::get('/property-grid', function () {
    return view('property-grid');
});
Route::get('/property-singel', function () {
    return view('property-single');
});

