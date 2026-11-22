<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidTranslationStatusException extends TypeError
{
    public static function invalidExcludes(string $path): self
    {
        return new self("The excludes setting in [$path] must be an array.");
    }

    public static function invalidTranslationValues(string $path): self
    {
        return new self("Translation values in [$path] must be scalar.");
    }
}
