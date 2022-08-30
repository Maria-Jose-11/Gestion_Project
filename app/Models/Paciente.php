<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'apellido', 
        'cedula', 
        'fecha_nacimiento', 
        'telefono', 
        'domicilio', 
        'id_users'
    ];


    //relaciones
    public function familiar_paciente()
    {
        return $this->hasMany('App\Models\familiar_paciente');
    }
    public function diagnosticos()
    {
        return $this->hasMany('App\Models\diagnostico');
    }
    public function signos_vitales()
    {
        return $this->hasMany('App\Models\signos_vitales');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\users');
    }
}
