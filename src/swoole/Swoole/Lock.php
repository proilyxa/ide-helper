<?php

declare(strict_types=1);

namespace Swoole;

class Lock
{
    public const FILELOCK = 2;

    public const MUTEX = 3;

    public const SEM = 4;

    public const RWLOCK = 1;

    public const SPINLOCK = 5;

    public $errCode = 0;

    public function __construct(int $type = self::MUTEX, string $filename = '')
    {
    }

    public function __destruct()
    {
    }

    public function lock(): bool
    {
    }

    public function lockwait(float $timeout = 1): bool
    {
    }

    public function trylock(): bool
    {
    }

    public function lock_read(): bool
    {
    }

    public function trylock_read(): bool
    {
    }

    public function unlock(): bool
    {
    }

    public function destroy(): void
    {
    }
}
