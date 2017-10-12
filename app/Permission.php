<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $primaryKey='id';
    protected $fillable = [
        'access',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }
}
