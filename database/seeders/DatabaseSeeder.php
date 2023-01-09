<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // just testing purpose on local system
       User::firstOrCreate([
            'email' => 'admin@softpers.com',
        ], [
                'first_name' => 'Admin',
                'last_name' => 'softpers',
                'name' => 'Admin softpers',
                'email' => 'admin@smartflyer.com',
                'password' => Hash::make('admin123'),
            ]
        );

        $this->call([
            EventFrequencySeeder::class,
            RelationshipTypeSeeder::class,
            LoyaltyProgramSeeder::class,
            DietSeeder::class,
            AllergySeeder::class,
            TodoStatusSeeder::class,
            TaskRemindIntervalsSeeder::class,
            NotificationSeeder::class,
            InquiryStatusSeeder::class
        ]);

    }
}
