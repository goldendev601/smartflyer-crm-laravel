<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\ModelsExtended\Allergy;
use App\ModelsExtended\Client;
use App\ModelsExtended\Diet;
use App\ModelsExtended\EventFrequency;
use App\ModelsExtended\RelationshipType;
use App\Notifications\SendDelegateUpdateClientUrlNotification;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class SendDelegateController extends Controller
{

    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    public function addNewDelegateClient(AddClientRequest $request)
    {

        DB::beginTransaction();
        try {
            $client = $this->clientService->addClient($request,true);
            if ($client) {
                $token = sha1(uniqid(time(), true));
                $data['updateClientUrl'] = URL::signedRoute('delegateEditClient', ['id' => $token]);
                $data['clientName'] = $client->name;
                $client->notify(new SendDelegateUpdateClientUrlNotification($data));
                $client->update(['token' => $token]);
                DB::commit();
                return response()->json([
                    'status' => 200,
                    'message' => 'successfully send to '.$client->email
                ]);
            }
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);
        } catch (\Exception $e) {

            DB::rollback();
           return $e->getMessage();
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);
        }

    }

    public function delegateEditClient(Request $request)
    {



            $relationship = RelationshipType::all();
            $frequency = EventFrequency::all();
            $diet = Diet::all();
            $allergy = Allergy::all();

            $client = Client::getClient()->where('token', $request->id)->first();
            if (!$client) abort(401);

            return view('pages.clients.client_delegate_edit_view', compact('client', 'relationship', 'frequency', 'diet', 'allergy'));




    }

    public function delegateUpdateClient(UpdateClientRequest $request, $id)
    {

        return $this->clientService->updateClient($request, $id);
    }
    public function deleteDocument(Request $request)
    {
        $this->clientService->deleteDocument($request->id);
        return response()->json([
            'status' => 200,
            'message' => 'Document delete successfully.'
        ]);
    }
}
