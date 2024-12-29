<?php

namespace App\Constants;

class TaskStatus
{
    public const OPEN = 'open';
    public const IN_PROGRESS = 'in progress';
    public const PENDING = 'pending';
    public const WAITING_CLIENT = 'waiting client';
    public const BLOCKED = 'blocked';
    public const CLOSED = 'closed';
    

    /**
     * Get all statuses.
     *
     * @return array
     */
    public static function all(): array
    {
        return [
            self::OPEN,
            self::IN_PROGRESS,
            self::PENDING,
            self::WAITING_CLIENT,
            self::BLOCKED,
            self::CLOSED,
        ];
    }
}
