<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Product Categories
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Product Tags
    Route::post('product-tags/media', 'ProductTagApiController@storeMedia')->name('product-tags.storeMedia');
    Route::apiResource('product-tags', 'ProductTagApiController');

    // Products
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // Contactos
    Route::apiResource('contactos', 'ContactoApiController', ['except' => ['store', 'update']]);

    // Marcas
    Route::post('marcas/media', 'MarcaApiController@storeMedia')->name('marcas.storeMedia');
    Route::apiResource('marcas', 'MarcaApiController');
});
