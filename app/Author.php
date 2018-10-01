<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// http://l5.appkr.kr/lessons/10-eloquent.html
class Author extends Model
{
    public $timestamps = false;
    protected $fillable = ['email', 'password'];
    
}
