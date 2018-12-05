<?php

use Illuminate\Http\Request;

Route::get('/seats', 'TheaterSeatsController@getSeats');
Route::get('/getSeat/{id}', 'TheaterSeatsController@getSeatById');
Route::put('/bron', 'TheaterSeatsController@bronPlace');
Route::put('/removeBron', 'TheaterSeatsController@removeBron');
Route::put('/resetBron', 'TheaterSeatsController@resetBron');
Route::put('/bookPlaces', 'TheaterSeatsController@bookPlace');
