<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hexadecimal',
    ];

    /**
     * Get the color users.
     */
    public function post()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
