<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddFAQsRequest;
use App\ModelsExtended\FAQ;

class FAQsController extends Controller
{
    public function index()
    {
        $faqs = FAQ::getFaqs()->paginate(10);
        return view('pages.faqs', [
            'faqs' => $faqs,
        ]);
    }

    public function addFaq(AddFAQsRequest $request)
    {
        try {
            if (!empty($request->id)) {
                $faq = FAQ::getFaqById($request->id);
            } else {
                $faq = new FAQ();
            }

            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();

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

    public function editFaq($id)
    {
        try {
            $faqs = FAQ::getFaqById($id);
            return response()->json(['faqs' => $faqs]);
        } catch (\Exception $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        } catch (\Throwable $e) {
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }
    }

    public function deleteFaq($id)
    {
        try {
            FAQ::getFaqById($id)->delete($id);
            toastr()->success('FAQ deleted successfully.');
            return response()->json([
                'status' => 200,
                'message' => 'FAQ deleted successfully.'
            ]);
        } catch (\Exception $e) {

            toastr()->error('An error has occurred please try again later.');
            return response()->json([
                'status' => 400,
                'message' => 'An error has occurred please try again later.'
            ]);
        }
    }

    public function viewAllFaqs()
    {
        $faqs = FAQ::getFaqs()->get();
        return view('pages.view_faqs', [
            'faqs' => $faqs,
        ]);
    }
}
