<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;

final class TranslationDirectoryNotFoundException extends RuntimeException
{
    public static function forPackage(): self
    {
        return new self('Directory does not exist.');
    }

    public static function forPackageLocales(): self
    {
        return new self('Locales directory does not exist.');
    }

    public static function forProjectLocales(): self
    {
        return new self('The "locales" directory does not exist.');
    }

    public static function forRequestedPath(string $path): self
    {
        return new self("Translation directory does not exist: $path.");
    }
}
