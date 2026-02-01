<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LogLevel extends Pivot
{
    protected $primaryKey = 'id';
    
    protected $table = 'log_level';

    protected $fillable = [
        'log_id',
        'level_id',
        'created_at',
        'updated_at',
        'is_delete'
    ];
}
