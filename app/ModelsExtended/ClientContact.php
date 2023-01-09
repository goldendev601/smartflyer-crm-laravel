<?php

namespace App\ModelsExtended;

use Carbon\Carbon;

class ClientContact extends \App\Models\ClientContact
{

    public static function getClienContact()
    {
        return self::query();
    }
}
