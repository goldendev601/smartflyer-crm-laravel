<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewInquiryRequest;
use App\Http\Requests\AddPartnershipInterestFormRequest;
use App\Mail\SendInvite;
use Mail;
use App\ModelsExtended\InqueryStatus;
use App\ModelsExtended\Inquiry;
use App\ModelsExtended\InquiryDetails;

class InquiresController extends Controller
{
    public function inquires()
    {
        $inqueryStatus = InqueryStatus::InqueryStatus()->get();
        $inquires = Inquiry::inquires()->get();

        $pendingInquires = [];
        $approvedInquires = [];
        $rejectedInquires = [];

        foreach ($inquires as $inquiry) {
            if ($inquiry->inquiry_status_id == InqueryStatus::Pending) {
                $pendingInquires[] = $inquiry;
            }
            if ($inquiry->inquiry_status_id == InqueryStatus::Approved) {
                $approvedInquires[] = $inquiry;
            }
            if ($inquiry->inquiry_status_id == InqueryStatus::Rejected) {
                $rejectedInquires[] = $inquiry;
            }
        }

        return view('pages.inquires', [
            'inqueryStatus' => $inqueryStatus,
            'pendingInquires' => $pendingInquires,
            'approvedInquires' => $approvedInquires,
            'rejectedInquires' => $rejectedInquires,
        ]);
    }

    public function addInquiry(AddNewInquiryRequest $request)
    {
        try {
            $inquiry = new Inquiry();
            $inquiry->name = $request->name;
            $inquiry->email = $request->email;
            $inquiry->smartflyer_agreement = !empty($request->smartflyer_agreement) ? $request->smartflyer_agreement : 0;
            $inquiry->elevate_agreement = !empty($request->elevate_agreement) ? $request->elevate_agreement : 0;
            $inquiry->inquiry_status_id = InqueryStatus::Pending;
            $inquiry->save();

            $inquiry_id = encrypt($inquiry->id);
            $mailData = route('partnershipInterestForm', $inquiry_id);
            Mail::to($request->email)->send(new SendInvite($mailData));

            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        } catch (\Throwable $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }
    }

    public function partnershipInterestForm($inquiry_id)
    {
        try {
            $inquiry_id = decrypt($inquiry_id);
            $inquiry = Inquiry::getInquiry($inquiry_id);
            $inquiryDetails = InquiryDetails::getInquiryDetails($inquiry_id);

            $typeOfBusioness = InquiryDetails::TypeOfBusioness;
            $workedWithSF = InquiryDetails::WorkedWithSF;
            $commissionHandled = InquiryDetails::CommissionHandled;
            $memberOfVirtuoso = InquiryDetails::MemberOfVirtuoso;
            $interestedInLearning = InquiryDetails::InterestedInLearning;

            return view('pages.partnership_interest_form', [
                'typeOfBusioness' => $typeOfBusioness,
                'workedWithSF' => $workedWithSF,
                'commissionHandled' => $commissionHandled,
                'memberOfVirtuoso' => $memberOfVirtuoso,
                'interestedInLearning' => $interestedInLearning,
                'inquiryDetails' => $inquiryDetails,
                'inquiry' => $inquiry,
            ]);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function partnershipInterestFormStore(AddPartnershipInterestFormRequest $request, $inquiry_id)
    {
        try {
            $inquiry_id = decrypt($inquiry_id);

            $inquiryDetails = InquiryDetails::getInquiryDetails($inquiry_id);
            if (empty($inquiryDetails)) {
                $inquiryDetails = new InquiryDetails();
            }

            $commission_handled = !empty($request->commission_handled) ? implode(',', $request->commission_handled) : null;
            $inquiryDetails->inquiry_id = $inquiry_id;
            $inquiryDetails->name = $request->name;
            $inquiryDetails->email = $request->email;
            $inquiryDetails->type_of_business = $request->type_of_business;
            $inquiryDetails->worked_with_sf = $request->worked_with_sf;
            $inquiryDetails->other_travel_agency = $request->other_travel_agency;
            $inquiryDetails->commission_percentage_offer = str_replace('%', '', $request->commission_percentage_offer);
            $inquiryDetails->commission_handled = $commission_handled;
            $inquiryDetails->current_booking_way = $request->current_booking_way;
            $inquiryDetails->member_of_virtuoso = $request->member_of_virtuoso;
            $inquiryDetails->interested_in_learning = $request->interested_in_learning;
            $inquiryDetails->save();

            toastr()->success('Data has been saved successfully!');
            return redirect()->route('thankYouMeg');
        } catch (\Exception $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        } catch (\Throwable $e) {;
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }
    }


    public function viewInquireDetail($id)
    {
        $inquiryDetails = InquiryDetails::getInquiryDetails($id);
        $typeOfBusioness = InquiryDetails::TypeOfBusioness[$inquiryDetails->type_of_business];
        $workedWithSF =  !empty($inquiryDetails->worked_with_sf) ? InquiryDetails::WorkedWithSF[$inquiryDetails->worked_with_sf] : '';
        $commissionHandled = [];
        $commission_handled = explode(',', $inquiryDetails->commission_handled);
        if (!empty($inquiryDetails->commission_handled)) {
            foreach ($commission_handled as $item) {
                $commissionHandled[] = InquiryDetails::CommissionHandled[$item];
            }
        }
        $memberOfVirtuoso =  !empty($inquiryDetails->member_of_virtuoso) ? InquiryDetails::MemberOfVirtuoso[$inquiryDetails->member_of_virtuoso] : '';
        $interestedInLearning =  !empty($inquiryDetails->interested_in_learning) ? InquiryDetails::InterestedInLearning[$inquiryDetails->interested_in_learning] : '';

        return view('pages.inquiresDetail', [
            'inquiryDetails' => $inquiryDetails,
            'typeOfBusioness' => $typeOfBusioness,
            'workedWithSF' =>  $workedWithSF,
            'commissionHandled' => implode(', ', $commissionHandled),
            'memberOfVirtuoso' => $memberOfVirtuoso,
            'interestedInLearning' => $interestedInLearning,
        ]);
    }

    public function approveOrRejectInquiry($type, $id)
    {
        try {
            $inquiry = Inquiry::getInquiry($id);
            $inquiry->inquiry_status_id = $type == 'approve' ? Inquiry::Approved : Inquiry::Rejected;
            $inquiry->save();

            toastr()->success('Data has been saved successfully!');
            return redirect()->route('inquires');
        } catch (\Exception $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        } catch (\Throwable $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }
    }

    public function thankYouMeg()
    {
        return view('pages.partnership_interest_thank_you');
    }
}
