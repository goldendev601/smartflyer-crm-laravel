<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientDislike
 * 
 * @property int $id
 * @property string $description
 * @property int $client_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 *
 * @package App\Models
 */
class ClientDislike extends Model
{
	protected $table = 'client_dislikes';

	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'description',
		'client_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}
}
