<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class tugas extends Model
{
    protected $table = 'tugas';

    protected function hasil(): HasOne
    {
        return $this->hasOne(hasil::class, 'id_tugas');
    }


    protected function penugas()
    {
        return $this->belongsTo(penugas::class, 'id_penugas', 'id');
    }

    protected function pelaksana()
    {
        return $this->belongsTo(pelaksana::class, 'id_pelaksana', 'id');
    }
}
