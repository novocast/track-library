<?php

// Resource routes automatically assign methods for CRUDing a resource, in this case tracks
Route::resource('track', 'TrackController');

// Route group lets you group together
Route::group(['prefix' => 'track']) {
    Route::post('search', 'TrackController@search');
    Route::get('random', 'TrackController@random');    
}