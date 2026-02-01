<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $fillable = [
        'user_id',
        'total_view',
        'total_saved',
        'status',
        'title',
        'content',
        'thumbnail',
        'created_at',
        'updated_at',
        'is_delete',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
