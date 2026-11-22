<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use LaravelLang\Models\Eloquent\Translation;
use UnexpectedValueException;

final class InvalidTranslationModelException extends UnexpectedValueException
{
    public function __construct(string $class)
    {
        parent::__construct("Translation model '$class' must extend '" . Translation::class . "'.");
    }
}
