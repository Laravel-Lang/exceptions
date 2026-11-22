<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;

final class SourcePathException extends RuntimeException
{
    public static function workingDirectoryUnavailable(): self
    {
        return new self('Unable to resolve the current working directory.');
    }

    public static function destinationNormalizationFailed(): self
    {
        return new self('Unable to normalize the destination directory.');
    }

    public static function unsafeRelativePath(string $path): self
    {
        return new self("Unsafe relative path: $path.");
    }

    public static function unexpectedDirectory(string $path): self
    {
        return new self("Expected a directory without symbolic links: $path.");
    }

    public static function outsideProjectRoot(string $path): self
    {
        return new self("Directory escapes the project root: $path.");
    }

    public static function inspectionFailed(string $directory): self
    {
        return new self('Unable to inspect source files in: ' . $directory);
    }

    public static function symbolicLink(string $path): self
    {
        return new self('Symbolic links are not allowed in source files: ' . $path);
    }
}
