<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $name
 * @property string $email
 * @property string|null $image_relative_url
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $phone
 * @property string|null $address
 * @property Carbon|null $date_of_birth
 * @property int $role_id
 * 
 * @property Role $role
 * @property Collection|Client[] $clients
 * @property Collection|Todo[] $todos
 * @property Collection|Notification[] $notifications
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $dates = [
		'email_verified_at',
		'date_of_birth'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'name',
		'email',
		'image_relative_url',
		'email_verified_at',
		'password',
		'remember_token',
		'phone',
		'address',
		'date_of_birth',
		'role_id'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function clients()
	{
		return $this->hasMany(Client::class, 'created_by_id');
	}

	public function todos()
	{
		return $this->hasMany(Todo::class, 'created_by_id');
	}

	public function notifications()
	{
		return $this->belongsToMany(Notification::class, 'user_notifications')
					->withPivot('id', 'permission')
					->withTimestamps();
	}
}
