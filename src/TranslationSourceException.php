<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;
use Throwable;

final class TranslationSourceException extends RuntimeException
{
    public static function unableToRead(string $source, Throwable $previous): self
    {
        return new self("Unable to read translation source [$source]: {$previous->getMessage()}", 0, $previous);
    }

    public static function invalidKey(string $source): self
    {
        return new self("The translation source [$source] contains a key that is neither a string nor an integer.");
    }

    public static function missingKeys(string $source): self
    {
        return new self("The translation source [$source] contains no keys.");
    }

    public static function sourcesNotFound(string $path): self
    {
        return new self("No translation sources found in [$path].");
    }
}
