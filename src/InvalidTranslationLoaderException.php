<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use Illuminate\Contracts\Translation\Loader;
use TypeError;

final class InvalidTranslationLoaderException extends TypeError
{
    public function __construct()
    {
        parent::__construct('The translation.loader binding must implement ' . Loader::class);
    }
}
