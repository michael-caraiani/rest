# TiSuit Rest

[![Build Status](https://travis-ci.org/TiSuit/rest.svg?branch=master)](https://travis-ci.org/TiSuit/rest) [![Coverage Status](https://coveralls.io/repos/TiSuit/rest/badge.svg?branch=master&service=github)](https://coveralls.io/github/TiSuit/rest?branch=master) [![Latest Stable Version](https://poser.pugx.org/tisuit/rest/version)](https://packagist.org/packages/tisuit/rest) [![Latest Unstable Version](https://poser.pugx.org/tisuit/rest/v/unstable)](//packagist.org/packages/tisuit/rest) [![Total Downloads](https://poser.pugx.org/tisuit/rest/downloads)](https://packagist.org/packages/tisuit/rest) [![Monthly Downloads](https://poser.pugx.org/tisuit/rest/d/monthly)](https://packagist.org/packages/tisuit/rest) [![composer.lock available](https://poser.pugx.org/tisuit/rest/composerlock)](https://packagist.org/packages/tisuit/rest) [![License](https://poser.pugx.org/tisuit/rest/license)](https://packagist.org/packages/tisuit/rest)

REST bundle for [tisuit](http://tisuit.titanium.codes)

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

Documentation: [tuupola/slim-jwt-auth](https://github.com/tuupola/slim-jwt-auth/tree/3.x#usage)

### Add new provider and middleware

1. `\TiSuit\Rest\Provider` into your providers list (`suit.php` config)
2. `jwt_middleware` into your middlewares list (`suit.php` config)
