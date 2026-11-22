<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use Symfony\Component\Console\Exception\InvalidArgumentException;

final class InvalidLocalesArgumentException extends InvalidArgumentException
{
    public static function expectedArray(): self
    {
        return new self('The locales argument must be an array.');
    }

    public static function expectedStrings(): self
    {
        return new self('Each locale must be a string.');
    }
}
