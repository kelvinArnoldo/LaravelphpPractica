<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }
}
