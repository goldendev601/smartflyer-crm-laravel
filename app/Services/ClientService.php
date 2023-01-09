<?php

namespace App\Services;


use App\Http\Requests\AddClientRequest;
use App\ModelsExtended\Client;
use App\ModelsExtended\ClientDocument;
use App\ModelsExtended\Notification;
use Illuminate\Support\Facades\DB;

class ClientService
{

    public function addClient($request, $delegate = null)
    {

        DB::beginTransaction();

        try {

            $Client = new Client();
            $Client->first_name = $request->input('client_first_name');
            $Client->middle_name = $request->input('client_middle_name');
            $Client->last_name = $request->input('client_last_name');
            $Client->email = $request->input('client_email');
            $Client->phone = $request->input('client_phone');
            $Client->date_of_birth = $request->input('client_dobY') ? convertToStringDateCarbonDate($request->input('client_dobY'), $request->input('client_dobM'), $request->input('client_dobD')) : null;
            $Client->social_facebook_url = $request->input('social_facebook_url');
            $Client->social_instagram_url = $request->input('social_instagram_url');
            $Client->social_linkedin_url = $request->input('social_linkedin_url');
            $Client->social_twitter_url = $request->input('social_twitter_url');
            $Client->social_custom_url = $request->input('social_custom_url');
            $Client->likes = $request->input('likes');
            $Client->dislikes = $request->input('dislikes');
            $Client->address = $request->input('address');
            $Client->notes = $request->input('note');
            $Client->created_by_id = auth()->id();
            $Client->save();


            // ************** client profile photp upload insert code ***************
            if ($request->hasfile('profile_picture_relative_url')) {
                $file = $request->file('profile_picture_relative_url');
                $Client->storeProfilePicture($file);
            }

            // ************** client documents upload insert code ***************
            if ($request->hasfile('documents')) {
                foreach ($request->file('documents') as $file) {
                    ClientDocument::storeDocument($file, $Client);
                }
            }


            // ************** client contact insert code ***************
            $ClientContactArr = [];
            if($request->has('rc_name')) {
                if (count($request->input('rc_name')) > 0) {
                    for ($i = 0; $i < count($request->input('rc_name')); $i++) {
                        if (!is_null($request->input('rc_name')[$i])) {
                            $ClientContactArr[] = [
                                'name' => $request->input('rc_name')[$i],
                                'email' => $request->input('rc_email')[$i],
                                'date_of_birth' => convertToStringDateCarbonDate($request->input('rc_dobY')[$i], $request->input('rc_dobM')[$i], $request->input('rc_dobD')[$i]),  // Use the same function convertToStringDateCarbonDate
                                'relationship_type_id' => $request->input('rc_relationship')[$i],
                            ];
                        }
                    }
                    if (count($ClientContactArr) > 0) {
                        $Client->client_contacts()->createMany($ClientContactArr);
                    }
                }
            }

            // ************** client Important Dates insert code ***************
            $ClientEventArr = [];
            if($request->has('imd_eventName')) {
                if (count($request->input('imd_eventName')) > 0) {
                    for ($i = 0; $i < count($request->input('imd_eventName')); $i++) {
                        if (!is_null($request->input('imd_eventName')[$i])) {
                            $ClientEventArr[] = [
                                'name' => $request->input('imd_eventName')[$i],
                                'notes' => $request->input('impd_notes')[$i],
                                'event_date' => convertToStringDateCarbonDate($request->input('impd_dobY')[$i], $request->input('impd_dobM')[$i], $request->input('impd_dobD')[$i]), // Use the same function convertToStringDateCarbonDate
                                'event_frequency_id' => $request->input('impd_frequency')[$i],
                            ];
                        }
                    }
                    if (count($ClientContactArr) > 0) {
                        $Client->client_events()->createMany($ClientEventArr);
                    }
                }
            }

            // ************** client Important Numbers insert code ***************
            $ClientLoyaltyNumberArr = [];
            if($request->has('im_number')) {
                if (count($request->input('im_number')) > 0) {
                    for ($i = 0; $i < count($request->input('im_number')); $i++) {
                        if (!is_null($request->input('im_number')[$i])) {
                            $ClientLoyaltyNumberArr[] = [
                                'number' => $request->input('im_number')[$i],
                                'loyalty_program' => $request->input('im_loyaltyProgram')[$i],  // TODO: Change this
                            ];
                        }
                    }
                    if (count($ClientLoyaltyNumberArr) > 0) {
                        $Client->client_loyalty_numbers()->createMany($ClientLoyaltyNumberArr);
                    }
                }
            }
            // ************** client Tag insert code ***************
            $ClientTagArr = [];
            if($request->has('tags')) {
                if (!is_null($request->input('tags'))) {
                    $tags = explode(",", $request->input('tags'));
                    for ($i = 0; $i < count($tags); $i++) {
                        $ClientTagArr[] = [
                            'tag' => $tags[$i]
                        ];
                    }
                    $Client->client_tags()->createMany($ClientTagArr);
                }
            }
            // ************** client Diet insert code ***************
            $ClientDietArr = [];
            if ($request->has('foodDiet')) {
                for ($i = 0; $i < count($request->input('foodDiet')); $i++) {
                    $ClientDietArr[] = [
                        'diet_id' => $request->foodDiet[$i]
                    ];
                }
                $Client->client_diets()->createMany($ClientDietArr);
            }

            // ************** client Allergies insert code ***************
            $ClientAllergyArr = [];
            if ($request->has('foodAllergies')) {
                for ($i = 0; $i < count($request->input('foodAllergies')); $i++) {
                    $ClientAllergyArr[] = [
                        'allergy_id' => $request->input('foodAllergies')[$i]
                    ];
                }
                $Client->client_allergies()->createMany($ClientAllergyArr);
            }


            DB::commit();
            $message = ($delegate == null) ? 'Data has been saved successfully!' : 'Successfully send to '.$Client->email;
            toastr()->success($message);
//            return redirect()->back();
            return $Client;
        } catch (\Exception $e) {
            // return $e;
            DB::rollback();
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
//            return redirect()->back()->withInput();
            return $e->getMessage();
        } catch (\Throwable $e) {
            // return $e;
            DB::rollback();
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
//            return redirect()->back()->withInput();
            return $e->getMessage();
        }
    }





    public function updateClient($request, $id)
    {
        DB::beginTransaction();

        try {

            $Client = Client::getClient()->findOrFail($id);
            $Client->first_name = $request->input('client_first_name');
            $Client->middle_name = $request->input('client_middle_name');
            $Client->last_name = $request->input('client_last_name');
            $Client->email = $request->input('client_email');
            $Client->phone = $request->input('client_phone');
            $Client->date_of_birth = convertToStringDateCarbonDate($request->input('client_dobY'), $request->input('client_dobM'), $request->input('client_dobD'));
            $Client->social_facebook_url = $request->input('social_facebook_url');
            $Client->social_instagram_url = $request->input('social_instagram_url');
            $Client->social_linkedin_url = $request->input('social_linkedin_url');
            $Client->social_twitter_url = $request->input('social_twitter_url');
            $Client->social_custom_url = $request->input('social_custom_url');
            $Client->likes = $request->input('likes');
            $Client->dislikes = $request->input('dislikes');
            $Client->address = $request->input('address');
            $Client->notes = $request->input('note');
            $Client->save();


            // ************** client profile photp upload insert code ***************
            if ($request->hasfile('profile_picture_relative_url')) {
                $file = $request->file('profile_picture_relative_url');
                $Client->storeProfilePicture($file);
            }

            // ************** client documents upload insert code ***************
            if ($request->hasfile('documents')) {
                foreach ($request->file('documents') as $file) {
                    ClientDocument::storeDocument($file, $Client);
                }
            }

            // ************** client contact insert code ***************
            $ClientContactArr = [];
            if (count($request->input('rc_name')) > 0) {
                for ($i = 0; $i < count($request->input('rc_name')); $i++) {
                    if (!is_null($request->input('rc_name')[$i])) {
                        $ClientContactArr[] = [
                            'name' => $request->input('rc_name')[$i],
                            'email' => $request->input('rc_email')[$i],
                            'date_of_birth' => convertToStringDateCarbonDate($request->input('rc_dobY')[$i], $request->input('rc_dobM')[$i], $request->input('rc_dobD')[$i]),  // Use the same function convertToStringDateCarbonDate
                            'relationship_type_id' => $request->input('rc_relationship')[$i],
                        ];
                    }
                }
                if (count($ClientContactArr) > 0) {
                    $Client->client_contacts()->delete();
                    $Client->client_contacts()->createMany($ClientContactArr);
                }
            }


            // ************** client Important Dates insert code ***************
            $ClientEventArr = [];
            if (count($request->input('imd_eventName')) > 0) {
                for ($i = 0; $i < count($request->input('imd_eventName')); $i++) {
                    if (!is_null($request->input('imd_eventName')[$i])) {
                        $ClientEventArr[] = [
                            'name' => $request->input('imd_eventName')[$i],
                            'notes' => $request->input('impd_notes')[$i],
                            'event_date' => convertToStringDateCarbonDate($request->input('impd_dobY')[$i], $request->input('impd_dobM')[$i], $request->input('impd_dobD')[$i]), // Use the same function convertToStringDateCarbonDate
                            'event_frequency_id' => $request->input('impd_frequency')[$i],
                        ];
                    }
                }
                if (count($ClientContactArr) > 0) {
                    $Client->client_events()->delete();
                    $Client->client_events()->createMany($ClientEventArr);
                }
            }


            // ************** client Important Numbers insert code ***************
            $ClientLoyaltyNumberArr = [];
            if (count($request->input('im_number')) > 0) {
                for ($i = 0; $i < count($request->input('im_number')); $i++) {
                    if (!is_null($request->input('im_number')[$i])) {
                        $ClientLoyaltyNumberArr[] = [
                            'number' => $request->input('im_number')[$i],
                            'loyalty_program' => $request->input('im_loyaltyProgram')[$i],  // TODO: Change this
                        ];
                    }
                }
                if (count($ClientLoyaltyNumberArr) > 0) {
                    $Client->client_loyalty_numbers()->delete();
                    $Client->client_loyalty_numbers()->createMany($ClientLoyaltyNumberArr);
                }
            }

            // ************** client Tag insert code ***************
            $ClientTagArr = [];
            if (!is_null($request->input('tags'))) {
                $tags = explode(",", $request->input('tags'));
                for ($i = 0; $i < count($tags); $i++) {
                    $ClientTagArr[] = [
                        'tag' => $tags[$i]
                    ];
                }
                if (count($ClientTagArr) > 0) {
                    $Client->client_tags()->delete();
                    $Client->client_tags()->createMany($ClientTagArr);
                }
            }

            // ************** client Diet insert code ***************
            $ClientDietArr = [];
            if ($request->has('foodDiet')) {
                for ($i = 0; $i < count($request->input('foodDiet')); $i++) {
                    $ClientDietArr[] = [
                        'diet_id' => $request->foodDiet[$i]
                    ];
                }
                if (count($ClientDietArr) > 0) {
                    $Client->client_diets()->delete();
                    $Client->client_diets()->createMany($ClientDietArr);
                }
            }

            // ************** client Allergies insert code ***************
            $ClientAllergyArr = [];
            if ($request->has('foodAllergies')) {
                for ($i = 0; $i < count($request->input('foodAllergies')); $i++) {
                    $ClientAllergyArr[] = [
                        'allergy_id' => $request->input('foodAllergies')[$i]
                    ];
                }
                if (count($ClientAllergyArr) > 0) {
                    $Client->client_allergies()->delete();
                    $Client->client_allergies()->createMany($ClientAllergyArr);
                }
            }

            // ************** remove delegate update link access ***************
            if  ($request->input('submission_type') === 'save') $Client->update(['token' => null]);

            DB::commit();
            toastr()->success('Data has been saved successfully!');
            return response()->json([
                'status' => 200,
                'message' => 'Data has been saved successfully!'
            ]);
        } catch (\Exception $e) {
            // return $e;
            DB::rollback();
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);
//            return redirect()->back()->withInput();;
        } catch (\Throwable $e) {
            // return $e;
            DB::rollback();
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
//            return redirect()->back()->withInput();
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);
        }
    }

    public function deleteDocument($id)
    {
        return ClientDocument::deleted($id);
    }

    public function setUserNotification($user)
    {
        $notifications = Notification::all();
        foreach ($notifications as $notification) {

            $permission = ($notification->value == 'remind_due_tasks') ? true : false;
            $user->userNotification()->updateOrCreate(
                [
                    'user_id' => $user->id,
                    'notification_id' => $notification->id
                ],
                [
                    'permission' => $permission
                ]
            );
        }
    }

}
