# classy

[![Integrate](https://github.com/ergebnis/classy/workflows/Integrate/badge.svg)](https://github.com/ergebnis/classy/actions)
[![Merge](https://github.com/ergebnis/classy/workflows/Merge/badge.svg)](https://github.com/ergebnis/classy/actions)
[![Release](https://github.com/ergebnis/classy/workflows/Release/badge.svg)](https://github.com/ergebnis/classy/actions)
[![Renew](https://github.com/ergebnis/classy/workflows/Renew/badge.svg)](https://github.com/ergebnis/classy/actions)

[![Code Coverage](https://codecov.io/gh/ergebnis/classy/branch/main/graph/badge.svg)](https://codecov.io/gh/ergebnis/classy)
[![Type Coverage](https://shepherd.dev/github/ergebnis/classy/coverage.svg)](https://shepherd.dev/github/ergebnis/classy)

[![Latest Stable Version](https://poser.pugx.org/ergebnis/classy/v/stable)](https://packagist.org/packages/ergebnis/classy)
[![Total Downloads](https://poser.pugx.org/ergebnis/classy/downloads)](https://packagist.org/packages/ergebnis/classy)
[![Monthly Downloads](http://poser.pugx.org/ergebnis/classy/d/monthly)](https://packagist.org/packages/ergebnis/classy)

This package provides a finder for classy constructs ([classes](https://www.php.net/manual/en/language.oop5.php), [enums](https://www.php.net/manual/en/language.types.enumerations.php), [interfaces](https://www.php.net/manual/en/language.oop5.interfaces.php), and [traits](https://www.php.net/manual/en/language.oop5.traits.php)).

## Installation

Run

```sh
composer require ergebnis/classy
```

## Usage

### Collect classy constructs from source code

Use `Classy\Constructs::fromSource()` to collect classy constructs in source code:

```php
<?php

declare(strict_types=1);

use Ergebnis\Classy;

$source = <<<'PHP'
<?php

namespace Example;

class Foo {}

enum Bar {}

interface Baz {}

trait Qux {}
PHP;

$constructs = Classy\Constructs::fromSource($source);

$names = array_map(static function (Classy\Construct $construct): string {
    return $construct->name();
}, $constructs);

var_dump($names); // ['Example\Bar', 'Example\Baz', 'Example\Foo', 'Example\Qux']
```

### Collect classy constructs from a directory

Use `Classy\Constructs::fromDirectory()` to collect classy constructs in a directory:

```php
<?php

declare(strict_types=1);

use Ergebnis\Classy;

$constructs = Classy\Constructs::fromDirectory(__DIR__ . '/example');

$names = array_map(static function (Classy\Construct $construct): string {
    return $construct->name();
}, $constructs);

var_dump($names); // ['Example\Bar', 'Example\Bar\Baz', 'Example\Foo\Bar\Baz']
```

## Changelog

The maintainers of this package record notable changes to this project in a [changelog](CHANGELOG.md).

## Contributing

The maintainers of this package suggest following the [contribution guide](.github/CONTRIBUTING.md).

## Code of Conduct

The maintainers of this package ask contributors to follow the [code of conduct](https://github.com/ergebnis/.github/blob/main/CODE_OF_CONDUCT.md).

## General Support Policy

The maintainers of this package provide limited support.

You can support the maintenance of this package by [sponsoring @localheinz](https://github.com/sponsors/localheinz) or [requesting an invoice for services related to this package](mailto:am@localheinz.com?subject=ergebnis/classy:%20Requesting%20invoice%20for%20services).

## PHP Version Support Policy

This package supports PHP versions with [active support](https://www.php.net/supported-versions.php).

The maintainers of this package add support for a PHP version following its initial release and drop support for a PHP version when it has reached its end of active support.

## Security Policy

This package has a [security policy](.github/SECURITY.md).

## License

This package uses the [MIT license](LICENSE.md).

## Credits

The algorithm for finding classes in PHP files in [`Constructs`](src/Constructs.php) has been adopted from [`Zend\File\ClassFileLocator`](https://github.com/zendframework/zend-file/blob/release-2.7.1/src/ClassFileLocator.php) (originally licensed under BSD-3-Clause).

## Social

Follow [@localheinz](https://twitter.com/intent/follow?screen_name=localheinz) and [@ergebnis](https://twitter.com/intent/follow?screen_name=ergebnis) on Twitter.
