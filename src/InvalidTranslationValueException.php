<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidTranslationValueException extends TypeError
{
    public function __construct()
    {
        parent::__construct('A translation must be a string or an array.');
    }
}
