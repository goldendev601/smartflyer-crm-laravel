<?php

namespace App\Http\Controllers;


use App\ModelsExtended\Agent;

class AgentsController extends Controller
{
    public function __invoke()
    {
        return view('pages.agents')
            ->withAgents( Agent::query()->orderBy('name')->get() );
    }
}