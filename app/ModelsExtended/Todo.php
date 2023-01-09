<?php

namespace App\ModelsExtended;

/**
 * @property User|null $user
 */
class Todo extends \App\Models\Todo
{
    public const Open = 1;
    public const Completed = 2;

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function myTodos()
    {
        return self::query()
            ->where('created_by_id', auth()->id());
    }

    public function todoStatus()
    {
        return $this->belongsTo(TodoStatus::class, 'todo_status_id');
    }

    public function taskReminderIntervals()
    {
        return $this->belongsTo(TaskRemindInterval::class, 'task_remind_interval_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
