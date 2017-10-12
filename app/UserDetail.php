<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'type_id',
        'amount',
        'etc',
        'saldo',
    ];

    public function user(){
        return $this->belongsTo('App\User');

    }

    public function userDetailType(){
        return $this->hasMany('App\UserDetailType');
    }
}
