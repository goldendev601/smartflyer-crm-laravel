<?php

namespace Database\Seeders;

use App\ModelsExtended\RelationshipType;
use Illuminate\Database\Seeder;

class RelationshipTypeSeeder extends Seeder
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
        RelationshipType::upsert(
            [
                [ "id" => RelationshipType::Spouse, "description" => "Spouse" ],
                [ "id" => RelationshipType::Sibling, "description" => "Sibling" ],
                [ "id" => RelationshipType::Son, "description" => "Son" ],
                [ "id" => RelationshipType::Daughter, "description" => "Daughter" ],
                [ "id" => RelationshipType::Father, "description" => "Father" ],
                [ "id" => RelationshipType::Mother, "description" => "Mother" ],
                [ "id" => RelationshipType::Family, "description" => "Family" ],
                [ "id" => RelationshipType::Friend, "description" => "Friend" ],
                [ "id" => RelationshipType::Co_Worker, "description" => "Co-Worker" ],
                [ "id" => RelationshipType::Other, "description" => "Other" ],
            ],
            [
                "id"
            ]
        );
    }
}
