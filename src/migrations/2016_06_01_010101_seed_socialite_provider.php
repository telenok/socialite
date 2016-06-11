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
            ],
        ]);
    }
}
