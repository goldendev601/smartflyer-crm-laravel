<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class InqueryStatus
 * 
 * @property int $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Inquiry[] $inquiries
 *
 * @package App\Models
 */
class InqueryStatus extends Model
{
    use HasFactory;

    protected $table = 'inquiry_status';

    protected $fillable = [
        'name'
    ];

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class);
    }
}
