<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientDocument
 * 
 * @property int $id
 * @property string $document_relative_url
 * @property string $document_name
 * @property int $client_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 *
 * @package App\Models
 */
class ClientDocument extends Model
{
	protected $table = 'client_document';

	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'document_relative_url',
		'document_name',
		'client_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}
}
