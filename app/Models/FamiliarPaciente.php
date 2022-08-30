<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarPaciente extends Model
{
    use HasFactory;

    protected $fillable = ['id_paciente', 'id_familiar'];

    public function paciente()
    {
        return $this->belongsTo('App\Models\Paciente');
    }
}
