<?php

namespace App\Http\Controllers;


use App\ModelsExtended\Client;
use App\ModelsExtended\CompanyCommunication;
use App\ModelsExtended\FAQ;
use App\ModelsExtended\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $userTodo = User::getById(auth()->user()->id)->todos->count();
        $userClients = User::getById(auth()->user()->id)->clients->count();
        
        return view('pages.dashboard',[
            'userTodo' => $userTodo,
            'userClients' => $userClients,
        ])->withClientCount(Client::count())
            ->withTopClients(Client::getTopClients())
            ->withNewClientsCount(Client::getNewClientCount())
            ->withTopCompCommuni(CompanyCommunication::getTopCompCommuni())
            ->withTopFaqs(FAQ::getTopFaqs());
    }


    public function clientUpComingTrip()
    {
        return view('pages.clients_upcoming_trips');
    }

    public function trips()
    {
        return view('pages.trips');
    }

    public function clientDetailView()
    {
        return view('pages.client_detail_view');
    }

    public function agents()
    {
        return view('pages.agents');
    }

    

    public function partners()
    {
        return view('pages.partners');
    }

    public function newClient()
    {
        return view('pages.new_client');
    }

    public function approval()
    {
        return view('pages.approval');
    }

    

    public function clientsCalendar()
    {
        return view('pages.clients_calendar');
    }

    public function clientDocuments()
    {
        return view('pages.client_documents');
    }

    public function clientReview()
    {
        return view('pages.client_review');
    }

    public function loginProfile()
    {
        return view('pages.login_profile');
    }
}