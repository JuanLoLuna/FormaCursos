<?php

Route::get('/', 'MainController@show');
Route::post('/Submit','FormInfoController@store');
Route::get('/EndOfForm', 'MainController@showEnd');