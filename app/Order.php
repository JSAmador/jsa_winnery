<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function orderStatus(){
        return $this->belongsTo('App\OrderStatus');
    }

    public function wine() {
        return $this->belongsTo('App\Wine');
    }
    public function waiter(){
        return $this->belongsTo('App\Waiter');
    }

    public function table() {
        return $this->habelongsTo('App\Table');
    }
}
