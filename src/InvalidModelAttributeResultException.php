<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidModelAttributeResultException extends TypeError
{
    public function __construct()
    {
        parent::__construct('Setting an attribute must return an Eloquent model.');
    }
}
