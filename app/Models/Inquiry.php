<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Inquiry
 * 
 * @property int $id
 * @property string $name
 * @property string $emai
 * @property string|null $business_type
 * @property int|null $smartflyer_agreement
 * @property int|null $elevate_agreement
 *  @property int|null $inquiry_status_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property InqueryStatus|null $inquery_status
 * @property InquiryDetails|null $inquiry_details
 *
 * @package App\Models
 */
class Inquiry extends Model
{
    use HasFactory;

    protected $table = 'inquiries';

    protected $casts = [
        'inquiry_status_id' => 'int',
    ];

    protected $fillable = [
        'name',
        'email',
        'business_type',
        'smartflyer_agreement',
        'elevate_agreement',
        'inquiry_status_id',
    ];

    public function inquery_status()
    {
        return $this->belongsTo(InqueryStatus::class);
    }

    public function inquiry_details()
    {
        return $this->hasOne(InquiryDetails::class);
    }
}
