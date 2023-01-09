<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class CompanyCommunication
 * 
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int|null $created_by_id
 * 
 * @property User $user
 *
 * @package App\Models
 */

class CompanyCommunication extends Model
{
    use HasFactory;

    protected $table = 'company_communications';

    protected $casts = [
        'created_by_id' => 'int'
    ];

    protected $fillable = [
        'title',
        'description',
        'created_by_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
