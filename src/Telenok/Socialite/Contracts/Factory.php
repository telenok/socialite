<?php

namespace Telenok\Socialite\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Telenok\Socialite\Contracts\Provider
     */
    public function driver($driver = null);
}
