<?php
Route::bind('songs',function($slug){
    return App\Songs::whereSlug($slug)->first();
});

Route::get('/', 'SongController@index');
Route::get('songs/{slurp}','SongController@show');
Route::get('songs/update','SongController@updateLyrics');
Route::get('songs/{slurp}/edit','SongController@editLyrics');

Route::patch('songs/{slug}', 'SongController@update');