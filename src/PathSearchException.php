<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;

final class PathSearchException extends RuntimeException
{
    public static function matching(string $pattern): self
    {
        return new self("Unable to find paths matching [$pattern].");
    }

    public static function forVendorTranslations(): self
    {
        return new self('Unable to find vendor translation directories.');
    }
}
