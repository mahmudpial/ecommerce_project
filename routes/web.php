<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route as RoutingRoute;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contact', [App\Http\Controllers\contactController::class, 'index']);


Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/products', function () {
    return view('frontend.product');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});
