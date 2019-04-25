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
                                <th>Action</th>
                                <th>Table Number</th>
                                <th>Asigned To</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($tables)

                                @foreach($tables as $table)
                                    <tr @if($table->is_available == 0) class="not-available" @endif>

                                        <td><a href="{{'/table/'. $table->id}}">@if($table->waiter_id == 0)Get Table</a>  @else View Table @endif</td>
                                        <td>{{$table->table_num}}"</td>
                                        <td>@if($table->waiter_id != 1){{$table->waiter->name}} @endif</td>
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
