<?php

declare(strict_types=1);

namespace LaravelLang\Exceptions;

use RuntimeException;
use Throwable;

final class SourcePublicationException extends RuntimeException
{
    public static function preparationFailed(): self
    {
        return new self('Unable to prepare the existing source files.');
    }

    public static function backupFailed(): self
    {
        return new self('Unable to back up the existing source files.');
    }

    public static function fromBackupFailure(Throwable $exception): self
    {
        if ($exception instanceof self) {
            return $exception;
        }

        return self::withOriginalCode($exception->getMessage(), $exception);
    }

    public static function publicationFailed(): self
    {
        return new self('Unable to publish the source files.');
    }

    public static function backupRestoreFailed(Throwable $exception): self
    {
        return self::withOriginalCode('Unable to restore the backup.', $exception);
    }

    public static function incompleteFileRemovalFailed(string $path, Throwable $exception): self
    {
        return self::withOriginalCode("Unable to remove incomplete file: $path.", $exception);
    }

    public static function restoreFailed(string $target, ?string $backup, Throwable $exception): self
    {
        $recovery = $backup !== null
            ? "The previous files are preserved at $backup."
            : "Incomplete files may remain at $target.";

        return new self("Unable to restore source files. $recovery", previous: $exception);
    }

    public static function publicationFailedAfterRollback(Throwable $exception): self
    {
        return new self('Unable to publish the source files; previous files were preserved.', 0, $exception);
    }

    protected static function withOriginalCode(string $message, Throwable $exception): self
    {
        $failure       = new self($message, previous: $exception);
        $failure->code = $exception->getCode();

        return $failure;
    }
}
