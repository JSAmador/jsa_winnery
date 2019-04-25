<?php

namespace App\Http\Controllers;

use App\OrderLog;
use Illuminate\Http\Request;

class AdminLogsController extends Controller
{
    //
    public function index()
    {
        $logs = OrderLog::all();
        return view('admin.logs', ['logs' => $logs]);
    }
}
