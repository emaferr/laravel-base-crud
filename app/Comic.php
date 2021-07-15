<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['poster','title','autor','desc','price'];
    // protected $guarded = [];
}
