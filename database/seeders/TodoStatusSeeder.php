<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TodoStatus;

class TodoStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todoStatuses = ['Open','Completed'];
        foreach ($todoStatuses as $todoStatus){
            $todoStatus =  TodoStatus::firstOrCreate([
                'name' =>$todoStatus
            ]);
        }


    }
}
