<?php

declare(strict_types=1);

namespace TiSuit\Rest;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Tuupola\Middleware\JwtAuthentication;

class Provider implements ServiceProviderInterface
{
    public function register(Container $container): void
    {
        $container['jwt_middleware'] = function ($container) {
            $config = $container['config']('jwt', []);
            if (!($config['before'] ?? null)) {
                $config['before'] = function (ServerRequestInterface $request, ResponseInterface $response, array $args) use ($container) {
                    $container['user'] = (property_exists($request->getAttribute('token'), 'data') ? $request->getAttribute('token')->data : $request->getAttribute('token'));

                    return $request;
                };
            }

            return new JwtAuthentication($config);
        };
    }
}
