<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Diet
 * 
 * @property int $id
 * @property string $description
 * 
 * @property Collection|Client[] $clients
 *
 * @package App\Models
 */
class Diet extends Model
{
	protected $table = 'diet';
	public $timestamps = false;

	protected $fillable = [
		'description'
	];

	public function clients()
	{
		return $this->belongsToMany(Client::class)
					->withPivot('id')
					->withTimestamps();
	}
}
