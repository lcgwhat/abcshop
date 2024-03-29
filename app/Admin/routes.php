<?php

use App\Admin\Controllers\CategoriesController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->get('products', 'ProductsController@index');

    $router->get('products/create', 'ProductsController@create');
    $router->post('products', 'ProductsController@store');

    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');

    $router->get('coupon_codes', 'CouponCodesController@index');

    $router->post('coupon_codes', 'CouponCodesController@store');
    $router->get('coupon_codes/create', 'CouponCodesController@create');
    $router->get('coupon_codes/{id}/edit', 'CouponCodesController@edit');
    $router->put('coupon_codes/{id}', 'CouponCodesController@update');
    $router->delete('coupon_codes/{id}', 'CouponCodesController@destroy');


    $router->get('categories', 'CategoriesController@index');
    $router->get('categories/create', 'CategoriesController@create');
    $router->get('categories/{id}/edit', 'CategoriesController@edit');
    $router->post('categories', 'CategoriesController@store');
    $router->put('categories/{id}', 'CategoriesController@update');
    $router->delete('categories/{id}', 'CategoriesController@destroy');
    $router->get('api/categories', 'CategoriesController@apiIndex');

    $router->get('sku', 'SkuController@index');
    $router->get('sku/create', 'SkuController@create');
    $router->get('sku/{id}/edit', 'SkuController@edit');
    $router->post('sku', 'SkuController@store');
    $router->put('sku/{id}', 'SkuController@update');
    $router->delete('sku/{id}', 'SkuController@destroy');
});
