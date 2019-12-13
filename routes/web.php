<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


/*
-----------------------------
Frontend Routes
-----------------------------
*/






//home and product routes
use App\Customer;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'HomeController@index')->name('home');
Route::get('product/{id}','Front\ProductController@details')->name('product.details');
Route::get('products/{id?}','Front\ProductController@index')->name('front.product.index');
Route::get('brand/{id?}','Front\ProductController@brand')->name('front.product.brand');
Route::get('search','Front\ProductController@find')->name('front.product.find');

//subscribe route
Route::post('subscribe','SubscribeController@store')->name('subscribe');



//cart view routes
Route::get('cart','Front\ProductController@cart')->name('cart');
Route::get('clear-cart','Front\ProductController@clear')->name('clear.cart');

//guest store and payment route
Route::post('customer/store','CustomerController@store')->name('customer.store');
Route::get('payment/{customerId}/{orderId}','Front\CheckoutController@payment')->name('payment')->middleware('customer');

//checkout page route
Route::get('checkout','Front\CheckoutController@index')->name('checkout')->middleware('customer');

//add to cart route
Route::get('ajax/add-to-cart/{product_id}','Front\AjaxController@addToCart')->name('ajax.addToCart');
Route::get('remove-cart/{product_id}','Front\AjaxController@delete')->name('remove.cart');
Route::post('update-cart/{product_id}','Front\AjaxController@update')->name('update.cart');

//contact us
Route::post('contact','SubscribeController@contact_store')->name('contact.store');

//about and contact route
Route::get('about', function () {
    return view('frontend.about');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('privacy-policy', function () {
    return view('frontend.policy');
});


//Customer routes
Route::get('registration', 'Customer\RegisterController@showRegistrationForm')->name('user.register');
Route::post('registration', 'CustomerController@create')->name('user.register.submit');
Route::get('account', 'CustomerController@view')->name('user.view')->middleware('customer');
Route::get('account/info', 'CustomerController@show')->name('user.details')->middleware('customer');
Route::get('account/{id}/edit', 'CustomerController@edit')->name('user.info.edit')->middleware('customer');
Route::put('account/{id}','CustomerController@update')->name('user.info.update')->middleware('customer');

//MyOrders
Route::get('my-orders','OrderController@myorder')->name('myorder.index')->middleware('customer');
Route::get('my-orders/{id}','OrderController@myorder_details')->name('myorder.show')->middleware('customer');

//Customer routes


//multi-auth routes
Route::get('signin', 'Customer\LoginController@showLoginForm')->name('user.login');
Route::post('signin', 'Customer\LoginController@login')->name('user.login.submit');
Route::get('signout', 'Customer\LoginController@logout')->name('user.logout');
Route::get('reset', 'Customer\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
Route::post('reset/pass', 'Customer\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
Route::get('pass/reset/{token}', 'Customer\ResetPasswordController@showResetForm')->name('user.password.reset');
Route::post('pass/reset', 'Customer\ResetPasswordController@reset')->name('user.password.update');
//multi-auth routes

//special offer route
Route::get('offer', 'CampaignController@offer')->name('offer');


Route::get('discount/{id}', 'CouponController@discount')->name('discount');






/*
-----------------------------
Dashboard Route Group Start
-----------------------------
*/
Route::middleware('auth')->prefix('admin')->group(function (){

//dashboard route
    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::get('test','DashboardController@test')->name('test');

//category routes
    Route::resource('category','CategoryController');
    Route::post('category/{id}/restore','CategoryController@restore')->name('category.restore');
    Route::delete('category/{id}/delete','CategoryController@delete')->name('category.delete');

//brand routes
    Route::resource('brand','BrandController');
    Route::post('brand/{id}/restore','BrandController@restore')->name('brand.restore');
    Route::delete('brand/{id}/delete','BrandController@delete')->name('brand.delete');

//product routes
    Route::resource('product','ProductController');
    Route::post('product/{id}/restore','ProductController@restore')->name('product.restore');
    Route::delete('product/{id}/delete','ProductController@delete')->name('product.delete');
    Route::get('product/{image_id}/delete','ProductController@delete_image')->name('product.delete.image');

//Coupon routes
    Route::resource('coupon','CouponController');
    Route::post('coupon/{id}/restore','CouponController@restore')->name('coupon.restore');
    Route::delete('coupon/{id}/delete','CouponController@delete')->name('coupon.delete');

//Campaign routes
    Route::resource('campaign','CampaignController');
    Route::post('campaign/{id}/restore','CampaignController@restore')->name('campaign.restore');
    Route::delete('campaign/{id}/delete','CampaignController@delete')->name('campaign.delete');

//User routes
    Route::resource('user','UserController');
    Route::post('user/{id}/restore','UserController@restore')->name('user.restore');
    Route::delete('user/{id}/delete','UserController@delete')->name('user.delete');
    Route::get('user/info','UserController@show')->name('user.info');

//Orders routes
    Route::get('orders','OrderController@index')->name('order.index');
    Route::get('orders/{id}','OrderController@show')->name('order.show');
    Route::get('orders/{id}/change-status/{status}','OrderController@change_status')->name('changeStatus');
    Route::get('order/export','OrderController@export')->name('order.export');

//customer view route
    Route::get('customers','CustomerController@index')->name('customer.index');
    Route::get('customers/{id}','CustomerController@info')->name('customer.show');

//setting routes
    Route::resource('setting','SettingController');
    Route::post('setting/add','SettingController@add')->name('setting.add');

//subscribers view route
    Route::get('subscribers','SubscribeController@index')->name('subscribers');
});

Auth::routes(['register' => false]);

/* End of Dashboard Route Group */
