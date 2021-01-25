<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'color',
        'price'
    ];
}
