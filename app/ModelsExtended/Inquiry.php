<?php

namespace App\ModelsExtended;

class Inquiry extends \App\Models\Inquiry
{
    public const Pending = 1;
    public const Approved = 2;
    public const Rejected = 3;

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function inquires()
    {
        return self::query();
    }

    public function inqueryStatus()
    {
        return $this->belongsTo(InqueryStatus::class, 'inquiry_status_id');
    }

    public function inquiry_details()
    {
        return $this->hasOne(InquiryDetails::class, 'inquiry_id', 'id');
    }

    public static function getInquiry(int $id)
    {
        return self::inquires()->findOrFail($id);
    }
}
