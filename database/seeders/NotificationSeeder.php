<?php

namespace Database\Seeders;

use App\ModelsExtended\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notifications = [
            'remind_due_tasks' =>'Remind me of due tasks',
            'remind_new_tasks' => 'Remind me of new tasks',
            'account_recent_activity' => 'Account recent activity'
        ];
        foreach ($notifications as $key => $notification){
              Notification::firstOrCreate([
                'label' =>$notification,
                'value' => $key
            ]);
        }
    }
}
