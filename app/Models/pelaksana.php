<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pelaksana extends Model
{
    protected $table = 'pelaksana';

    protected function tugas()
    {
        return $this->HasMany(tugas::class, 'id_penugas');
    }
}
