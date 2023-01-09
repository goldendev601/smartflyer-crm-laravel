<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientAllergy
 * 
 * @property int $id
 * @property int $client_id
 * @property int $allergy_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Allergy $allergy
 * @property Client $client
 *
 * @package App\Models
 */
class ClientAllergy extends Model
{
	protected $table = 'client_allergy';

	protected $casts = [
		'client_id' => 'int',
		'allergy_id' => 'int'
	];

	protected $fillable = [
		'client_id',
		'allergy_id'
	];

	public function allergy()
	{
		return $this->belongsTo(Allergy::class);
	}

	public function client()
	{
		return $this->belongsTo(Client::class);
	}
}
