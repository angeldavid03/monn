<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empleados;
use App\Models\puestos_trabajo;
use App\Models\Puestos_trabajo as ModelsPuestos_trabajo;


use App\MoonShine\Resources\puestos_trabajoResource;


use MoonShine\Resources\ModelResource;
use MoonShine\Fields\Date;
use Illuminate\Support\Facades\Request;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Text;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Select; 
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Image;
use MoonShine\Fields\BelongsTo;
use phpDocumentor\Reflection\Types\Nullable;

use function Laravel\Prompts\text;

/**
 * @extends ModelResource<Empleados>
 */
class EmpleadosResource extends ModelResource
{
    protected string $model = Empleados::class;

    protected string $title = 'Empleados';

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    protected bool $detailInModal = true;

    protected bool $saveFilterState = true;

    public function redirectAfterSave(): string
    {
        $referer = Request::header('referer');
        return $referer ?: '/';
    }


    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('codigo_empleado'),
                Text::make('nombre'),
                Text::make('apellido'),
                Text::make('direccion'),
                Date::make('fecha_nacimiento'),
                Text::make('informacion_contacto'),
                Text::make('genero'),
                Select::make('puesto de Trabajo', 'id_puestos_trabajo')
                    ->options(function () {
                        return puestos_trabajo::all()->pluck('nombre', 'id')->toArray();
                    })
                    ->displayUsing(function ($value) {
                        $puesto = puestos_trabajo::find($value);
                        return $puesto ? $puesto->nombre : 'N/A';
                    }),
                Image::make('foto'),
            ]),
        ];
    }

    /**
     * @param Empleados $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'codigo_empleado' => 'required | unique:empleados,codigo_empleado,' . $item->getKey(),
            'nombre',
            'apellido',
            'direccion',
            'fecha_nacimiento',
            'informacion_contacto',
            'genero',
            'id_puestos_trabajo',
            'foto' => '   | image|max:2048',
        ];
    }
}
