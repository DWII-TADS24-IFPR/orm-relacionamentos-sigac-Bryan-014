<?php

namespace App\Models;

use App\Models\Comprovante;
use App\Models\Curso;
use App\Models\Declaracao;
use App\Models\Turma;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
    ];

    public function cursos() {
        return $this->hasMany(Curso::class);
    }

    public function turma() {
        return $this->hasMany(Turma::class);
    }

    public function comprovantes() {
        return $this->belongsTo(Comprovante::class);
    }

    public function declaracoens() {
        return $this->belongsTo(Declaracao::class);
    }
}
