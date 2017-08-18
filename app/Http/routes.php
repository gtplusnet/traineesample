<?php
Route::any('/', 'TraineeController@abcd');

Route::any('/crud', 'TraineeController@crud');

Route::get('/student/add', 'TraineeController@add');
Route::post('/student/add', 'TraineeController@add_submit');

Route::get('/student/edit/{id}', 'TraineeController@edit');
Route::post('/student/edit/{id}', 'TraineeController@edit_submit');

Route::any('/student/delete/{id}', 'TraineeController@delete');

Route::get('/login', 'TraineeController@login');
Route::post('/login', 'TraineeController@login_submit');
Route::get('/logout', 'TraineeController@logout');