<?php

namespace App\ModelsExtended;

class TaskRemindInterval extends \App\Models\TaskRemindInterval
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function TaskIntervals()
    {
        return self::query();
    }
}
