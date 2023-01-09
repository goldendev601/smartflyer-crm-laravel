<?php

namespace App\ModelsExtended;

class FAQ extends \App\Models\FAQ
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function getFaqs()
    {
        return self::query()->orderBy('created_at', 'desc');
    }

    public static function getTopFaqs()
    {
        return self::getFaqs()->orderBy('created_at', 'desc')->limit(7)->get();
    }

    public static function getFaqById(int $id)
    {
        return self::getFaqs()->find($id);
    }
}
