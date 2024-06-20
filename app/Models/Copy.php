<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    public function bookcase(){
        return $this->hasMany('App\Models\Bookcase');
    }
    public function book(){
        return $this->hasMany('App\Models\Book');
    }
}
