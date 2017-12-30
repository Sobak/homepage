<?php

Route::paginate('/', 'BlogController@index')->name('index');

Route::get('blog/{post}', 'BlogController@show')->name('post');

Route::paginate('kategoria/{category}', 'BlogController@category')->name('category');

Route::get('portfolio', 'ProjectController@index')->name('projects');
Route::get('portfolio/{project}', 'ProjectController@show')->name('project');

Route::paginate('tag/{tag}', 'BlogController@tag')->name('tag');

Route::get('{page}', 'PageController@show')->name('page');
