<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\puestos_trabajo;
use MoonShine\Fields\Text;
use MoonShine\Components\TableBuilder;

use Closure;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use Illuminate\View\ComponentAttributeBag;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Puestos_trabajo>
 */
class puestos_trabajoResource extends ModelResource
{
    protected string $model = puestos_trabajo::class;

    protected string $title = 'Categorias';

    protected string $sortColumn = 'id'; // Default sort field 
 
    protected string $sortDirection = 'puestos_trabajoResource'; // Default sort type 
 
    protected int $itemsPerPage = 25; //

    /**
     * @return list<MoonShineComponent|Field>
     */

     
  
    


    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('nombre'),
            ]),
        ];
    }

    /**
     * @param Puestos_trabajo $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'nombre' =>'string|max:255',
        ];
    }

    public function table(): TableBuilder
    {
        return TableBuilder::make()
            ->fields([
                ID::make()->sortable(),
                Text::make('nombre'),
            ])
            ->items(puestos_trabajo::all())
            ->simple();
    }
}
