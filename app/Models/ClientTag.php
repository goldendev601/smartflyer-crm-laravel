<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientTag
 * 
 * @property int $id
 * @property string $tag
 * @property int $client_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 *
 * @package App\Models
 */
class ClientTag extends Model
{
	protected $table = 'client_tag';

	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'tag',
		'client_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}
}
