Temporal
========
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
The MIT License (MIT). See the [license file](LICENSE) for details.
