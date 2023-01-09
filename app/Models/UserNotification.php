<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserNotification
 * 
 * @property int $id
 * @property int $user_id
 * @property int $notification_id
 * @property bool $permission
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Notification $notification
 * @property User $user
 *
 * @package App\Models
 */
class UserNotification extends Model
{
	protected $table = 'user_notifications';

	protected $casts = [
		'user_id' => 'int',
		'notification_id' => 'int',
		'permission' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'notification_id',
		'permission'
	];

	public function notification()
	{
		return $this->belongsTo(Notification::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
