<?php

app('events')->listen('telenok.repository.setting', function($list)
{
    $list->push('App\Telenok\Socialite\Setting\Network\Controller');
});

app('events')->listen('telenok.repository.package', function($list)
{
    $list->push('Telenok\Socialite\PackageInfo');
});
