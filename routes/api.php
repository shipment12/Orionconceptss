<?php




Route::group([

    'middleware' =>'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@Signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('user', 'AuthController@user');
    Route::post('logout', 'AuthController@logout');
    Route::get('users', 'UserController@index')->middleware('isPublisher');
    Route::get('users/{id}', 'UserController@show')->middleware('isPublisherOrSelf');
    

});
