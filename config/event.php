<?php

app('events')->listen('telenok.repository.setting', function($list)
{
    $list->push('App\Telenok\Socialite\Setting\Network\Controller');
});
