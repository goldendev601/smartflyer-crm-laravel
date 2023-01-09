<?php

namespace App\ModelsExtended;

class InqueryStatus extends \App\Models\InqueryStatus
{
    public const Pending = 1;
    public const Approved = 2;
    public const Rejected = 3;

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function InqueryStatus()
    {
        return self::query();
    }

}
