<?php

namespace App\ModelsExtended;

class UserNotification extends \App\Models\UserNotification
{

    protected $fillable = ['user_id','notification_id','permission'];

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
}
