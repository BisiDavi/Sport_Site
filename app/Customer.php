<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function scopeActive($query)
    {
        return $query->where('acitve', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('inactive', 0);
    }

}
