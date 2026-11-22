<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidTranslationFileContentException extends TypeError
{
    public static function expectedArray(string $path): self
    {
        return new self("The file [$path] must return an array.");
    }

    public static function expectedArrayForKey(string $path, string $key): self
    {
        return new self("The value for key [$key] in [$path] must be an array.");
    }
}
