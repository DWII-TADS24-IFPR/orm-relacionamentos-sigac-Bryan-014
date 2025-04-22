<?php

namespace App\Models;

use App\Models\Curso;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveis';

    protected $fillable = [
        'nome',
    ];

    public function cursos() {
        return $this->belongsTo(Curso::class);
    }
}
