<?php

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

// Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');
// Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::resource('/portfolio', 'ProjectController')
    ->parameters(['portfolio' => 'project'])
    ->names('projects');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessagesController@store')->name('contact.store');


Auth::routes();
