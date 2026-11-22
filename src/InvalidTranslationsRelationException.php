<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidTranslationsRelationException extends TypeError
{
    public static function expectedCollection(): self
    {
        return new self('The translations relation must be a collection.');
    }

    public static function expectedTranslationModels(): self
    {
        return new self('The translations relation must contain only translation models.');
    }
}
