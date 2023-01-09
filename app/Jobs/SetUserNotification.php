<?php

namespace App\Jobs;

use App\ModelsExtended\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SetUserNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $notifications = Notification::all();
        foreach ($notifications as $notification) {
            $this->user->userNotification()->updateOrCreate(
                [
                    'user_id' => $this->user->id,
                    'notification_id' => $notification->id
                ],
                [
                    'permission' => $notification->value == 'remind_due_tasks'
                ]
            );
        }

    }
}
