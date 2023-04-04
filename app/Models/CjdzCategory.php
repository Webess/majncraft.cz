<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CjdzCategory extends Model
{
    public function cjdzs()
    {
        return $this->hasMany(Cjdz::class);
    }
}
