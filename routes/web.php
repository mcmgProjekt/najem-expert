<?php
    use App\Http\Controllers\LocaleController;

    // global routes
    // common routes used everywhere

    // Switch between the included languages
    Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

    // public frontend routes
    Route::group(['as' => 'public.'], function () {
        includeRouteFiles(__DIR__.'/public/');
    });

    // secured frontend routes
    Route::group(['prefix' => 'app', 'as' => 'frontend.'], function () {
        includeRouteFiles(__DIR__.'/frontend/');
    });

    // backend routes
    // only accessed by users with type `admin`
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
        includeRouteFiles(__DIR__.'/backend/');
    });
