<?php

namespace App\ModelsExtended;

/**
 * @property User $user
 */
class CompanyCommunication extends \App\Models\CompanyCommunication
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function getCompCommuni()
    {
        return self::query()->orderBy('created_at', 'desc');
    }
    
    public static function getTopCompCommuni()
    {
        return self::getCompCommuni()->orderBy('created_at', 'desc')->limit(3)->get();
    }

    public static function getCompCommuniById(int $id)
    {
        return self::getCompCommuni()->find($id);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
