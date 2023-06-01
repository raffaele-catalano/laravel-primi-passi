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
Route::get('/', function () {

    $hello = 'Hello World!';

    return view('home', compact('hello'));
});

Route::get('/contacts', function () {

    $data = [
        'Customer Service'      => '+46 5486325',
        'Sales Office'          => '+47 5488892',
        'Marketing Office'      => '+46 5582654',
        'Administrative Office' => '+46 5582654',
    ];

    return view('contacts', compact('data'));
});
