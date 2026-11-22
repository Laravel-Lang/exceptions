<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidTranslationKeyException extends TypeError
{
    public function __construct()
    {
        parent::__construct('Translation keys must be scalar or null.');
    }
}
