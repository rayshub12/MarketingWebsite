<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //
    public function scopeSearch($query, $search){
        return $query->where('post_title', 'like', '%' .$search. '%')->orwhere('post_category', 'like', '%' .$search. '%');
    }
}
