<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $timestamps = true;

    public function orderStatus(){
        return $this->belongsTo('App\OrderStatus');
    }

    public function wine() {
        return $this->belongsTo('App\Wine');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function table() {
        return $this->belongsTo('App\Table');
    }
}
