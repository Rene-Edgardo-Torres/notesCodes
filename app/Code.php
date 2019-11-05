<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'code';

    //Relationship Many to One
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    //Relationship Many to One
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    //Relationship Many to One
    public function subcategory(){
        return $this->belongsTo('App\Subcategory','subcategory_id');
    }
}
