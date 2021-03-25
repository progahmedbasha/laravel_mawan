<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id', 'title','parent_id'];
    protected $table = "categories";


    public function products()
    {
      return $this->hasMany('App\Models\Product');
    }



  public function sub_categories()
    {
      return $this->hasMany('App\Models\Category','parent_id');
    }


    public function parent()
    {
      return $this->belongsTo('App\Models\Category','parent_id');
    }  
  
}
