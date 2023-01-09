<?php

namespace App\Console\Commands;

use App\ModelsExtended\Todo;
use App\ModelsExtended\TodoStatus;
use App\Notifications\TaskReminderNotification;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;

class TaskReminderToUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:task_reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' schedule reminder email that reminds user about task that are about to expire';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Todo::with('user', 'todoStatus', 'taskReminderIntervals')
            ->whereNotNull('task_remind_interval_id')
            ->where('todo_status_id', TodoStatus::Open)
            ->whereHas('user.notification', function ( Builder $query) {
                $query->where(['value' => 'remind_due_tasks', 'permission' => true ]);
            })
        ->get()->each(function (Todo $todo) {

            $reminder_day = $todo->deadline->addDays(- $todo->task_remind_interval->days_before);
                if (now()->isSameDay($reminder_day)) {
                $todo->user->notify(new TaskReminderNotification($todo));
            }
        });

        return 0;
    }
}
