<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientEvent
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $event_date
 * @property int $event_frequency_id
 * @property int $client_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $notes
 * 
 * @property Client $client
 * @property EventFrequency $event_frequency
 *
 * @package App\Models
 */
class ClientEvent extends Model
{
	protected $table = 'client_event';

	protected $casts = [
		'event_frequency_id' => 'int',
		'client_id' => 'int'
	];

	protected $dates = [
		'event_date'
	];

	protected $fillable = [
		'name',
		'event_date',
		'event_frequency_id',
		'client_id',
		'notes'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function event_frequency()
	{
		return $this->belongsTo(EventFrequency::class);
	}
}
