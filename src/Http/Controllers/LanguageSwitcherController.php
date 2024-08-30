<?php

namespace Backpack\LanguageSwitcher\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

/**
 * Class LanguageSwitcherController
 * @package Backpack\LanguageSwitcher\Http\Controllers
 */
class LanguageSwitcherController extends Controller
{
    /**
     * Set's the app locale
     */
    public function setLocale(?string $hncorePrefix = null, ?string $setLocale = null, ?string $locale = null): Redirector | RedirectResponse
    {
        $locale ??= $setLocale;

        if (in_array($locale, array_keys(config('hncore.crud.locales')))) {
            Session::put('hncore.language-switcher.locale', $locale);
        }

        return redirect()->back();
    }
}
