<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $primaryKey = 'id';
    protected $fillable=[
        'name',
        'phone',
        'address',
    ];

    public function transaction(){
        return $this->hasMany('App\Transaction');

    }
}
