<?php

//Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product Categories
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tags
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::post('product-tags/media', 'ProductTagController@storeMedia')->name('product-tags.storeMedia');
    Route::post('product-tags/ckmedia', 'ProductTagController@storeCKEditorImages')->name('product-tags.storeCKEditorImages');
    Route::resource('product-tags', 'ProductTagController');

    // Products
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    // Contactos
    Route::delete('contactos/destroy', 'ContactoController@massDestroy')->name('contactos.massDestroy');
    Route::resource('contactos', 'ContactoController', ['except' => ['create', 'store', 'edit', 'update']]);

    // Marcas
    Route::delete('marcas/destroy', 'MarcaController@massDestroy')->name('marcas.massDestroy');
    Route::post('marcas/media', 'MarcaController@storeMedia')->name('marcas.storeMedia');
    Route::post('marcas/ckmedia', 'MarcaController@storeCKEditorImages')->name('marcas.storeCKEditorImages');
    Route::resource('marcas', 'MarcaController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});




Route::get('/','InicioController@index')->name('inicio');


//PRODUCTOS

Route::get('productos','ProductosController@index')->name('productos');



Route::get('producto/{slug}', ['uses' => 'ProductosController@detalles_productos', 'as' => 'productos.slug']);

Route::get('detalles-productos','ProductosController@detalles_productos')->name('detalles-productos');

Route::get('product','InicioController@buscar')->name('search.productos');

Route::get('producto','InicioController@mostrar_producto')->name('mostrar.productos');

Route::get('marcas','MarcasController@index')->name('marcas');

Route::get('nosotros','AboutController@index')->name('about');

Route::get('contacto','ContactoController@index')->name('contacto');

Route::post('mensaje','ContactoController@mensaje')->name('mensaje');

Route::get('send-email','MailController@sendEmail')->name('email');