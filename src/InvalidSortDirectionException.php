<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use InvalidArgumentException;

final class InvalidSortDirectionException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('Order direction must be a SortDirection, "asc" or "desc".');
    }
}
