<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\empleados;

class puestos_trabajo extends Model
{
    use HasFactory;

    protected $table = 'puestos_trabajo';

    

    public function empleados()
    {
        return $this->hasMany(empleados::class, 'id_puesto_trabajo');
    }
}
