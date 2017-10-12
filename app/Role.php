<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function permission(){
        return $this->hasMany('App\Permission');
    }
}
