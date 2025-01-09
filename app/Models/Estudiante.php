<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = "estudiante";

    public function notas()  {
        return $this->hasMany(Nota::class);
    }

    public function inscripcion()  {
        return $this->hasOne(Inscripcion::class);
    }
}
