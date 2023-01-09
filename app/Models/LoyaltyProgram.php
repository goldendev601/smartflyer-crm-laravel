<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoyaltyProgram
 * 
 * @property int $id
 * @property string $description
 *
 * @package App\Models
 */
class LoyaltyProgram extends Model
{
	protected $table = 'loyalty_program';
	public $timestamps = false;

	protected $fillable = [
		'description'
	];
}
