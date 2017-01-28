<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordRolimnet extends Model
{
	/**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $table = "password_rolimnet";
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected  $fillable = ['id','name','cpf','cnpj','contract','equipments','password'];
    /**
     * Get the user that owns the task.
     */
    public function scopeDeneme($query)
    {
        return $query->orderBy('id','DESC')->get();
    }
    
}