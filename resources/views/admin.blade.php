@extends('layouts.app')

@section('content')
    <div class="container">
        <nav id="sidebar">
            <h3>Dashboard</h3>
            <ul>
                <li><a href="#">orders</a></li>
                <li><a href="#">Tables</a></li>
                <li><a href="#">Orders</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Orders</div>

                        <?php foreach ($orders as $order): ?>
                        <div class="order">
                            <div class="order-header">
                                <h2>
                                    <a href="/order/order<?= htmlSpecialChars($order->id) ?>">
                                        <?= $order->name ?>
                                    </a>
                                </h2>
                            </div>
                            <div class="order-link">
                                <a href="<?= htmlSpecialChars($order->link) ?>" target="_blank">
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
