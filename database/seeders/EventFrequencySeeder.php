<?php

namespace Database\Seeders;

use App\ModelsExtended\EventFrequency;
use Illuminate\Database\Seeder;

class EventFrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       self::createOrUpdate();
    }

    public static function createOrUpdate()
    {
        EventFrequency::upsert(
            [
                [ "id" => EventFrequency::Doesnt_repeat, "description" => "Doesn't repeat" ],
                [ "id" => EventFrequency::Yearly, "description" => "Yearly" ],
                [ "id" => EventFrequency::Monthly, "description" => "Monthly" ],
                [ "id" => EventFrequency::Every_two_months, "description" => "Every two months" ],
                [ "id" => EventFrequency::Every_three_months, "description" => "Every three months" ],
                [ "id" => EventFrequency::Every_six_months, "description" => "Every six months" ],
            ],
            [
                "id"
            ]
        );
    }
}
