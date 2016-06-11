<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSocialiteProvider extends Migration {

    public function up()
    {
        // Social network setting
        (new \App\Telenok\Core\Model\System\Setting())->storeOrUpdate([
            'title' => ['en' => 'Socialite settings', 'ru' => 'Настройки социальных сетей'],
            'active' => 1,
            'code' => 'telenok.socialite',
            'value' => [
                'services.github.client_id' => "",
                'services.github.client_secret' => "",
                'services.github.redirect' => "",
                'services.github.enabled' => 0,

                'services.facebook.client_id' => "",
                'services.facebook.client_secret' => "",
                'services.facebook.redirect' => "",
                'services.facebook.enabled' => 0,

                'services.google.client_id' => "",
                'services.google.client_secret' => "",
                'services.google.redirect' => "",
                'services.google.enabled' => 0,

                'services.linkedin.client_id' => "",
                'services.linkedin.client_secret' => "",
                'services.linkedin.redirect' => "",
                'services.linkedin.enabled' => 0,

                'services.twitter.client_id' => "",
                'services.twitter.client_secret' => "",
                'services.twitter.redirect' => "",
                'services.twitter.enabled' => 0,

                'services.bitbucket.client_id' => "",
                'services.bitbucket.client_secret' => "",
                'services.bitbucket.redirect' => "",
                'services.bitbucket.enabled' => 0,
            ],
        ]);
    }
}
