<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use LaravelLang\LocaleList\Locale;
use LaravelLang\NativeLocaleNames\LocaleData;
use RuntimeException;

class UnknownLocaleException extends RuntimeException
{
    public function __construct(Locale|LocaleData|string $locale)
    {
        parent::__construct('Unknown locale: ' . $this->stringify($locale));
    }

    protected function stringify(LocaleData|Locale|string $locale): string
    {
        return match (true) {
            $locale instanceof LocaleData => $locale->code,
            $locale instanceof Locale     => $locale->value,
            default                       => $locale,
        };
    }
}
