<?php

namespace Database\Seeders;

use App\ModelsExtended\LoyaltyProgram;
use Illuminate\Database\Seeder;

class LoyaltyProgramSeeder extends Seeder
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
        LoyaltyProgram::upsert(
            [
                [ "id" => LoyaltyProgram::APPRECIATION, "description" => "APPRECIATION" ],
            ],
            [
                "id"
            ]
        );
    }
}
