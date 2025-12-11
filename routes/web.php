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
    $title = 'Welcome to Laravel';
    $heading = 'welcome to our laravel website!';
    return view('welcome', [
        'title' => $title,
        'heading' => $heading,
    ]);
});




Route::get('/about', function () {
    $day = date('D');
    $title = 'About Us';
    $heading = 'Learn more about our team and mission.';
    return view('about', compact('title', 'heading', 'day'));
});

Route::get('/day/{number}', function ($number) {

    $title = 'Switching between Blade and PHP';
    $heading = 'Demonstration of Blade and PHP syntax.';
    $days = [

        1 => 'Saturday',
        2 => 'Sunday',
        3 => 'Monday',
        4 => 'Tuesday',
        5 => 'Wednesday',
        6 => 'Thursday',
        7 => 'Friday',

    ];
    $day = $days[$number] ?? 'Invalid day number';
    return view('switch_day', compact('title', 'heading', 'day', 'number'));
});



Route::get('/loop', function () {


    $title = 'Looping in Blade';
    $heading = 'Demonstration of loops in Blade templates.';
    $users = ['pia', 'zia', 'ria', 'mia', 'tia'];
    // $products = [
    //     ['name' => 'Laptop', 'price' => 999.99],
    //     ['name' => 'Smartphone', 'price' => 699.99],
    //     ['name' => 'Tablet', 'price' => 399.99],
    //     ['name' => 'Headphones', 'price' => 199.99],
    //     ['name' => 'Smartwatch', 'price' => 299.99],
    // ];
    return view('loop', compact('title', 'heading', 'users'));
});
