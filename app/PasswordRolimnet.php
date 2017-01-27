<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordRolimnet extends Model
{
    protected $table = "password_rolimnet";

    protected  $fillable = ['id','name','password'];

    public function scopeDeneme($query)
    {
        return $query->orderBy('id','DESC')->get();
    }
    
}