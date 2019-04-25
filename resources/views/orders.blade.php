@extends('layouts.app')

@section('content')
    <div class="container waiter-container">
        <nav id="sidebar">
            <h3>Dashboard</h3>
            <ul>
                <li><a href="/orders">Orders</a></li>
                <li><a href="/tables">Tables</a></li>
                <li><a href="/wines">Wines</a></li>
            </ul>
        </nav>
        <div class="content waiter-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">tables</div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Status</th>
                                <th>Order id</th>
                                <th>Table</th>
                                <th>Waiter</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($orders)
                                @foreach($orders as $order)
                                    <tr @if($order->order_satatus_id == 5) class="failed" @endif>
                                        <td>{{$order->orderStatus->name}}</td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->table->table_num}}</td>
                                        <td>{{$order->user->name}}</td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
