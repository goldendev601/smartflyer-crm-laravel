<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Allergy
 * 
 * @property int $id
 * @property string $description
 * @property string|null $image_relative_url
 * 
 * @property Collection|Client[] $clients
 *
 * @package App\Models
 */
class Allergy extends Model
{
	protected $table = 'allergy';
	public $timestamps = false;

	protected $fillable = [
		'description',
		'image_relative_url'
	];

	public function clients()
	{
		return $this->belongsToMany(Client::class, 'client_allergy')
					->withPivot('id')
					->withTimestamps();
	}
}
