<?php

Route::get('/', "PagesController@getHomePage");

Route::prefix('shop')->group(function(){

Route::get('/', "PagesController@getCategories");

Route::get('addToCart', "ShopController@addToCart");

Route::get('checkout', "ShopController@getCheckout");

Route::get('clearCart', "ShopController@clearCart");

Route::get('updateCart', "ShopController@updateCart");

Route::get('deleteProduct/{product_id}', "ShopController@deleteProduct"); 

Route::get('{cat_url}', "PagesController@getProducts");

Route::get('{cat_url}/{product_url}', "PagesController@getItem");
});

Route::prefix('user')->group(function(){
    
Route::get('signin', "UserController@getSignin");
});





