<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidTranslationPluginException extends TypeError
{
    public static function invalidSourcePath(): self
    {
        return new self('A translation plugin file must have a string source path.');
    }

    public static function invalidTargetPath(): self
    {
        return new self('A translation plugin file must have a string target path.');
    }

    public static function invalidVendor(): self
    {
        return new self('The translation plugin vendor must be a string or null.');
    }

    public static function invalidVersion(): self
    {
        return new self('The translation plugin version must be a string or null.');
    }
}
