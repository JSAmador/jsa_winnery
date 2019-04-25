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
            <div class="pick-day">
                Wines of the day
                @if($pick_wines)
                    <ul>
                    @foreach($pick_wines as $pick_wine)
                            <li>{{$pick_wine->name}}</li>

                    @endforeach
                    </ul>
                @endif
            </div>
        </nav>
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <h2>{{$table->table_num}}</h2>
                        <div>
                            <h4>Description:</h4>
                            <p>Number of customers: <span>{{rand(1,6)}}</span></p>
                            <p>Arrival: <span>{{date("F j, Y, g:i a")}}</span></p>
                            <p>Last Order: <span>Name: @if($order){{$order->wine->name}}</span> <span class="order-status"> {{$order->orderStatus->name}}</span>@endif</p>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Take Order</th>
                                    <th>Name</th>
                                    <th>More Info</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($wines)

                                    @foreach($wines as $wine)
                                        <tr>

                                            <td>
                                                {!! Form::open(['method'=>'POST', 'action'=>'OrderController@store']) !!}
                                                {!! Form::text('waiter', $user, ['class'=>'hidden']) !!}
                                                {!! Form::text('table', $table->id, ['class'=>'hidden']) !!}
                                                {!! Form::text('wine', $wine->id, ['class'=>'hidden']) !!}
                                                <div class="form-group">
                                                    {!! Form::submit('Order', ['class'=>'btn btn-success']) !!}
                                                </div>
                                                {!! Form::close() !!}
                                            </td>
                                            <td>{{$wine->name}}"></td>
                                            <td>{{$wine->link}}"></td>
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

    </div>
@endsection
