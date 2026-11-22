<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use LaravelLang\LocaleList\Locale;
use LaravelLang\Locales\Facades\Locales;
use LaravelLang\NativeLocaleNames\LocaleData;
use RuntimeException;

final class UnknownLocaleException extends RuntimeException
{
    public function __construct(Locale|LocaleData|string|null $locale)
    {
        parent::__construct('Unknown locale: ' . $this->stringify($locale));
    }

    protected function stringify(Locale|LocaleData|string|null $locale): string
    {
        return Locales::normalize($locale) ?? 'null';
    }
}
