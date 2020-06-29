<?php

Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        // Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('/', 'AdminController@index')->name('index');
        });
    }
);