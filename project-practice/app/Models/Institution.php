<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}
