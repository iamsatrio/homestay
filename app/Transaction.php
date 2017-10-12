<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey='id';
    protected $fillable=[
        'user_id',
        'homestay_id',
        'check_in',
        'check_out',
    ];

    public function homestay(){
        return $this->belongsTo('App\Homestay');

    }

    public function user(){
        return $this->belongsTo('App\User');

    }
}
