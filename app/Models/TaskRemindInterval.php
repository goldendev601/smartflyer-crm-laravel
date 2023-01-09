<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TaskRemindInterval
 * 
 * @property int $id
 * @property int $days_before
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Todo[] $todos
 *
 * @package App\Models
 */
class TaskRemindInterval extends Model
{
	protected $table = 'task_remind_intervals';

	protected $casts = [
		'days_before' => 'int'
	];

	protected $fillable = [
		'days_before',
		'description'
	];

	public function todos()
	{
		return $this->hasMany(Todo::class);
	}
}
