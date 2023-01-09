<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $id
 * @property string $label
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notifications';

	protected $fillable = [
		'label',
		'value'
	];

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_notifications')
					->withPivot('id', 'permission')
					->withTimestamps();
	}
}
