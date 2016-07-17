<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Scopes\CarGlobalScope;

class Car extends Model
{
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope(new CarGlobalScope);
    // }
    
    use SoftDeletes;
    
    protected $fillable = ['year', 'mileage', 'vin', 'color', 'notes', 'price'];
    
    protected $dates = ['deleted_at'];
    
    public function photos() {
        return $this->hasMany('App\Photo');
    }
}
