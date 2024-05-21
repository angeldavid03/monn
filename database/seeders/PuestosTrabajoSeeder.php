<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Puestos_trabajo;

class PuestosTrabajoSeeder extends Seeder
{
    public function run()
    {
        $puestos = [
            ['nombre' => 'Líder de Ventas'],
            ['nombre' => 'Developer'],
            ['nombre' => 'Asesor Comercial'],
            ['nombre' => 'Diseñador grafico'],
            ['nombre' => 'Coordinador de Marketing & IT'],
            ['nombre' => 'Lider de Inventarios'],
            ['nombre' => 'Auxiliar Inventarios'],
            ['nombre' => 'Lider de Venta Online'],
            ['nombre' => 'Auxiliar Logistico'],
            ['nombre' => 'Tecnico Garantias & IT'],
            ['nombre' => 'Auxiliar Facturacion'],
            ['nombre' => 'Auxiliar Contable y Administrativo'],
            ['nombre' => 'Asesor Comercial TAT'],
            ['nombre' => 'Asesor Call Center Mayorista'],
            ['nombre' => 'Auxiliar de Servicios Generales'],
            ['nombre' => 'Lider de Tesorera'],
            ['nombre' => 'Conductor'],
            ['nombre' => 'Auxiliar de Inventarios'],
            ['nombre' => 'cord. Tesorera y Cartera'],
            ['nombre' => 'Lider Documental y Logistico'],
            ['nombre' => 'Asesor Servicio al Cliente'],
            ['nombre' => 'Cajera'],
            ['nombre' => 'Lider de Talento Humano'],
            
        ];

        foreach ($puestos as $puesto) {
            Puestos_trabajo::create($puesto);
        }
        
    }
}
