<?php

namespace App\Models;

use App\Models\Comprovante;
use App\Models\Curso;
use App\Models\Documento;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nome',
        'maximo_horas',
    ];

    public function cursos() {
        return $this->hasMany(Curso::class);
    }

    public function documentos() {
        return $this->belongsTo(Documento::class);
    }

    public function comprovantes() {
        return $this->belongsTo(Comprovante::class);
    }
}
