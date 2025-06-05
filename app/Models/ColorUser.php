<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColorUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'color_id',
        'user_id',
    ];
}
