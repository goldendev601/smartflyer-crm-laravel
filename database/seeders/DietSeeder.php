<?php

namespace Database\Seeders;

use App\ModelsExtended\Diet;
use Illuminate\Database\Seeder;

class DietSeeder extends Seeder
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
        Diet::upsert(
            [
                [ "id" => Diet::Gluten_Free, "description" => "Gluten Free"],
                [ "id" => Diet::Vegetarian, "description" => "Vegetarian"],
                [ "id" => Diet::Kosher, "description" => "Kosher"],
                [ "id" => Diet::Pescatarian, "description" => "Pescatarian"],
                [ "id" => Diet::Vetan, "description" => "Vetan"],
                [ "id" => Diet::Halal, "description" => "Halal"],
                [ "id" => Diet::Low_Sodium, "description" => "Low Sodium"],
                [ "id" => Diet::Diabetic, "description" => "Diabetic"],
            ],
            [
                "id"
            ]
        );
    }
}
