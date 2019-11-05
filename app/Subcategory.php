<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategory';

    // Relationship Many to One
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }

    //Relationship One to Many
    public function codes(){
        return $this->hasMany('App\Code');
    }
}
