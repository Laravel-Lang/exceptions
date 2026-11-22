<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;
use Throwable;

final class TranslationFileException extends RuntimeException
{
    public static function unableToRead(string $path, Throwable $previous): self
    {
        return new self("Unable to read translation file [$path]: {$previous->getMessage()}", 0, $previous);
    }

    public static function unableToWrite(string $path, Throwable $previous): self
    {
        return new self("Unable to write translation file [$path]: {$previous->getMessage()}", 0, $previous);
    }

    public static function unableToCopy(string $path): self
    {
        return new self("Unable to copy translation file: $path");
    }

    public static function unsupportedMergeFormat(): self
    {
        return new self('Only JSON translation files are merged.');
    }

    public static function invalidRoot(): self
    {
        return new self('The translation file must contain an array or object.');
    }

    public static function writeFailed(): self
    {
        return new self('The translation file could not be written.');
    }

    public static function invalidValues(): self
    {
        return new self('Translations must contain arrays, strings, finite numbers, booleans or null.');
    }
}
