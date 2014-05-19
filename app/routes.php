<?php

use ML\JsonLD\JsonLD;

/*
|--------------------------------------------------------------------------
| New hypermedia powered routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('/route', 'RouteController@index');
Route::get('/stations', 'StationController@index');

Route::get('/stations/{id}', function($id){ return $id; });
Route::get('/stations/{id}/arrivals', function($id){ return $id; });
Route::get('/stations/{id}/departures', function($id){ return $id; });
Route::get('/parkings/{location_id}', function($location_id){ return $location_id;});
Route::get('/vehicle', function(){ });
Route::get('/parkings', function(){ });

/*
|--------------------------------------------------------------------------
| API tests
|--------------------------------------------------------------------------
|
*/

Route::get('/apitest', 'ApiController@test');

/*
|--------------------------------------------------------------------------
| Classic iRail redirection messages
|--------------------------------------------------------------------------
|
*/

// Classic: irail.be/route/Station/StationTwo/?time=timestamp&date=date&direction=depart
Route::get('/route/{departure_station}/{destination_station}/', 'ClassicRedirectController@redirectHomeRoute');
// Classic: irail.be/board
Route::get('/board', 'ClassicRedirectController@redirectBoard');
// Classic: irail.be/board/Station
Route::get('/board/{station}', 'ClassicRedirectController@redirectBoardSingleStation');
// Classic: irail.be/board/Station/StationTwo
Route::get('/board/{station}/{station2}', 'ClassicRedirectController@redirectBoardTwoStations');
// Classic: irail.be/settings
Route::get('/settings', 'ClassicRedirectController@redirectSettings');