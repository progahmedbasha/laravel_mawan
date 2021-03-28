<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = ['id', 'name'];
    protected $table = "user_types";

public function users()
    {
      return $this->hasMany('App\Models\User');
    } 

    }