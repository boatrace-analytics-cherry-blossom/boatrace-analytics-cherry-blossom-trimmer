# Boatrace Analytics Cherry Blossom Trimmer

[![Build Status](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer/workflows/tests/badge.svg)](https://github.com/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer/badge.svg?branch=master)](https://coveralls.io/github/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer?branch=master)
[![Latest Stable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer/v/stable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer/v/unstable)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer)
[![License](https://poser.pugx.org/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer/license)](https://packagist.org/packages/boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer)

## Installation
```
$ composer require boatrace-analytics-cherry-blossom/boatrace-analytics-cherry-blossom-trimmer
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Analytics\Cherry\Blossom\Trimmer;

var_dump(Trimmer::trim()); // NULL
var_dump(Trimmer::trim(null)); // NULL
var_dump(Trimmer::trim(' 競艇 ')); // string(6) "競艇"

var_dump(Trimmer::ltrim()); // NULL
var_dump(Trimmer::ltrim(null)); // NULL
var_dump(Trimmer::ltrim(' 競艇 ')); // string(7) "競艇 "

var_dump(Trimmer::rtrim()); // NULL
var_dump(Trimmer::rtrim(null)); // NULL
var_dump(Trimmer::rtrim(' 競艇 ')); // string(7) " 競艇"
```

## License
The Boatrace Analytics Cherry Blossom Trimmer is open source software licensed under the [MIT license](LICENSE).
