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
                        <div class="panel-heading">Logs</div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Log</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($logs)

                                @foreach($logs as $log)
                                    <tr>

                                        <td>{{$log}}</td>

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
