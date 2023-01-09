<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientContact
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $date_of_birth
 * @property int $relationship_type_id
 * @property int $client_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 * @property RelationshipType $relationship_type
 *
 * @package App\Models
 */
class ClientContact extends Model
{
	protected $table = 'client_contact';

	protected $casts = [
		'relationship_type_id' => 'int',
		'client_id' => 'int'
	];

	protected $dates = [
		'date_of_birth'
	];

	protected $fillable = [
		'name',
		'email',
		'date_of_birth',
		'relationship_type_id',
		'client_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function relationship_type()
	{
		return $this->belongsTo(RelationshipType::class);
	}
}
