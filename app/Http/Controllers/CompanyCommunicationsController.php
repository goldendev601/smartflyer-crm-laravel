<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCompanyCommunicationsRequest;
use App\ModelsExtended\CompanyCommunication;

class CompanyCommunicationsController extends Controller
{
    public function index()
    {
        $companyCommunications = CompanyCommunication::getCompCommuni()->paginate(10);
        return view('pages.company_communications', [
            'companyCommunications' => $companyCommunications
        ]);
    }

    public function addCompCommuni(AddCompanyCommunicationsRequest $request)
    {
        try {
            if (!empty($request->id)) {
                $compCommun = CompanyCommunication::getCompCommuniById($request->id);
            } else {
                $compCommun = new CompanyCommunication();
            }

            $compCommun->title = $request->title;
            $compCommun->description = $request->description;
            $compCommun->created_by_id = auth()->id();
            $compCommun->save();

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

    public function editCompCommun($id)
    {
        try {
            $compCommun = CompanyCommunication::getCompCommuniById($id);
            return response()->json(['compCommun' => $compCommun]);
        } catch (\Exception $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        } catch (\Throwable $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }
    }

    public function deleteCompCommun($id)
    {
        try {
            CompanyCommunication::getCompCommuniById($id)->delete($id);
            toastr()->success('Company Communication deleted successfully.');
            return response()->json([
                'status' => 200,
                'message' => 'Company Communication deleted successfully.'
            ]);
        } catch (\Exception $e) {

            toastr()->error('An error has occurred please try again later.');
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);
        }
    }
}
