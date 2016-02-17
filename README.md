Temporal [![Build Status][BUILD BADGE]][BUILD PAGE]
===================================================
> A date & time utility library for PHP.

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
