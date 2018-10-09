<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $fillable = ['name', 'description'];
    
    protected $dates = ['created_at', 'deleted_at'];
    
}
