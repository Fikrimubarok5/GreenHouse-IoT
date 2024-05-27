<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['name','type','value'];

    protected $attributes = [
        'value' => 0,
    ];
}
