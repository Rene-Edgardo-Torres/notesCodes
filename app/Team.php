<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    //Relationship One to Many
    public function users(){
        return $this->hasMany('App\User');
    }
}
