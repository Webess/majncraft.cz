<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cjdz extends Model
{
    public $primaryKey = 'slug';

    public function category()
    {
        return $this->belongsTo(CjdzCategory::class, 'cjdz_category_id', 'id');
    }
}
