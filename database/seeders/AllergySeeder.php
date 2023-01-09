<?php

namespace Database\Seeders;

use App\ModelsExtended\Allergy;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
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
        Allergy::upsert(
            [
                [ "id" => Allergy::Eggs, "description" => "Eggs","image_relative_url" => 'assets/allergens-icons/icon-eggs.svg' ],
                [ "id" => Allergy::Peanuts, "description" => "Peanuts" ,"image_relative_url" => 'assets/allergens-icons/icon-peanuts.svg'],

                [ "id" => Allergy::Diary, "description" => "Diary" ,"image_relative_url" => 'assets/allergens-icons/icon-milk.svg'],

                [ "id" => Allergy::Soy, "description" => "Soy" ,"image_relative_url" => 'assets/allergens-icons/icon-soybeans.svg'],
                [ "id" => Allergy::Fish, "description" => "Fish" ,"image_relative_url" => 'assets/allergens-icons/icon-fish.svg'],
                [ "id" => Allergy::Shellfish, "description" => "Shellfish" ,"image_relative_url" => 'assets/allergens-icons/icon-shellfish.svg'],
                [ "id" => Allergy::Wheat, "description" => "Wheat" ,"image_relative_url" => 'assets/allergens-icons/icon-wheat.svg'],
                [ "id" => Allergy::Pollen, "description" => "Pollen" ,"image_relative_url" => 'assets/allergens-icons/icon-pollen.svg'],
                [ "id" => Allergy::Medicine, "description" => "Medicine" ,"image_relative_url" => 'assets/allergens-icons/icon-medicine.svg'],
                [ "id" => Allergy::Dust, "description" => "Dust" ,"image_relative_url" => 'assets/allergens-icons/icon-dust.svg'],
                [ "id" => Allergy::Pets, "description" => "Pets" ,"image_relative_url" => 'assets/allergens-icons/icon-pets.svg'],
                [ "id" => Allergy::Latex, "description" => "Latex" ,"image_relative_url" => 'assets/allergens-icons/icon-latex.svg'],

                [ "id" => Allergy::Bug_bites, "description" => "Bug bites" ,"image_relative_url" => 'assets/allergens-icons/icon-bugs.svg'],
            ],
            [
                "id"
            ]
        );
    }
}
