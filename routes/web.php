<?php

Route::get('/', "PagesController@getHomePage");

Route::prefix('shop')->group(function(){
Route::get('/', "PagesController@getCategories");
Route::get('addToCart', "ShopController@addToCart");
Route::get('checkout', "ShopController@getCheckout");
Route::get('clearCart', "ShopController@clearCart");
Route::get('updateCart', "ShopController@updateCart");
Route::get('saveorder', "ShopController@SaveOrder");
Route::get('deleteProduct/{product_id}', "ShopController@deleteProduct"); 
Route::get('{cat_url}', "PagesController@getProducts");
Route::get('{cat_url}/{product_url}', "PagesController@getItem");
});

Route::prefix('user')->group(function(){ 
Route::get('logout', "UserController@logout"); 
Route::get('signin', "UserController@getSignin");
Route::post('userValidate', "UserController@userValidate");
Route::get('signup', "UserController@getSignup");
Route::post('userSignUp', "UserController@insertUser");
});

Route::middleware(['CheckAdmin'])->group(function(){
Route::prefix('cms')->group(function(){ 
    Route::get('dashboard', "CmsController@ShowDashboard"); 
    Route::resource('menu', "MenuController"); 
    Route::resource('content', "ContentController@ShowDashboard"); 
});  

    });


Route::get('{page_url}', "PagesController@getPageByUrl");
