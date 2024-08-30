<?php

namespace Backpack\LanguageSwitcher;

use Illuminate\Support\ServiceProvider;

class LanguageSwitcherServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'hncore';
    protected $packageName = 'language-switcher';
    protected $commands = [];
}
