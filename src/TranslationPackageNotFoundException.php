<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;

final class TranslationPackageNotFoundException extends RuntimeException
{
    public function __construct(string $path)
    {
        parent::__construct("No translation packages found in [$path].");
    }
}
