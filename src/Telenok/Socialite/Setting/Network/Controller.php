<?php namespace Telenok\Socialite\Setting\Network;

/**
 * @class Telenok.Socialite.Setting.Network.Controller
 * Controller base setting.
 * 
 * @extends Telenok.Core.Abstraction.Setting.Controller
 */
class Controller extends \App\Telenok\Core\Abstraction\Setting\Controller {

    /**
     * @protected
     * @property {String} $key
     * Controller's key.
     * @member Telenok.Socialite.Setting.Network.Controller
     */
    protected $key = 'telenok.socialite';
    
    /**
     * @protected
     * @property {Array} $defaultValue
     * Default values for current settings.
     * @member Telenok.Socialite.Setting.Network.Controller
     */
    protected $defaultValue = [
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
    ];
}
