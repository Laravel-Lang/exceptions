<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use Illuminate\Http\Client\RequestException;
use RuntimeException;

final class SourceDownloadException extends RuntimeException
{
    public static function invalidUrl(): self
    {
        return new self('URL must be an HTTP or HTTPS address.');
    }

    public static function requestFailed(RequestException $exception): self
    {
        return new self($exception->getMessage(), $exception->getCode(), $exception);
    }
}
