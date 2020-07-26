<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForeignNews extends Model
{
    protected $table = 'foreign_news';

    public $timestamps = false;

    public $fillable = [
        'title',
        'description'
    ];

    public $hidden = [
        'pubDate'
    ];

}
