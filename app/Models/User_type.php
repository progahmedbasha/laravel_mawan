<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    protected $fillable = ['id', 'name'];
    protected $table = "user_types";
}
public function user()
    {
      return $this->hasMany('App\Models\User','user_type_id');
    } 