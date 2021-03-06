<?php

Route::paginate('/', 'BlogController@index')->name('index');

Route::get('blog/{post}', 'BlogController@show')->name('post');

Route::get('feed', 'FeedController@index')->name('feed');

Route::paginate('kategoria/{category}', 'BlogController@category')->name('category');

Route::get('kontakt', 'ContactController@show')->middleware('stateful')->name('contact');
Route::post('kontakt', 'ContactController@send')->middleware('stateful');

Route::get('portfolio', 'ProjectController@index')->name('projects');
Route::get('portfolio/{project}', 'ProjectController@show')->name('project');

Route::paginate('szukaj', 'BlogController@search')->name('search');

Route::paginate('tag/{tag}', 'BlogController@tag')->name('tag');

Route::get('{page}', 'PageController@show')->name('page');
