<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Client
{
    public const MSG_OOB = 1;

    public const MSG_PEEK = 2;

    public const MSG_DONTWAIT = 64;

    public const MSG_WAITALL = 256;

    public $errCode = 0;

    public $errMsg = '';

    public $fd = -1;

    public $type = 1;

    public $setting;

    public $connected = false;

    private $socket;

    public function __construct(int $type)
    {
    }

    public function __destruct()
    {
    }

    public function set(array $settings): bool
    {
    }

    public function connect(string $host, int $port = 0, float $timeout = 0, int $sock_flag = 0): bool
    {
    }

    public function recv(float $timeout = 0): string|false
    {
    }

    /**
     * @param int $length The default value (65535) is hardcoded as constant SW_PHP_CLIENT_BUFFER_SIZE in Swoole.
     */
    public function peek(int $length = 65535): string|false
    {
    }

    public function send(string $data, float $timeout = 0): int|false
    {
    }

    public function sendfile(string $filename, int $offset = 0, int $length = 0): bool
    {
    }

    public function sendto(string $address, int $port, string $data): bool
    {
    }

    public function recvfrom(int $length, mixed &$address, mixed &$port = 0): string|false
    {
    }

    public function enableSSL(): bool
    {
    }

    public function getPeerCert(): string|false
    {
    }

    public function verifyPeerCert(bool $allow_self_signed = false): bool
    {
    }

    public function isConnected(): bool
    {
    }

    public function getsockname(): array|false
    {
    }

    public function getpeername(): array|false
    {
    }

    public function close(): bool
    {
    }

    public function exportSocket(): Socket|false
    {
    }
}
