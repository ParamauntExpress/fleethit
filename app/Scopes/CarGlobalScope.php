<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class CarGlobalScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        return $builder->whereNull('deleted_at');
    }
}