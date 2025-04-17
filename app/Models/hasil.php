<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class hasil extends Model
{
    protected $table = 'hasil';

    protected function tugas(): BelongsTo
    {
        return $this->belongsTo(tugas::class, 'id');
    }
}
