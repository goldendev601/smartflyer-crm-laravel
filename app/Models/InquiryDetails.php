<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class InquiryDetails
 * 
 * @property int $id
 * @property int|null $inquiry_id
 * @property string $name
 * @property string $emai
 * @property int $type_of_business
 * @property int|null $worked_with_sf
 * @property string|null $other_travel_agency
 * @property float|null $commission_percentage_offer
 * @property string|null $commission_handled
 * @property string|null $current_booking_way
 * @property int|null $member_of_virtuoso
 * @property int|null $interested_in_learning
 * 
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Inquiry|null $inquery
 *
 * @package App\Models
 */

class InquiryDetails extends Model
{
    use HasFactory;

    protected $table = 'inquiry_details';

    protected $casts = [
        'inquiry_id' => 'int',
        'type_of_business' => 'int',
        'worked_with_sf' => 'int',
        'commission_percentage_offer' => 'float',
        'member_of_virtuoso' => 'int',
        'interested_in_learning' => 'int',
    ];

    protected $fillable = [
        'inquiry_id',
        'name',
        'email',
        'type_of_business',
        'worked_with_sf',
        'other_travel_agency',
        'commission_percentage_offer',
        'commission_handled',
        'current_booking_way',
        'member_of_virtuoso',
        'interested_in_learning',
    ];

    public function inquery()
    {
        return $this->hasOne(Inquiry::class);
    }
}
