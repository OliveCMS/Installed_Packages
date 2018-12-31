# Installed_Packages

get installed composer packages

## Installation

Install the latest version with

```
$ composer require olive-cms/installed-packages
```

## Basic Usage

``` php
$vendor_path = '/path/to/vendor';
require_once $vendor_path . '/autoload.php';
use Olive\Tools\Packages;

$list = Packages::getPackages($vendor_path);
```

## Requirements

- PHP 5.5+.

## License

olive-cms/installed-packages is licensed under the [MIT license](http://opensource.org/licenses/MIT).
