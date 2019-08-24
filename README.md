# Cdn77 PHPStan TestUtils Rule

[![Build Status](https://travis-ci.com/cdn77/PHPStanTestUtilsRule.svg)](https://travis-ci.com/cdn77/PHPStanTestUtilsRule)
[![Downloads](https://poser.pugx.org/cdn77/phpstan-test-utils-rule/d/total.svg)](https://packagist.org/packages/cdn77/phpstan-test-utils-rule)
[![Packagist](https://poser.pugx.org/cdn77/phpstan-test-utils-rule/v/stable.svg)](https://packagist.org/packages/cdn77/phpstan-test-utils-rule)
[![Licence](https://poser.pugx.org/cdn77/phpstan-test-utils-rule/license.svg)](https://packagist.org/packages/cdn77/phpstan-test-utils-rule)
[![Quality Score](https://scrutinizer-ci.com/g/cdn77/PHPStanTestUtilsRule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/cdn77/PHPStanTestUtilsRule)
[![Code Coverage](https://scrutinizer-ci.com/g/cdn77/PHPStanTestUtilsRule/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/simPod/PHPStanTestUtilsRule)

## Installation

* Require this project as composer dev dependency:

```
composer require --dev cdn77/phpstan-test-utils-rule
```

## CreateStub Extension

This extension helps PHPStan to determine return type from `createStub()` method provided by CreateStub Feature.

*The extension must be extended by your extension class and located in your code base because Features are enabled using traits and there's no reliable way for PHPStan to determine from which trait a method comes in a class.*

Create your extension that extends extension from this lib. Only implement `getClass()` method. The class returned is the one you injected the trait in. 

```php
<?php

declare(strict_types=1);

namespace Your\Project\Tests\Utils\PHPStan\Extension;

use Cdn77\TestUtils\PHPStan\CreateStubExtension;
use Your\Project\Tests\BaseTestCase;

final class CreateStub extends CreateStubExtension
{
    public function getClass() : string
    {
        return BaseTestCase::class;
    }
}
```

Create PHPStan config file for extensions:

```neon
services:
    -
        class: Your\Project\Tests\Utils\PHPStan\Extension\CreateStub
        tags:
            - phpstan.broker.dynamicMethodReturnTypeExtension
```

And register it in PHPStan by including it in PHPStan's config: 

```neon
includes:
    - tests/Utils/PHPStan/Extension/extension.neon
```
