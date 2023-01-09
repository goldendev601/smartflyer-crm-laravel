<?php

namespace App\ModelsExtended;

/**
 * @property string | null $image_url
 */
class Allergy extends \App\Models\Allergy
{
    public const Eggs = 1;
    public const Peanuts = 2;
    public const Diary = 3;
    public const Soy = 4;
    public const Fish = 5;
    public const Shellfish = 6;
    public const Wheat = 7;
    public const Pollen = 8;
    public const Medicine = 9;
    public const Dust = 10;
    public const Pets = 11;
    public const Latex = 12;
    public const Bug_bites = 13;

    protected $appends = [ 'image_url'  ];

    /**
     * @return ?string
     */
    public function getImageUrlAttribute(): ?string
    {
        if( $this->image_relative_url )
            return asset( $this->image_relative_url );

        return  $this->image_relative_url;
    }
}