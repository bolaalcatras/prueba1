<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookcase extends Model
{
    use HasFactory;

    public function books (){
        return $this->hasMany('App\Models\Book');
    }

    public function library (){
        return $this->belongsTo('App\Models\Library');
    }

    public function themes (){
        return $this->belongsToMany('App\Models\Theme');
    }
}
