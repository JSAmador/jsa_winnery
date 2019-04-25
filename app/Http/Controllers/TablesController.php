<?php

namespace App\Http\Controllers;

use App\Order;
use App\Table;
use App\Wine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TablesController extends Controller
{

    public function index()
    {
        $tables = Table::all();
        return view('tables', compact('tables', 'users'));
    }

    public function show($id)
    {
        //
        $table = Table::findOrFail($id);
        $order = Order::where('table_id', $id)->first();
        $user = Auth::user()->id;
        $wines = Wine::all();
        $pick_wines = Wine::whereDay('date', date('d'))->get();
        DB::table('tables')
            ->where('id', $id)
            ->update(['waiter_id' => $user]);
        return view('table', compact('table', 'order', 'user', 'wines', 'pick_wines'));
    }


}
