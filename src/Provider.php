<?php

declare(strict_types=1);

namespace TiSuit\Rest;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Slim\Middleware\JwtAuthentication;

class Provider implements ServiceProviderInterface
{
    public function register(Container $container): void
    {
        $container['JwtAuthentication'] = function ($container) {
            $config = $container['config']('jwt', []);

            return new JwtAuthentication($config);
        };
    }
}
