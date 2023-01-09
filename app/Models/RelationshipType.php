<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RelationshipType
 * 
 * @property int $id
 * @property string $description
 * 
 * @property Collection|ClientContact[] $client_contacts
 *
 * @package App\Models
 */
class RelationshipType extends Model
{
	protected $table = 'relationship_type';
	public $timestamps = false;

	protected $fillable = [
		'description'
	];

	public function client_contacts()
	{
		return $this->hasMany(ClientContact::class);
	}
}
