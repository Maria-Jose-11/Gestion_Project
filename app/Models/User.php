<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cedula','name','apellido','direccion','telefono','fecha_nacimiento','genero','especialidad','username', 'password','rol','email'];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function signos_vitales()
    {
        return $this->hasMany('App\Models\signos_vitales');
    }

    public function paciente()
    {
        return $this->hasMany('App\Models\paciente');
    }

    public function diagnosticos()
    {
        return $this->hasMany('App\Models\diagnostico');
    }
}
