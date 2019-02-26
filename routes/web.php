<?php

Route::get('/', "PagesController@getHomePage");

Route::prefix('shop')->group(function(){

Route::get('/', "PagesController@getCategories");

Route::get('addToCart', "ShopController@addToCart");

Route::get('{cat_url}', "PagesController@getProducts");

Route::get('{cat_url}/{product_url}', "PagesController@getItem");
});





