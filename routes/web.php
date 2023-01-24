<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','Frontend\FrontendController@index');
Route::get('category','Frontend\FrontendController@category');
Route::get('view-category/{slug}','Frontend\FrontendController@viewcategory');
Route::get('category/{cat_slug}/{prod_slug}','Frontend\FrontendController@productview');
Auth::routes();
Route::post('add-to-cart','Frontend\Cartcontroller@addProduct');
Route::get('final-price','Frontend\Cartcontroller@finalproductprice');
Route::post('delete-cart-item','Frontend\Cartcontroller@deleteProduct');
Route::post('update-cart-item','Frontend\Cartcontroller@updateProduct');
Route::post('add-to-wishlist','Frontend\wishlistController@addtowishlist');
Route::post('delete-wishlist-item','Frontend\wishlistController@deletetowishlist');
Route::get('load-cart-data','Frontend\Cartcontroller@cartcount');
Route::get('load-wishlist-data','Frontend\wishlistController@wishlistcount');
Route::post('proceed-to-pay','Frontend\Checkoutcontroller@paywithrazorpay');
Route::post("pickupschedule",'Frontend\FrontendController@washingpickupschedule');
Route::get('/aboutus','Frontend\FrontendController@aboutus');
Route::get('/services','Frontend\FrontendController@service');
Route::get("/faq",'Frontend\FrontendController@washingfaq');
Route::get("/pricing",'Frontend\FrontendController@washingpricing');
Route::match(array('get','post'),"pickup",'Frontend\FrontendController@washingpickup');


Route::get("/privacy-policy",'Frontend\FrontendController@washingpprivacy');
Route::get("/terms-conditions",'Frontend\FrontendController@washingtermcondition');
//Google Login
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback',[App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
//Facebook Login
Route::get('/login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback',[App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
//Github Login
Route::get('/login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback',[App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

Route::middleware(['auth'])->group(function(){

    Route::get('my-profile/{id}','Frontend\UserController@edituser');
    Route::get('my-profile','Frontend\UserController@viewuser');
    Route::put('edit-profile/{id}','Frontend\UserController@updateuser');
    Route::get('delete-profile/{id}','Frontend\UserController@destroyuser');

    Route::get('cart','Frontend\Cartcontroller@viewcart');
    Route::get('checkout','Frontend\Checkoutcontroller@index');
    //Route::get('place-order','Frontend\Checkoutcontroller@placeorder');
    Route::post('place-order','Frontend\Checkoutcontroller@placeorder');
    Route::get('my-order','Frontend\UserController@index');
    Route::get('view-order/{id}','Frontend\UserController@vieworder');
    Route::get('wishlist','Frontend\wishlistController@index');
    Route::post('add-rating','Frontend\RatingController@add');
   
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function () {
   Route::get('/dashboard','Admin\FrontendController@index');
   Route::get('/categories','Admin\CategoryController@index');
   Route::get('/add-category','Admin\CategoryController@add');
   Route::post('insert-category','Admin\CategoryController@insert');
   Route::get('/edit-prod/{id}','Admin\CategoryController@edit');
   Route::put('/update-category/{id}','Admin\CategoryController@update');
   Route::get('/delete-category/{id}','Admin\CategoryController@destroy');
   Route::get('/products','Admin\ProductController@index');
   Route::get('/add-products','Admin\ProductController@add');
   Route::post('/insert-products','Admin\ProductController@insert');
   Route::get('/edit-product/{id}','Admin\ProductController@edit');
   Route::put('/update-product/{id}','Admin\ProductController@update');
   Route::get('/delete-product/{id}','Admin\ProductController@destroy');
   Route::get('orders','Admin\OrderController@index');
   Route::get('orders/pending-orders','Admin\OrderController@pendingorder');
   Route::get('orders/rejected-orders','Admin\OrderController@rejectedorder');
   Route::get('orders/completed-orders','Admin\OrderController@completedorder');
   Route::get('admin/view-order/{id}','Admin\OrderController@vieworder');
   Route::put('update-order/{id}','Admin\OrderController@updateorder');
   Route::get('order-history','Admin\OrderController@orderhistory');
   Route::get('users','Admin\dashboarduserController@index');
   Route::get('view-user/{id}','Admin\dashboarduserController@viewuser');
   Route::get('edit-user/{id}','Admin\dashboarduserController@edituser');
   Route::put('update-user/{id}','Admin\dashboarduserController@updateuser');
   Route::get('delete-user/{id}','Admin\dashboarduserController@destroyuser');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
