<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidTranslationSkipPatternException extends TypeError
{
    public function __construct()
    {
        parent::__construct('Translation skip patterns must be convertible to strings.');
    }
}
