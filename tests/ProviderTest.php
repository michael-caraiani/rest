<?php

declare(strict_types=1);

namespace TiSuit\Rest\Tests;

use PHPUnit\Framework\TestCase;
use TiSuit\Rest\Provider;

class ProviderTest extends TestCase
{
    protected $container;

    protected function setUp(): void
    {
        $dir = __DIR__.'/config/';
        $app = new \TiSuit\Core\App(['config_dir' => $dir]);
        $this->container = $app->getContainer();
        $this->container->register(new Provider());
    }

    public function testJwtAuthentication(): void
    {
        $this->assertInstanceOf('\Tuupola\Middleware\JwtAuthentication', $this->container->jwt_middlewire);
    }
}
