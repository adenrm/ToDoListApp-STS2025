<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class penugas extends Model
{
    protected $table = 'penugas';

    protected function tugas()
    {
        return $this->HasMany(tugas::class, 'id_penugas');
    }
}
