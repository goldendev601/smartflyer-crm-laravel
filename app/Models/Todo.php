<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $deadline
 * @property string|null $details
 * @property int|null $todo_status_id
 * @property int|null $task_remind_interval_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int|null $created_by_id
 * 
 * @property User|null $user
 * @property TaskRemindInterval|null $task_remind_interval
 * @property TodoStatus|null $todo_status
 *
 * @package App\Models
 */
class Todo extends Model
{
	protected $table = 'todo';

	protected $casts = [
		'todo_status_id' => 'int',
		'task_remind_interval_id' => 'int',
		'created_by_id' => 'int'
	];

	protected $dates = [
		'deadline'
	];

	protected $fillable = [
		'name',
		'deadline',
		'details',
		'todo_status_id',
		'task_remind_interval_id',
		'created_by_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by_id');
	}

	public function task_remind_interval()
	{
		return $this->belongsTo(TaskRemindInterval::class);
	}

	public function todo_status()
	{
		return $this->belongsTo(TodoStatus::class);
	}
}
