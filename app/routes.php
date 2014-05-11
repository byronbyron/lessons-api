<?php

Route::get('lessons/{lessons}/tags', 'TagsController@index');
Route::resource('lessons', 'LessonsController');
Route::resource('tags', 'TagsController', ['only' => ['index', 'show']]);