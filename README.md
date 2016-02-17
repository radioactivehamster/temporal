Temporal
========
> A date & time utility library for PHP.

[![Packagist Version][PACKAGIST VERSION BADGE]][PACKAGIST PAGE] [![GitHub license][LICENSE BADGE]][LICENSE PAGE] [![Build Status][BUILD BADGE]][BUILD PAGE]

Install
-------

```sh
$ composer require radioactivehamster/temporal
```

Usage
-----

```php
<?php

use Temporal;

// Returns an object representing the current month.
$month = Calendar::month();

// Returns an object representing the current week.
$week = Calendar::week();

// Returns an object representing the current day.
$day = Calendar::day();
```

License
-------
The MIT License (Expat). See the [license file](LICENSE) for details.

[BUILD BADGE]: https://travis-ci.org/radioactivehamster/temporal.svg?branch=master
[BUILD PAGE]: https://travis-ci.org/radioactivehamster/temporal
[LICENSE BADGE]: https://img.shields.io/github/license/radioactivehamster/temporal.svg
[LICENSE PAGE]: https://github.com/radioactivehamster/temporal/blob/master/LICENSE
[PACKAGIST PAGE]: https://packagist.org/packages/radioactivehamster/temporal
[PACKAGIST VERSION BADGE]: https://img.shields.io/packagist/v/radioactivehamster/temporal.svg
