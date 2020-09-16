<?php

Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
            Route::get('/', 'AdminController@index')->name('index');

            Route::get('invoices/print/{id}', ['as' => 'invoice.print', 'uses' => 'InvoiceController@print']);
            Route::get('invoices/pdf/{id}', ['as' => 'invoice.pdf', 'uses' => 'InvoiceController@pdf']);
            Route::get('invoices/send_to_email/{id}', ['as' => 'invoice.send_to_email', 'uses' => 'InvoiceController@send_to_email']);

            Route::resources([
                'invoices'      => InvoiceController::class,
                'invoices-ajax' => InvoiceAjaxController::class,
                'users'         => UserController::class,
            ]);

            Route::get('settings', 'SettingController@index')->name('settings.index');
            Route::post('settings', 'SettingController@update')->name('settings.update');
        });
    }
);
