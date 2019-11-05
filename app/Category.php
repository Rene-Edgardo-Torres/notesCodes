<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    //Relationship One to Many
    public function subcategories(){
        return $this->hasMany('App\Subcategory');
    }
}
