# Cdn77 PHPStan TestUtils Rule

[![Build Status](https://travis-ci.com/cdn77/PHPStanTestUtilsRule.svg?branch=master)](https://travis-ci.com/cdn77/PHPStanTestUtilsRule)
[![Downloads](https://poser.pugx.org/cdn77/phpstan-test-utils-rule/d/total.svg)](https://packagist.org/packages/cdn77/phpstan-test-utils-rule)
[![Packagist](https://poser.pugx.org/cdn77/phpstan-test-utils-rule/v/stable.svg)](https://packagist.org/packages/cdn77/phpstan-test-utils-rule)
[![Licence](https://poser.pugx.org/cdn77/phpstan-test-utils-rule/license.svg)](https://packagist.org/packages/cdn77/phpstan-test-utils-rule)
[![Quality Score](https://scrutinizer-ci.com/g/cdn77/PHPStanTestUtilsRule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/cdn77/PHPStanTestUtilsRule)
[![Code Coverage](https://scrutinizer-ci.com/g/cdn77/PHPStanTestUtilsRule/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/simPod/PHPStanTestUtilsRule)

Extension helps PHPStan to determine return type from `makeStub()` method provided by MakeStub Feature in [Cdn77 Test Utils](https://github.com/cdn77/TestUtils).

## Installation

* Require this project as composer dev dependency:

```
composer require --dev cdn77/phpstan-test-utils-rule
```

Extension supports [PHPStan Extension Installer](https://github.com/phpstan/extension-installer) so it will be installed automatically on composer require.

If you do not use the installer, you have to include `extension.neon` in your PHPStan config.
