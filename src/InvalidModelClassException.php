<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use UnexpectedValueException;

final class InvalidModelClassException extends UnexpectedValueException
{
    public function __construct(string $class, string $expected)
    {
        parent::__construct("Model `$class` must extend `$expected`.");
    }
}
