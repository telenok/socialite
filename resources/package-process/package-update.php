<?php

    app()->register('Telenok\Socialite\SocialiteServiceProvider');

    $this->line('Examine app.php');

    $this->call('telenok:package', [
        'action' => 'add-provider',
        '--provider' => 'Telenok\Socialite\SocialiteServiceProvider',
    ]);

    $this->line('Package new classes copy');

    $this->call('vendor:publish', [
        '--tag' => ['resourcesapp'],
        '--provider' => 'Telenok\Socialite\SocialiteServiceProvider',
    ]);

    $this->line('Package migrating', true);

    $this->call('migrate', [
        '--path' => 'vendor/telenok/socialite/src/migrations',
        '--force' => true
    ]);