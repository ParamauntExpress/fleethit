<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['name', 'hash'];
    
    public function car() {
        return $this->belongsTo('App\Car');
    }
}
