<?php namespace Telenok\Socialite;

/**
 * @class Telenok.Socialite.PackageInfo
 * @extends Telenok.Core.Abstraction.Support.PackageInfo
 * Class describe package like key, base class etc
 */
class PackageInfo extends \Telenok\Core\Abstraction\Support\PackageInfo {

	protected $key = 'socialite';
	protected $baseClass = '\Telenok\Socialite\\';
}
