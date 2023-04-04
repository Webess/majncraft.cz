<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WlAttempt extends Model
{
    public $fillable = ['username', 'uuid', 'attempt_sum', 'is_whitelisted'];
}
