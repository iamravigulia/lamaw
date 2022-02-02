<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! lamaw';
// });

// Route::get('lamaw/test', 'EdgeWizz\lamaw\Controllers\lamawController@test')->name('test');

Route::post('fmt/Lamaw/store', 'EdgeWizz\Lamaw\Controllers\LamawController@store')->name('fmt.lamaw.store');

Route::post('fmt/lamaw/csv', 'EdgeWizz\Lamaw\Controllers\LamawController@csv_upload')->name('fmt.lamaw.csv');

Route::post('fmt/Lamaw/update/{id}', 'EdgeWizz\Lamaw\Controllers\LamawController@update')->name('fmt.lamaw.update');
Route::any('fmt/lamaw/inactive/{id}',  'EdgeWizz\Lamaw\Controllers\LamawController@inactive')->name('fmt.lamaw.inactive');
Route::any('fmt/lamaw/active/{id}',  'EdgeWizz\Lamaw\Controllers\LamawController@active')->name('fmt.lamaw.active');
