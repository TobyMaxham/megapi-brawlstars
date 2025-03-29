<?php

namespace TobyMaxham\MegApiBrawlStars;

use Illuminate\Support\ServiceProvider;
use Zhylon\MegapiClient\Support\Facades\MegApi;

class MegApiBsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        MegApi::register(new BrawlStarsEndpoint, 'brawlstars');
    }
}
