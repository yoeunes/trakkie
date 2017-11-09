<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the API routes for your application as
| the routes are automatically authenticated using the API guard and
| loaded automatically by this application's RouteServiceProvider.
|
*/

Route::group([
    'middleware' => 'auth:api'
], function () {
    Route::get('artists', function () {
        return status(402);
    });
    Route::get('tracks', 'API\TrackController@index');
    Route::get('albums', 'API\AlbumController@index');
    Route::get('artists', 'API\ArtistController@index');
});
