<?php

use App\Http\Controllers\SessionController;
use App\Models\User;
use App\Models\Order;
use App\Models\profile;
use App\Http\Controllers\log\logController;
use Illuminate\Contracts\Auth\UserProvider;
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

    $products = (object) [
        (object) [
            'id' => 1,
            'title' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 19.99,
            'product_image' => 'https://via.placeholder.com/250x200?text=product+1',
        ],
        (Object) [
            'id' => 2,
            'title' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 19.99,
            'product_image' => 'https://via.placeholder.com/250x200?text=product+2',
        ],
        (object) [
            'id' => 3,
            'title' => 'Product 3',
            'description' => 'Description for Product 3',
            'price' => 19.99,
            'product_image' => 'https://via.placeholder.com/250x200?text=product+3',
        ],
        (object) [
            'id' => 4,
            'title' => 'Product 4',
            'description' => 'Description for Product 4',
            'price' => 19.99,
            'product_image' => 'https://via.placeholder.com/250x200?text=product+4',
        ],
        (object) [
            'id' => 5,
            'title' => 'Product 5',
            'description' => 'Description for Product 5',
            'price' => 19.99,
            'product_image' => 'https://via.placeholder.com/250x200?text=product+5',
        ],
        (object) [
            'id' => 6,
            'title' => 'Product 6',
            'description' => 'Description for Product 6',
            'price' => 19.99,
            'product_image' => 'https://via.placeholder.com/250x200?text=product+6',
        ],

    ];
    return view('frontend.home', compact('products'));
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
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/create_account', function () {
    return view('frontend.create_account');
});
Route::get('/forget_password', function () {
    return view('frontend.forgot_pass');
});

Route::get('/profile/{user_id}', function ($userId) {
    // $user = User::with('profile', 'orders')->find($userId);
    // $orders = $user->orders;
    // dd($orders);

    $order = Order::with('user')->find(4);
    dd($order->user);

});

/*
 -------
 log demo guide
 -------
*/

Route::get('/log-demo', [logController::class, 'logDemo']);
Route::get('/user-process', [logController::class, 'userProcess']);


/*
 -------
 session guide
 -------
*/
Route::get('/session', [SessionController::class, 'index'])->name('session-index');
Route::get('/session/set', [SessionController::class, 'setSession'])->name('session-set');
Route::get('/session/get', [SessionController::class, 'getSession'])->name('session-get');
Route::get('/session/delete', [SessionController::class, 'deleteSession'])->name('session-delete');
Route::get('/session/flash', [SessionController::class, 'flashSession'])->name('session-flash');



/*
 -------
 Admin Dashboard
 -------
*/
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
//product list route
Route::get('/admin/products', [App\Http\Controllers\Admin\AdminProductController::class, 'index'])->name('admin.products.list');
Route::get('/admin/products/create', [App\Http\Controllers\Admin\AdminProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products/create', [App\Http\Controllers\Admin\AdminProductController::class, 'store'])->name('admin.products.store');