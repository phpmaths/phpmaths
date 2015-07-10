# Structure

## 1. PSR style

Example:

```php
<?php namespace PhpMaths\PhpMaths;

class Trigonometry
{
    public static function sin($param)
    {
        return sin($param);
    }
}
```

Usage:

```php
<?php

use PhpMaths\PhpMaths as M;

$result = M\Trigonometry::sin(60);

print "The result is: {$result}\n";
```

Alternative usage:

```php
<?php

use PhpMaths\PhpMaths\Trigonometry as T;

$result = T::sin(60);

print "The result is: {$result}\n";
```

| Pro  | Con                                                             |
|------|-----------------------------------------------------------------|
| PSR! | Invocations are long unless 1 `use` statement per class is used |
|      | All class methods are `static`; they're plain functions         |

## 2. Namespaced functions

Example:

```php
<?php namespace PhpMaths\PhpMaths\Trigonometry;

function sin($param)
{
    return \sin($param);
}
```

Usage:

```php
<?php

include_once 'libraries\phpmaths\src\Trigonometry.php';
use PhpMaths\PhpMaths\Trigonometry as T;

$result = T\sin(60);

print "The result is: {$result}\n";
```

| Pro                        | Con                                     |
|----------------------------|-----------------------------------------|
| No `static` methods        | No Composer autoloading                 |
| This should please purists | Need to include file manually           |
| Invocation saves 1 byte    | Extra installation/maintenance overhead |

## 3. Global functions

Example:

```php
<?php # Trigonometry.php

function cot($param)
{
    return 1 / tan($param);
}
```

Usage:

```php
<?php

include_once 'libraries\phpmaths\src\Trigonometry.php';

$result = cot(60);

print "The result is: {$result}\n";
```

| Pro                        | Con                                     |
|----------------------------|-----------------------------------------|
| No `static` methods        | No Composer auto-loading                |
| This should please purists | Need to include file manually           |
| Cheapest invocation        | Extra installation/maintenance overhead |
|                            | No aliasing possible                    |
