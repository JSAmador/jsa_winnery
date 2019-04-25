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
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Wines</div>

                        <?php foreach ($wines as $wine): ?>
                        <div class="wine">
                            <div class="wine-header">
                                <h2>
                                    <a href="/wine/order<?= htmlSpecialChars($wine->id) ?>">
                                        <?= $wine->name ?>
                                    </a>
                                </h2>
                            </div>
                            <div class="wine-link">
                                <a href="<?= htmlSpecialChars($wine->link) ?>" target="_blank">
                                    more info
                                </a>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
