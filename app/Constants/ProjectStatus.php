<?php

namespace App\Constants;

class ProjectStatus
{
    public const OPEN = 'open';
    public const IN_PROGRESS = 'in progress';
    public const BLOCKED = 'blocked';
    public const CANCELLED = 'cancelled';
    public const COMPLETED = 'completed';

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
            self::BLOCKED,
            self::CANCELLED,
            self::COMPLETED,
        ];
    }
}
