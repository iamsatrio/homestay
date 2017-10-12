<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetailType extends Model
{
    protected $primaryKey='id';
    protected $fillable = [
        'name',
    ];

    public function userDetail(){
        return $this->belongsTo('App\UserDetail');
    }
}
