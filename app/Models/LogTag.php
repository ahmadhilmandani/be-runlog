<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LogTag extends Pivot
{
    protected $primaryKey = 'id';

    protected $table = 'log_tag';

    protected $fillable = [
        'log_id',
        'tag_id',
        'created_at',
        'updated_at',
        'is_delete'
    ];
}
