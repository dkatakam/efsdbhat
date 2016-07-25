<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'symbol',
        'assetname',
        'assets',
        'acquired_price',
        'purchase_date',

    ];
    
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
