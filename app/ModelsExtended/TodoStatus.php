<?php

namespace App\ModelsExtended;

class TodoStatus extends \App\Models\TodoStatus
{
    public const Open = 1;
    public const Completed = 2;
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function TodoStatus()
    {
        return self::query();
    }

}
