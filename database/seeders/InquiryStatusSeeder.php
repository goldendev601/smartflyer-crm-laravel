<?php

namespace Database\Seeders;

use App\Models\InqueryStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InquiryStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inqueryStatuses = ['Pending', 'Approved', 'Rejected'];
        foreach ($inqueryStatuses as $inqueryStatus) {
            $inqueryStatus =  InqueryStatus::firstOrCreate([
                'name' => $inqueryStatus
            ]);
        }
    }
}
