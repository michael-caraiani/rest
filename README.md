# TiSuit Rest

[![Build Status](https://travis-ci.org/TiSuit/rest.svg?branch=master)](https://travis-ci.org/TiSuit/rest) [![Coverage Status](https://coveralls.io/repos/TiSuit/rest/badge.svg?branch=master&service=github)](https://coveralls.io/github/TiSuit/rest?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/60245d88-bd26-4df8-af19-749cb35dc4fe/mini.png)](https://insight.sensiolabs.com/projects/60245d88-bd26-4df8-af19-749cb35dc4fe) [![Latest Stable Version](https://poser.pugx.org/tisuit/rest/version)](https://packagist.org/packages/tisuit/rest) [![Latest Unstable Version](https://poser.pugx.org/tisuit/rest/v/unstable)](//packagist.org/packages/tisuit/rest) [![Total Downloads](https://poser.pugx.org/tisuit/rest/downloads)](https://packagist.org/packages/tisuit/rest) [![Monthly Downloads](https://poser.pugx.org/tisuit/rest/d/monthly)](https://packagist.org/packages/tisuit/rest) [![composer.lock available](https://poser.pugx.org/tisuit/rest/composerlock)](https://packagist.org/packages/tisuit/rest) [![License](https://poser.pugx.org/tisuit/rest/license)](https://packagist.org/packages/tisuit/rest)


This package contains JwtAuthentication class for "tisuit/core" and swagger package

## Installation

### Install via Composer

```php
composer require tisuit/rest
```

### Configure your app

Create config file `jwt.php`:

```php
<?php

declare(strict_types=1);

return [
	"path" => "/api",
	"passthrough" => ["/api/login"],
	"secret" => 'JWT_SECRET',
];
```

### Add new provider and middleware

1. `\TiSuit\Rest\Provider` into your providers list (`suit.php` config)
2. `JwtAuthentication` into your middlewares list (`suit.php` config)

## Documentation

Plugin is currently extended with the following plugins. Instructions on how to use them in your own application are linked below.

| Plugin | README |
| ------ | ------ |
| Slim JWT Auth | https://github.com/tuupola/slim-jwt-auth |
| Swagger PHP | https://github.com/zircote/swagger-php |
