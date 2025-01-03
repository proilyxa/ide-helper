<?php

declare(strict_types=1);

namespace Swoole;

/**
 * Class \Swoole\Thread.
 *
 * This class is available only when PHP is compiled with Zend Thread Safety (ZTS) enabled and Swoole is installed with
 * the "--enable-swoole-thread" configuration option.
 *
 * @since 6.0.0
 */
final class Thread
{
    public const HARDWARE_CONCURRENCY = 12;

    public const API_NAME = 'POSIX Threads';

    public const SCHED_OTHER = 0;

    public const SCHED_FIFO = 1;

    public const SCHED_RR = 2;

    public const SCHED_BATCH = 3;

    public const SCHED_ISO = 4;

    public const SCHED_IDLE = 5;

    public const SCHED_DEADLINE = 6;

    /**
     * Thread ID. Default is 0.
     *
     * @readonly
     */
    public int $id = 0;

    public function __construct(string $script_file, mixed ...$args)
    {
    }

    public function join(): bool
    {
    }

    public function joinable(): bool
    {
    }

    public function getExitStatus(): int
    {
    }

    public function detach(): bool
    {
    }

    public static function getArguments(): ?array
    {
    }

    public static function getId(): int
    {
    }

    public static function getInfo(): array
    {
    }

    public static function setName(string $name): bool
    {
    }

    public static function setAffinity(array $cpu_settings): bool
    {
    }

    public static function getAffinity(): array
    {
    }

    public static function setPriority(int $priority, int $policy = 0): bool
    {
    }

    public static function getPriority(): array
    {
    }

    public static function getNativeId(): int
    {
    }
}
