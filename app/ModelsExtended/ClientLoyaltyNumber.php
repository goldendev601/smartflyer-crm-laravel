<?php

namespace App\ModelsExtended;

class ClientLoyaltyNumber extends \App\Models\ClientLoyaltyNumber
{


    public static function getClientLoyaltyNumber()
    {
        return self::query();
    }

}
