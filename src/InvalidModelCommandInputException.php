<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use InvalidArgumentException;

final class InvalidModelCommandInputException extends InvalidArgumentException
{
    public static function invalidModel(): self
    {
        return new self('The model argument must be a class name.');
    }

    public static function invalidColumns(): self
    {
        return new self('The columns option must be an array of column names.');
    }

    public static function invalidColumnName(): self
    {
        return new self('Column names must be strings.');
    }
}
