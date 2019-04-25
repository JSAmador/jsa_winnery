<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;

class AdminTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();
        return view('admin.tables', ['tables' => $tables]);
    }


}
