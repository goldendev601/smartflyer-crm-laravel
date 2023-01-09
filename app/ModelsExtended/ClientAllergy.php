<?php

namespace App\ModelsExtended;

/**
 * @property Allergy $allergy
 * @property Client $client
 */
class ClientAllergy extends \App\Models\ClientAllergy
{
    public function allergy()
    {
        return $this->belongsTo(Allergy::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}