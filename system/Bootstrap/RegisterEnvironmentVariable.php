<?php

/**
 *   ___       _
 *  / _ \  ___| |_ ___  _ __  _   _
 * | | | |/ __| __/ _ \| '_ \| | | |
 * | |_| | (__| || (_) | |_) | |_| |
 *  \___/ \___|\__\___/| .__/ \__, |
 *                     |_|    |___/.
 *
 * @author  : Supian M <supianidz@gmail.com>
 *
 * @link    : www.octopy.xyz
 *
 * @license : MIT
 */

namespace Octopy\Bootstrap;

use Octopy\Application;
use Octopy\Config\DotEnv;
use Throwable;

class RegisterEnvironmentVariable
{
    /**
     * @param Application $app
     */
    public function bootstrap(Application $app)
    {
        try {
            $app->instance('env', new DotEnv($app->basepath().'.env'))->load();
        } catch (Throwable $exception) {
            throw $exception;
        }
    }
}
