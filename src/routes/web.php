<?php


Route::group(['namespace' => 'RaivoVaisla\TvnetFeed\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('/home', function () {
        return redirect('/');
    });

    Auth::routes(['verify' => true]);
    Route::post('/email/validate', 'UserController@validateEmail', 'verification.validate');

    Route::group(['middleware' => ['verified', 'auth'], 'as' => 'feed.'], function () {
        Route::get('/feed', 'FeedController@getFeed', 'get');
    });
});