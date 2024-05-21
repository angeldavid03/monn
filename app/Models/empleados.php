<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\puestos_trabajo;

class empleados extends Model
{

    protected $table = 'empleados';

    public function puestoTrabajo()
    {
        return $this->belongsTo(puestos_trabajo::class, 'id_puestos_trabajo');
    }

    
    public $timestamps = true;
    public $timestamp = true;
    use HasFactory;

    protected $fillable = [
        'codigo_empleado',
        'nombre',
        'apellido',
        'direccion',
        'fecha_nacimiento',
        'informacion_contacto',
        'id_puestos_trabajo',
        'foto',

        
    ];

    protected $dates = [
        'fecha_nacimiento',
        'created_at',
        'updated_at'
    ];
}
