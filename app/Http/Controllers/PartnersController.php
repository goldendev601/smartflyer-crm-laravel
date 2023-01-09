<?php

namespace App\Http\Controllers;

use App\ModelsExtended\TaskRemindInterval;
use App\Notifications\TaskReminderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\ModelsExtended\Todo;
use App\ModelsExtended\TodoStatus;
use App\Http\Requests\AddNewTaskRequest;

class PartnersController extends Controller
{
    public function viewPartners()
    {
        return view('pages.partnerlist');
    }

    public function viewPartnerDetail($id)
    {
        return view('pages.partnerDetail');
    }
}
