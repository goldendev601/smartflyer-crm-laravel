<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientDiet
 * 
 * @property int $id
 * @property int $client_id
 * @property int $diet_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 * @property Diet $diet
 *
 * @package App\Models
 */
class ClientDiet extends Model
{
	protected $table = 'client_diet';

	protected $casts = [
		'client_id' => 'int',
		'diet_id' => 'int'
	];

	protected $fillable = [
		'client_id',
		'diet_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function diet()
	{
		return $this->belongsTo(Diet::class);
	}
}
