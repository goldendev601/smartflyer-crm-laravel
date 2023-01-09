<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TodoStatus
 * 
 * @property int $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Todo[] $todos
 *
 * @package App\Models
 */
class TodoStatus extends Model
{
	protected $table = 'todo_statuses';

	protected $fillable = [
		'name'
	];

	public function todos()
	{
		return $this->hasMany(Todo::class);
	}
}
