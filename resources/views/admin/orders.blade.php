@extends('layouts.app')

@section('content')
    <div class="container waiter-container">
        <nav id="sidebar">
            <h3>Dashboard</h3>
            <ul>
                <li><a href="/admin/orders">Orders</a></li>
                <li><a href="/admin/tables">Tables</a></li>
                <li><a href="/admin/wines">Wines</a></li>
                <li><a href="/admin/logs">Logs</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Pending orders</div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Status</th>
                                <th>Order_id</th>
                                <th>Table Number</th>
                                <th>Wine</th>

                                
                            </tr>
                            </thead>
                            <tbody>
                            @if($orders)

                                @foreach($orders as $order)
                                    <tr>

                                        <td>
                                                @if($order->order_status_id == 1)
                                                    {!! Form::open(['method'=>'POST', 'action'=>['AdminOrdersController@edit', $order->id]]) !!}
                                                    <div class="form-group">
                                                        {!! Form::submit('Process', ['class'=>'btn btn-success']) !!}
                                                    </div>
                                                    {!! Form::close() !!}
                                                @elseif($order->order_status_id == 2)
                                                    {!! Form::open(['method'=>'POST', 'action'=>['AdminOrdersController@process', $order->id]]) !!}
                                                    <div class="form-group">
                                                        {!! Form::submit('Dispatch', ['class'=>'btn btn-success']) !!}
                                                    </div>
                                                    {!! Form::close() !!}
                                                @elseif($order->order_status_id == 3)
                                                    {!! Form::open(['method'=>'POST', 'action'=>['AdminOrdersController@deliver', $order->id]]) !!}
                                                    <div class="form-group">
                                                        {!! Form::submit('Deliver', ['class'=>'btn btn-success']) !!}
                                                    </div>
                                                    {!! Form::close() !!}
                                                @else
                                                   <p>Delivered</p>
                                                @endif
                                        </td>
                                        <td>{{$order->orderStatus->name}}</td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->table->table_num}}</td>
                                        <td>{{$order->wine->name}}</td>
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
