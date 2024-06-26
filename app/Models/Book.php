<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function bookcase (){
        return $this->belongsTo('App\Models\Bookcase');
    }
    public function author (){
        return $this->belongsTo('App\Models\Author');
    }
    public function copies(){
        return $this->hasMany('App\Models\Copy');
    }
}
