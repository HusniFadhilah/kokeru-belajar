<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Room;
use App\Models\User;
use App\Models\Report;
use App\Models\Schedule;
use App\Libraries\Fungsi;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
    	$reports_today = Report::whereDate('date_time', Carbon::today())->get();
        $reports = Report::all();
        return view('supervisor.monitor', 
            [
                "report" => $reports_today
            ]);
    }
}
