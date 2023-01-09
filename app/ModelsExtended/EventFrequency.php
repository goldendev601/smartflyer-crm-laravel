<?php

namespace App\ModelsExtended;

class EventFrequency extends \App\Models\EventFrequency
{
    public const Doesnt_repeat = 1;
    public const Yearly = 2;
    public const Monthly = 3;
    public const Every_two_months = 4;
    public const Every_three_months = 5;
    public const Every_six_months = 6;
}