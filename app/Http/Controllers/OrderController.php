<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        //
        DB::table('orders')->insert([
            'table_id' => $request->table,
            'user_id' => $request->waiter,
            'wine_id' => $request->wine,
            'order_status_id' => 1,
        ]);
        return redirect('/orders');

    }




}
