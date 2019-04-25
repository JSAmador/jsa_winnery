<?php

namespace App\Http\Controllers;

use App\Order;
use App\Wine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminOrdersController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('admin.orders', ['orders' => $orders]);
    }



    public function edit($id)
    {

        $user = Auth::user()->id;

        // Update the order
        DB::table('orders')
            ->where('id', $id)
            ->update(['order_status_id' => 2]);

       DB::table('order_logs')->insert([
            'order_id' => $id,
            'action' => 2,
            'user_id' => $user,
        ]);
        $orders = Order::all();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function process($id) {

        DB::table('orders')
            ->where('id', $id)
            ->update(['order_status_id' => 3]);
        $orders = Order::all();
        return view('admin.orders', ['orders' => $orders]);

    }

    public function deliver($id) {

        $order = Order::where('id', $id)->first();
        $wine = Wine::where('id', $order->wine_id)->first();

        if ($wine->is_available) {
            DB::table('orders')
                ->where('id', $order->id)
                ->update(['order_status_id' => 4]);
            DB::table('wines')
                ->where('id', $id)
                ->update(['is_available' => 0]);
        } else {
            DB::table('orders')
                ->where('id', $order->id)
                ->update(['order_status_id' => 5]);
        }
        $orders = Order::all();

        return view('admin.orders', ['orders' => $orders]);

    }



}
