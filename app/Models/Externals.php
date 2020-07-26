<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Externals для задания номер 3.
 * @package App\Models
 */
class Externals extends Model
{

    protected $table = 'resources';

    public $fillable = [
        'url',
        'last_checked'
    ];

    public $casts = [
        'last_checked' => 'datetime'
    ];

    public $timestamps = false;
}
