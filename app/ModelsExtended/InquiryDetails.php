<?php

namespace App\ModelsExtended;

class InquiryDetails extends \App\Models\InquiryDetails
{

    public const TypeOfBusioness = [
        '1' => 'Hotel',
        '2' => 'Villa/Home Rentals',
        '3' => 'DMC',
        '4' => 'Experience/Cruies',
        '5' => 'Transportaion (Air, Land, Sea)',
        '6' => 'Insurance',
        '7' => 'Other',
    ];

    public const WorkedWithSF = [
        '1' => 'Yes',
        '2' => 'No',
    ];

    public const CommissionHandled = [
        '1' => 'Invoice + W9 each time',
        '2' => 'Processed automatically',
        '3' => 'Via check',
        '4' => 'ONYX/TACS',
        '5' => 'Other',
    ];

    public const MemberOfVirtuoso = [
        '1' => 'Yes',
        '2' => 'No',
        '3' => 'Other',
    ];

    public const InterestedInLearning = [
        '1' => 'Yes, Please!',
        '2' => 'Not at this time, but thank you!',
        '3' => 'Other',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function inquiryDetails()
    {
        return self::query();
    }

    public function inquery()
    {
        return $this->hasOne(Inquiry::class, 'id', 'inquiry_id');
    }

    public static function getInquiryDetails(int $id)
    {
        return self::inquiryDetails()->where('inquiry_id', $id)->first();
    }
}
