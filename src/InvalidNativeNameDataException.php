<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use UnexpectedValueException;

final class InvalidNativeNameDataException extends UnexpectedValueException
{
    /** @param 'country'|'currency'|'locale' $dataset */
    public static function invalidLocaleCode(int $locale, string $dataset): self
    {
        return new self("Invalid locale code [$locale] in the $dataset data.");
    }

    /** @param 'country'|'currency'|'locale' $dataset */
    public static function invalidRow(string $locale, string $dataset): self
    {
        return new self("Invalid $dataset data for [$locale].");
    }
}
