@extends('layouts.app')

@section('content')
    <div class="container">
        <nav id="sidebar">
            <h3>Dashboard</h3>
            <ul>
                <li><a href="http://localhost/jsa_winnery/public/admin/orders">Orders</a></li>
                <li><a href="http://localhost/jsa_winnery/public/admin/tables">Tables</a></li>
                <li><a href="http://localhost/jsa_winnery/public/admin/wines">Wines</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">tables</div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Take Order</th>
                                <th>Table Number</th>
                                <th>Availability</th>
                                <th>Waiter</th>
                                <th>Last Order</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($tables)

                                @foreach($tables as $table)
                                    <tr>

                                        <td>
                                            {!! Form::open(['method'=>'POST', 'action'=>['OrderController@create', $order->id]]) !!}
                                            <div class="form-group">
                                                {!! Form::submit('Order', ['class'=>'btn btn-success']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>{{$order->status_id->name}}"></td>
                                        <td>{{$order->id}}"></td>
                                        <td>{{$order->table_id->table_num}}</td>
                                        <td>{{$order->user_id->name}}</td>
                                        <td>{{$order->wine_id->name}}</td>
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
