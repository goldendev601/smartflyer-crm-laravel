<?php

namespace Database\Seeders;

use App\Models\TaskRemindInterval;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskRemindIntervalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TaskRemindInterval::firstOrCreate(['days_before' =>1, 'description' => 'One day before due date']);
        TaskRemindInterval::firstOrCreate(['days_before' =>3, 'description' => 'Three days before due date']);
        TaskRemindInterval::firstOrCreate(['days_before' =>10, 'description' => 'Ten days before due date']);
    }
}
