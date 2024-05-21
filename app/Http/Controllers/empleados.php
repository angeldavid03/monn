<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class empleados extends Controller
{
    protected function beforeCreating(Model $item): Model
    {
        return $item;
        
    }
     
    protected function afterCreated(Model $item): Model
    {
        return $item;

    }
     
    protected function beforeUpdating(Model $item): Model
    {
        return $item;
    }
     
    protected function afterUpdated(Model $item): Model
    {
        return $item;
    }
     
    protected function beforeDeleting(Model $item): Model
    {
        return $item;
    }
     
    protected function afterDeleted(Model $item): Model
    {
        return $item;
    }
     
    protected function beforeMassDeleting(array $ids): void
    {
        // Logic here
    }
     
    protected function afterMassDeleted(array $ids): void
    {
        // Logic here
    }
     
    protected function beforeForceDeleting(Model $item): Model
    {
        return $item;
    }
     
    protected function afterForceDeleted(Model $item): Model
    {
        return $item;
    }
     
    protected function beforeRestoring(Model $item): Model
    {
        return $item;
    }
     
    protected function afterRestored(Model $item): Model
    {
        return $item;
    }
}
