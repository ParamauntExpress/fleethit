<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['first', 'last', 'age', 'phone', 'address', 'zip', 'license', 'social', 'bank', 'image'];
}
