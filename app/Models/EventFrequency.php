<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventFrequency
 * 
 * @property int $id
 * @property string $description
 * 
 * @property Collection|ClientEvent[] $client_events
 *
 * @package App\Models
 */
class EventFrequency extends Model
{
	protected $table = 'event_frequency';
	public $timestamps = false;

	protected $fillable = [
		'description'
	];

	public function client_events()
	{
		return $this->hasMany(ClientEvent::class);
	}
}
