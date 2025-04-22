<?php

namespace App\Models;

use App\Models\Curso;
use App\Models\Aluno;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';

    protected $fillable = [
        'ano',
    ];
    
    public function cursos() {
        return $this->hasMany(Curso::class);
    }
    
    public function alunos() {
        return $this->belongsTo(Aluno::class);
    }
}
