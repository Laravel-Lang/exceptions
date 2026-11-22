<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidLocaleInputException extends TypeError
{
    public static function forTranslationKey(): self
    {
        return new self('The translation locale key must be a Locale, a LocaleData, a string, or null.');
    }

    public static function forRouteParameter(): self
    {
        return new self('The locale route parameter must be a Locale, a LocaleData, or a string');
    }

    public static function forSession(): self
    {
        return new self('The session locale must be an integer, a string, or null');
    }
}
