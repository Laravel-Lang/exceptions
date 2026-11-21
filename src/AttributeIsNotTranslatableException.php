<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use Exception;

use function implode;
use function sprintf;

final class AttributeIsNotTranslatableException extends Exception
{
    /** @param array<array-key, string> $available */
    public function __construct(string $column, array $available)
    {
        parent::__construct(
            sprintf(
                'Cannot translate attribute `%s` as it\'s not on of the translatable attributes: `%s`.',
                $column,
                implode(', ', $available)
            )
        );
    }
}
