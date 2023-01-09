<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agent
 * 
 * @property int $id
 * @property string|null $email
 * @property string $name
 * @property string|null $weblink
 * @property string|null $address
 * @property string|null $image_url
 * @property string|null $phone_number
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Agent extends Model
{
	protected $table = 'agent';

	protected $fillable = [
		'email',
		'name',
		'weblink',
		'address',
		'image_url',
		'phone_number'
	];
}
