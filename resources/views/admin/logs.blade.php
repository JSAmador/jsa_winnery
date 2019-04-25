@extends('layouts.app')

@section('content')
    <div class="container">
        <nav id="sidebar">
            <h3>Dashboard</h3>
            <ul>
                <li><a href="http://localhost/jsa_winnery/public/admin/orders">Orders</a></li>
                <li><a href="http://localhost/jsa_winnery/public/admin/wines">Wines</a></li>
                <li><a href="http://localhost/jsa_winnery/public/admin/tables">Logs</a></li>
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
