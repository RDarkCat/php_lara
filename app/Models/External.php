<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class External extends Model
{
    protected $table = 'externals';
    
    protected $fillable = ['url'];
}
