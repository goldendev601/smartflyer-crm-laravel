<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientLoyaltyNumber
 * 
 * @property int $id
 * @property string $number
 * @property int $client_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $loyalty_program
 *
 * @package App\Models
 */
class ClientLoyaltyNumber extends Model
{
	protected $table = 'client_loyalty_number';

	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'number',
		'client_id',
		'loyalty_program'
	];
}
