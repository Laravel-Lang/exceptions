<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;

final class DownloadArchiveException extends RuntimeException
{
    public static function zipExtensionRequired(): self
    {
        return new self('The PHP zip extension is required.');
    }

    public static function unreadable(): self
    {
        return new self('The downloaded file is not a readable ZIP archive.');
    }

    public static function emptyArchive(): self
    {
        return new self('The downloaded ZIP archive is empty.');
    }

    public static function invalidEntryPath(): self
    {
        return new self('Invalid ZIP entry path.');
    }

    public static function entryAttributesUnavailable(string $name): self
    {
        return new self("Unable to inspect ZIP entry attributes: $name.");
    }

    public static function symbolicLink(string $name): self
    {
        return new self("Symbolic links are not allowed in ZIP archives: $name.");
    }

    public static function extractionFailed(): self
    {
        return new self('Unable to extract the ZIP archive.');
    }
}
