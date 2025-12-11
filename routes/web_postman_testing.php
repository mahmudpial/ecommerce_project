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
    return response()->json([
        'status' => 'success',
        'message' => 'API is working',
        'data' => []
    ], Response::HTTP_OK);
});



// get users route and return users data as json response
Route::get('/users', function () {

    $users = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => '',
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => '',
        ],
    ];

    return response()->json([
        'status' => 'success',
        'message' => 'users data found',
        'data' => $users
    ], Response::HTTP_OK);
});


// get user by id route and return user data as json response
Route::get(
    '/user/{id}',
    function ($id) {

        $usersData = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => '',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => '',
            ],
            [
                'id' => 3,
                'name' => 'khan',
                'email' => '',
            ],
        ];

        $expectedUser = '';

        foreach ($usersData as $user) {

            if ($user['id'] == $id) {

                $expectedUser = $user;
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'expected user found',
            'data' => $expectedUser
        ], Response::HTTP_OK);
    }
);



// user registration route and return user data as json response and status code 201
Route::post('registration', function (Request $request) {
    // $request->all();
    $user = [
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'password' => $request->get('password'),
    ];

    $newUser = DB::table('users')->insert($user);

    return response()->json([
        'status' => 'success',
        'message' => 'user registration successfully',
        'data' => $newUser
    ], Response::HTTP_CREATED);
});


// for registration to set csrf token route/set session token
Route::get('/set_session_token', function (Request $request) {
    return response()->json([
        'status' => 'success',
        'message' => 'CSRF/session token generated',
        'data' => $request->session()->token()
    ], Response::HTTP_OK);
});


// create product route and return product data as json response and status code 201
Route::post('product', function (Request $request) {

    // $request->all();

    //.....to check request type.....//

    // if ($request->isJson()) {

    //     echo "json data";
    // } else {

    //     echo "web form data";
    // }
    // exit;
    $product = [
        'title' => $request->get('title'),
        'category_id' => $request->get('category_id'),

    ];

    return response()->json([
        'status' => 'success',
        'message' => 'product created successfully',
        'data' => $product
    ], Response::HTTP_CREATED);
});



// get and check cookie data route
Route::get('/cookie_remember_me', function (Request $request) {
    $name = $request->cookie('user_name');

    return response()->json([
        'status' => 'success',
        'message' => "hello $name, i have got your name from cookie",
        'data' => ['user_name' => $name]

    ], Response::HTTP_OK);
});


// set cookie data route
Route::get('/set_cookie_name/{name}', function ($name) {

    return response()->json([
        'status' => 'success',
        'message' => "hello $name, i am setting your name in cookie",

    ], Response::HTTP_OK)->cookie('user_name', $name);
});



// login route and redirect to dashboard route with user_name parameter
Route::get('/login/{user_name}', function ($user_name) {

    return redirect('/dashboard/' . $user_name);
});

Route::get('/dashboard/{user_name}', function ($name) {

    return response()->json([
        'status' => 'success',
        'message' => "welcome to your dashboard, $name",

    ], Response::HTTP_OK);
});


// set custom header key value in response

Route::get('/set_custom_header', function () {

    return response()->json([
        'status' => 'success',
        'message' => 'custom header set in response',
        'data' => [
            'info' => 'This is some important information',
            'version' => '1.0.0',
            'author' => 'Abc XYZ',

        ]


    ], Response::HTTP_OK)->header('X-Custom-Header', 'CustomHeaderValue')
        ->header('X-Another-Header', 'AnotherHeaderValue');
});


// set content disposition header in response for file download
Route::get('/certificate_download', function () {

    return response()->json([
        'status' => 'success',
        'message' => 'certificate download header set in response',


    ], Response::HTTP_OK)->header('Content-Disposition', 'attachment, filename="certificate.pdf"');
});
