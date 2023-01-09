<?php

namespace App\ModelsExtended;

class ClientEvent extends \App\Models\ClientEvent
{

    public static function getClienEvents()
    {
        return self::query();
    }
}
