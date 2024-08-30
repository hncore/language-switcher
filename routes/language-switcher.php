<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Backpack\LanguageSwitcher Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the Backpack\LanguageSwitcher package.
|
*/
if(config('hncore.language-switcher.setup_routes', true)) {
    Route::group([
        'middleware' => ['web', 'throttle:60,1'],
    ], function () {
        // set locale
        Route::any('{hncore_prefix?}/{setLocale}/{locale?}', [\Backpack\LanguageSwitcher\Http\Controllers\LanguageSwitcherController::class, 'setLocale'])
            ->name('language-switcher.locale')
            ->whereIn('setLocale', array_merge(['set-locale'],array_keys(config('hncore.crud.locales'))))
            ->whereIn('hncore_prefix', ['set-locale', config('hncore.base.route_prefix')]);
    });
}

