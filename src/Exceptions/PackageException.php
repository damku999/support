<?php

declare(strict_types=1);

namespace Webmonks\Support\Exceptions;

use Exception;

/**
 * Class     PackageException
 *
 * @author   Webmonks <webmonks.in@gmail.com>
 */
class PackageException extends Exception
{
    public static function unspecifiedName(): self
    {
        return new static('You must specify the vendor/package name.');
    }
}
