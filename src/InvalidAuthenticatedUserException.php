<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use TypeError;

final class InvalidAuthenticatedUserException extends TypeError
{
    public function __construct()
    {
        parent::__construct('The authenticated user must be an Eloquent model');
    }
}
