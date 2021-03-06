<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function news()
    {
        return $this->belongstoMany(News::class);
    }
}
