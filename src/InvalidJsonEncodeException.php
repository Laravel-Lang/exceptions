<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use JsonException;

final class InvalidJsonEncodeException extends JsonException
{
    public static function from(JsonException $previous): self
    {
        return new self($previous->getMessage(), $previous->getCode(), $previous);
    }
}
