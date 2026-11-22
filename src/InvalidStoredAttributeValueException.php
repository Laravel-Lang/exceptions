<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidStoredAttributeValueException extends TypeError
{
    public function __construct()
    {
        parent::__construct('The stored value must be a scalar or null.');
    }
}
