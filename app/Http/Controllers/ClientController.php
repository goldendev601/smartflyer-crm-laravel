<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddClientRequest;
use App\Http\Requests\AddFoodAndAllergiesRequest;
use App\Http\Requests\AddImportantDateRequest;
use App\Http\Requests\AddImportantNumberRequest;
use App\Http\Requests\AddNoteRequest;
use App\Http\Requests\AddPreferencesRequest;
use App\Http\Requests\AddRelatedContactRequest;
use App\Http\Requests\UpdateClientRequest;
use App\ModelsExtended\Allergy;
use App\ModelsExtended\Client;
use App\ModelsExtended\ClientContact;
use App\ModelsExtended\ClientDocument;
use App\ModelsExtended\Diet;
use App\ModelsExtended\EventFrequency;
use App\ModelsExtended\RelationshipType;
use App\Providers\RouteServiceProvider;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelsExtended\ClientLoyaltyNumber;
use App\ModelsExtended\ClientEvent;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    public function allClient()
    {
        $relationship = RelationshipType::all();
        $frequency = EventFrequency::all();
        $diet = Diet::all();
        $allergy = Allergy::all();

        $getAllClients = Client::myClients()
            ->orderBy('id', 'DESC')
            ->get();
        return view('pages.clients.all_clients',
            compact('getAllClients', 'relationship',
                'frequency', 'diet', 'allergy')
        )
            ->withClientCount(Client::myClients()->count()); //
    }

    public function addClient(AddClientRequest $request)
    {

        return $this->clientService->addClient($request);

    }


    public function clientDetailView($id = 0)
    {

        $relationship = RelationshipType::all();
        $frequency = EventFrequency::all();
        $diet = Diet::all();
        $allergy = Allergy::all();

        $client = Client::myClients()->find($id);
        if (!$client) return redirect(RouteServiceProvider::HOME);

        return view('pages.clients.client_detail_view', compact('client', 'relationship', 'frequency', 'diet', 'allergy'));
    }


    public function updateClient(UpdateClientRequest $request, $id)
    {

        DB::beginTransaction();

        try {

            $Client = Client::getMyClientById($id);
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
//            return $e->getMessage();
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

    public function addImportantNumber(AddImportantNumberRequest $request, $id)
    {

        try {

            $Client = Client::myClients()->findOrFail($id);
            $Client->client_loyalty_numbers()->updateOrCreate(
                [
                    'id' => $request->input('important_number_id')
                ],
                [
                    'number' => $request->input('im_number'),
                    'loyalty_program' => $request->input('im_loyaltyProgram'),
                ]
            );

            toastr()->success('Important number has been saved successfully.');
            return response()->json([
                'status' => 200,
                'message' => 'Important number has been saved successfully.'
            ]);
        } catch (\Exception $e) {
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);
        }
    }

    public function addImportantDate(AddImportantDateRequest $request, $id)
    {
        try {

            $Client = Client::myClients()->findOrFail($id);

            $Client->client_events()->updateOrCreate(
                ['id' => $request->input('add_important_date_id')],
                [
                    'name' => $request->input('imd_eventName'),
                    'notes' => $request->input('impd_notes'),
                    'event_date' => convertToStringDateCarbonDate($request->input('impd_dobY'), $request->input('impd_dobM'), $request->input('impd_dobD')), // Use the same function convertToStringDateCarbonDate
                    'event_frequency_id' => $request->input('impd_frequency'),
                ]
            );

            toastr()->success('Important date has been saved successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }
    }

    public function addRelatedContact(AddRelatedContactRequest $request, $id)
    {
        try {
            $Client = Client::myClients()->findOrFail($id);
            $Client->client_contacts()->updateOrCreate(
                [
                    'id' => $request->input('related_contact_id'),
                ],
                [
                    'name' => $request->input('rc_name'),
                    'email' => $request->input('rc_email'),
                    'date_of_birth' => convertToStringDateCarbonDate($request->input('rc_dobY'), $request->input('rc_dobM'), $request->input('rc_dobD')),  // Use the same function convertToStringDateCarbonDate
                    'relationship_type_id' => $request->input('rc_relationship'),
                ]
            );

            toastr()->success('Related contact save successfully.');
            return redirect()->back();
        } catch (\Exception $e) {

            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }

    }

    public function deleteImportantNumber($id)
    {
        try {

            ClientLoyaltyNumber::getClientLoyaltyNumber()->find($id)->delete($id);
            toastr()->success('Important number deleted successfully.');
            return response()->json([
                'status' => 200,
                'message' => 'Important number deleted successfully.'
            ]);
        } catch (\Exception $e) {

            toastr()->error('An error has occurred please try again later.');
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);

        }
    }

    public function deleteImportantDate($id)
    {
        try {

            ClientEvent::getClienEvents()->find($id)->delete($id);
            toastr()->success('Important date deleted successfully.');
            return response()->json([
                'status' => 200,
                'message' => 'Important date deleted successfully.'
            ]);
        } catch (\Exception $e) {

            toastr()->error('An error has occurred please try again later.');
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);

        }
    }

    public function deleteRelatedContact($id)
    {
        try {

            ClientContact::getClienContact()->find($id)->delete($id);
            toastr()->success('Related contact deleted successfully.');
            return response()->json([
                'status' => 200,
                'message' => 'Related contact deleted successfully.'
            ]);
        } catch (\Exception $e) {

            toastr()->error('An error has occurred please try again later.');
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);

        }
    }

    public function addFoodAndAllergies(AddFoodAndAllergiesRequest $request, $id)
    {
        DB::beginTransaction();

        try {
            $Client = Client::myClients()->findOrFail($id);
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

            DB::commit();
            toastr()->success('Food and allergies has been saved successfully!');
            return redirect()->back();

        } catch (\Throwable $e) {

            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();

        }
    }

    public function addPreferences(AddPreferencesRequest $request, $id)
    {
        try {
            $Client = Client::myClients()->findOrFail($id);
            $Client->likes = $request->input('likes');
            $Client->dislikes = $request->input('dislikes');
            $Client->save();
            toastr()->success('Preferences has been saved successfully!');
            return redirect()->back();
        } catch (\Throwable $e) {

            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();

        }
    }

    public function addNotes(AddNoteRequest $request, $id)
    {
        try {
            $Client = Client::myClients()->findOrFail($id);
            $Client->notes = $request->input('note');
            $Client->save();
            toastr()->success('Notes has been saved successfully!');
            return redirect()->back();
        } catch (\Throwable $e) {

            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();

        }
    }

}
